<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $fillable = [
       'amount'
    ];


    public static function updateBalance($user_id, $bitcoin, $litecoin, $etherium,
                                         $bit_gold,$blocknet, $monaco, $metal,
                                         $tron, $cardano, $verge,
                                         $quash, $nexus){


        UserWallet::where('wallet_id', 1)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $bitcoin
            ]);

        UserWallet::where('wallet_id', 2)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $litecoin
            ]);

        UserWallet::where('wallet_id', 3)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $etherium
            ]);

        UserWallet::where('wallet_id', 4)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $bit_gold
            ]);

        UserWallet::where('wallet_id', 5)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $blocknet
            ]);

        UserWallet::where('wallet_id', 6)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $monaco
            ]);

        UserWallet::where('wallet_id', 7)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $metal
            ]);

        UserWallet::where('wallet_id', 8)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $tron
            ]);

        UserWallet::where('wallet_id', 9)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $cardano
            ]);

        UserWallet::where('wallet_id', 10)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $verge
            ]);

        UserWallet::where('wallet_id', 11)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $quash
            ]);

        UserWallet::where('wallet_id', 12)
            ->where('user_id', $user_id)
            ->first()
            ->update([
                'amount' => $nexus
            ]);
    }


}
