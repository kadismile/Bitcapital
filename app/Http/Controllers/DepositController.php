<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Sentinel;
use App\UserWallet;

class DepositController extends Controller
{
    public function update($id){

        $user_id = Input::get('user_id');  //get user id from from
        $balance = (int)Input::get('balance');  // get balance from form

        $deposit_balance =  DB::table('users')
            ->where('id', '=', $user_id)->get();
        foreach ($deposit_balance as $deposit){
            $IntDepbalance = $deposit->deposit_balance;
        }
       /* $IntDepbalance = (int)$deposit_balance{0}->deposit_balance;*/
        DB::table('users')
            ->where('id', $user_id)
            ->update(['deposit_balance' => ($IntDepbalance+$balance) ]);

        #update Deposits table to active
        DB::table('deposits')
            ->where('id', $id)
            ->update(['status' => 1]);

        return redirect('user_deposits')->with(['success'=> 'Successful']);
    }


    public function adminpostDeposit(){
        $user_id = Input::get('user_id');  //get user id from from
        $amount = (int)Input::get('amount');  //get user id from from

        $deposit_balance =  DB::table('users')
            ->where('id', '=', $user_id)->get();
        foreach ($deposit_balance as $deposit){
            $IntDepbalance = $deposit->deposit_balance;
        }
        /* $IntDepbalance = (int)$deposit_balance{0}->deposit_balance;*/
        DB::table('users')
            ->where('id', $user_id)
            ->update(['deposit_balance' => ($IntDepbalance+$amount) ]);


        DB::table('deposits')->insert(
            [
                'user_id' => $user_id,
                'wallet_id' => 13,
                'amount' => $amount,
                'refId' => $user_id.mt_rand(0, 10000),
                'status' => 1,
                'payment_method_id' => 3,
                'created_at' => date("Y/m/d")
            ]
        );
        return redirect('dashboard')->with(['success'=> 'Your Deposit was successful ']);
    }

    public function deletePayment($id){
        $payment= PaymentMethod::find($id);
        $payment->delete();
        return redirect('/payment_methods');
    }
}
