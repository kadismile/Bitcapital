<?php

namespace App\Helpers;
use Sentinel;
use DB;
use Request;
use App\User;
use App\Wallet;

class Helper
{


    public static function get_user(){
        $user = Sentinel::getUser();
        return $user;
    }



    public static function username(){
        if(Sentinel::check()){
           return  $user_name = Sentinel::getUser()->first_name;
        }
    }

    public static function isLoggedIn(){
        if(Sentinel::check()){
            return  true;
        }
    }




    public static function userCategory($id){
        //$category = Usercategory::where('id', '=', "$id") ->firstorFail();
        $query =  DB::table('usercategories')
            ->where('id', '=', $id)->get();
        return $query;
    }





    public static function myWallet($id){
        $query = DB::table('user_wallets')->where([
            ['user_id', '=', $id]
        ])->get();
        return $query;
    }

    public static function userWallet($id){
        $query =  DB::table('wallets')
            ->where([['id', '=', $id]])->get();
        return $query;
    }



    public static function walletname($id){
        //$category = Usercategory::where('id', '=', "$id") ->firstorFail();
        $query =  DB::table('wallets')
            /*->where([
                ['id', '=', $id]
            ])->get();*/
            ->where('id', '=', $id)->get();
        return $query{0};
    }


    public static function wallethistory($id){
        //search the deposit table where the wallet_id = $id and the amount != 0.00
        // the the wallet id
        $query =  DB::table('deposits')
            ->where('wallet_id', '=', $id)
            ->orwhere('amount', '=', 0)
            ->get();
        return $query;
    }


    public static function Wallets(){
        $query =  DB::table('wallets')->get();
        return $query;
    }

    public static function walletNames($id){
        //$category = Usercategory::where('id', '=', "$id") ->firstorFail();
        $query =  DB::table('wallets')
            /*->where([
                ['id', '=', $id]
            ])->get();*/
            ->where('id', '=', $id)->get();
        return $query{0}->wallet_name;
    }


    public static function paymetMethod($id){
        $query = DB::table('payment_methods')
            ->where('id', '=', $id)->get();
        return $query{0}->name;
    }

    public static function getUserById($id){
        $query = DB::table('users')
            ->where('id', '=', $id)->get();
        return $query;
    }

    public static function balance($id){
        $current_balance =  DB::table('users')
        ->where('id', '=', $id)->get();
        $salim =  $current_balance{0}->current_balance;
        return $salim;
    }

    ######################ACCOUNTS#######################

        public static function activeDeposits(){
            /*$x = 0.00;
            $user_id = Sentinel::getUser()->id;
            $deposits = DB::table('deposits')
                ->where('user_id', '=', $user_id)
                ->where('status', '=', 1)
                ->get();
            foreach ($deposits as $deposit){
                $x  +=$deposit->amount;
            }
            return $x ;*/
            $deposit_balance = Sentinel::getUser()->deposit_balance;

            return $deposit_balance;
        }

    public static function activeWithdrawals(){
        $x = 0.00;
        $user_id = Sentinel::getUser()->id;
        $withdrawals = DB::table('withdrawals')
            ->where('user_id', '=', $user_id)
            ->where('status', '=', 1)
            ->get();
        foreach ($withdrawals as $withdrawal){
            $x  +=$withdrawal->amount;
        }
        return $x;
    }


    public static function accountBalance(){
        $profit_balance = Sentinel::getUser()->profit_balance;
        $deposits = Helper::activeDeposits() ;
        $commission = Helper::commissionBalance();
        $withdrawals = Helper::activeWithdrawals();
        return $x = $profit_balance + $deposits + $commission /*- ($withdrawals)*/;
    }

    public static function commissionBalance(){

        $commission_balance = Sentinel::getUser()->commission_balance;

        return $commission_balance;
    }


    public static function profitBalance(){

        $profit_balance = Sentinel::getUser()->profit_balance;

        return $profit_balance;
    }

    ######################ACCOUNTS#######################










}