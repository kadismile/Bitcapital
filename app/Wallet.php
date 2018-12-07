<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Wallet extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public static function addWallet($user){
        DB::table('user_wallets')->insert([
            'wallet_id' => 1,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'BTC'.rand(1,10000),
            'wallet_name' => 'Bitcoin',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 2,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'LTC'.rand(1,10000),
            'wallet_name' => 'Litecoin',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 3,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'ETH'.rand(1,10000),
            'wallet_name' => 'Ethereum',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 4,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'BTG'.rand(1,10000),
            'wallet_name' => 'Bitcoin Gold',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 5,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'BLOCK'.rand(1,10000),
            'wallet_name' => 'Blocknet',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 6,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'MNCO'.rand(1,10000),
            'wallet_name' => 'Monaco',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 7,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'MTL'.rand(1,10000),
            'wallet_name' => 'Metal',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 8,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'TRX'.rand(1,10000),
            'wallet_name' => 'TRON',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 9,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'ADA'.rand(1,10000),
            'wallet_name' => 'Cardano',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 10,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'XVG'.rand(1,10000),
            'wallet_name' => 'Verge',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 11,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'QASH'.rand(1,10000),
            'wallet_name' => 'QASH',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);

        DB::table('user_wallets')->insert([
            'wallet_id' => 12,
            'wallet_address' => md5(time() . rand()),
            'wallet_pin' => 'NXS'.rand(1,10000),
            'wallet_name' => 'Nexus',
            'user_id' => $user->id,
            'amount' => 0.00,

        ]);




    }
}
