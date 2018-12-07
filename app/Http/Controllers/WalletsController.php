<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Helpers;
use App\Usercategory;
use App\Wallet;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use App\User;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class WalletsController extends Controller
{
    public function postWallet(Request $request){
        $walletAcronym = Helper::walletname($request->wallet_acronym);

        $user = Sentinel::getUser();
        $user_id = $user->id;
        $wallet_id = $request->wallet_id;
        $wallet_address = md5(time() . rand());
        $wallet_pin = $walletAcronym.rand(1,10000);
        $amount = 0.00;
    }

    public function wallets($slug){
        if (Sentinel::check())
        {
            $wallet_name = Wallet::where('wallet_name', "$slug")->first();

            $user = Sentinel::getUser();

            $wallets = Wallet::all();

            $id = Sentinel::getUser()->usercategory_id;

            $usercategory = Usercategory::userCategory($id);

            return view('users.wallet.wallet', compact('user','usercategory', 'wallets', 'wallet_name'));
        }else
        {
            return view('pages.home', compact('user'));
        }

    }


    public function fundWallet(){
        $wallets = Wallet::all();
        if (Sentinel::check()) {
            return view('users.wallet.fundWallet', compact('wallets'));
        }
        else
        {
            return view('pages.home', compact('user'));
        }


    }
}
