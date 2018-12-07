<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Helpers\Helper;
use DB;
use App\User;
use Illuminate\Support\Facades\Input;


class WithdrawController extends Controller
{
    public function userWithdrawals(){
        $withdrawals =  DB::table('withdrawals')
            ->where('status', '=', 0)->get();
        return view('admin.payment.userWithdrawals', compact('withdrawals'));
    }

    public function postWithdraw()
    {
        $user_id = Sentinel::getUser()->id;

        $amount= Input::get('amount');
        $x = str_replace('$', '', $amount);
        $amount = str_replace(',', '', $x);

        $withdraw_from = Input::get('amountWithdrawFrom');
        //$withdraw_from= Input::get('withdraw_from');

        /*########################################################################################################*/
        $commission_balance = Helper::commissionBalance();
        $profit_balance = Helper::profitBalance();
        $deposit_balance = User::where('id', '=', "$user_id") ->firstorFail()->deposit_balance;

        switch ($withdraw_from) {
            case 'commission_balance':
                if($amount > $commission_balance){
                    return redirect()->back()->with(['error' => 'Amount higher than your Commission Balance']);
                }else{
                    DB::table('users')
                        ->where('id', $user_id)
                        ->update(['commission_balance' => ($commission_balance - $amount) ]);
                }
                break;
            case 'deposits':
                if($amount > $deposit_balance){
                    return redirect()->back()->with(['error' => 'Amount higher than Your Deposit Balance']);
                }else{
                    DB::table('users')
                        ->where('id', $user_id)
                        ->update(['deposit_balance' => ($deposit_balance - $amount) ]);
                }
                break;
            case 'profit_balance':
                if($amount > $profit_balance){
                    return redirect()->back()->with(['error' => 'Amount higher than your Profit Balance']);
                }else{
                    DB::table('users')
                        ->where('id', $user_id)
                        ->update(['profit_balance' => ($profit_balance - $amount) ]);
                }
                break;
            default:
                ;
        }

        /*########################################################################################################*/



        DB::table('withdrawals')->insert(
            [
                'user_id' => $user_id,
                'withdraw_from' => $withdraw_from,
                'amount' => $amount,
                'refId' => $user_id.mt_rand(0, 10000),
                'status' => 0,
                'withdrawal_method' => 1,
                'created_at' => date("Y/m/d")
            ]
        );
        return redirect('withdraw')->with(['success'=> 'Your Withdrawal request has been submitted ']);


    }


    public function update($id){

        #update Deposits table to active
        DB::table('withdrawals')
            ->where('id', $id)
            ->update(['status' => 1]);

        return redirect('user_withdrawals')->with(['success'=> 'Successful']);
        //return $id;
    }
}
