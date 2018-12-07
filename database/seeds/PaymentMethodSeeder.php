<?php

use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            'name' => 'Credit Card',
        ]);

        DB::table('payment_methods')->insert([
            'name' => 'Western Union',
        ]);

        DB::table('payment_methods')->insert([
            'name' => 'Moneygram',
        ]);

        DB::table('payment_methods')->insert([
            'name' => 'Perfect Money',
        ]);

        DB::table('payment_methods')->insert([
            'name' => 'Bank Transfer',
        ]);
    }
}
