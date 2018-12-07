<?php

use Illuminate\Database\Seeder;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('wallets')->insert([
            'wallet_name' => 'Bitcoin',
            'wallet_acronym' => 'BTC',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Litecoin',
            'wallet_acronym' => 'LTC',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Ethereum',
            'wallet_acronym' => 'ETH',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Bitcoin Gold',
            'wallet_acronym' => 'BTG',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Blocknet',
            'wallet_acronym' => 'BLOCK',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Monaco',
            'wallet_acronym' => 'MNCO',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Metal',
            'wallet_acronym' => 'MTL',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'TRON',
            'wallet_acronym' => 'TRX',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Cardano',
            'wallet_acronym' => 'ADA',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Verge',
            'wallet_acronym' => 'XVG',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'QASH',
            'wallet_acronym' => 'QASH',
            'wallet_rate' => 200,
        ]);

        DB::table('wallets')->insert([
            'wallet_name' => 'Nexus',
            'wallet_acronym' => 'NXS',
            'wallet_rate' => 200,
        ]);

      /*  DB::table('wallets')->insert([
            'wallet_name' => 'Balance',
            'wallet_acronym' => 'BAL',
            'wallet_rate' => 1,
        ]);*/




      /*  DB::table('users')->orderBy('id')->chunk(100, function ($users) {
            foreach ($users as $user) {

            }
        });*/
    }
}
