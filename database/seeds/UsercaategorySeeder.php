<?php

use Illuminate\Database\Seeder;

class UsercaategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usercategories')->insert([
            'name' => 'BASIC $1000 AT 2.15% DAILY ROI',
            'acronym' => 'BASIC',
            'amount' => 500,
            'rate' => 2.15
        ]);

        DB::table('usercategories')->insert([
            'name' => 'STANDARD $2000 AT 5% DAILY ROI',
            'acronym' => 'STANDARD',
            'amount' => 2000,
            'rate' => 5
        ]);

        DB::table('usercategories')->insert([
            'name' => 'ADVANCE $5000 AT 7% DAILY ROI',
            'acronym' => 'ADVANCE',
            'amount' => 5000,
            'rate' => 7
        ]);

        DB::table('usercategories')->insert([
            'name' => 'PREMIUM $10,000 AT 8.8% DAILY ROI',
            'acronym' => 'PREMIUM',
            'amount' => 10000,
            'rate' => 8.8
        ]);

        DB::table('usercategories')->insert([
            'name' => 'ULTIMATE $15,000 AT 10.01% DAILY ROI',
            'acronym' => 'ULTIMATE',
            'amount' => 15000,
            'rate' => 10.01
        ]);

        DB::table('usercategories')->insert([
            'name' => 'GOLD $20,000 &nbsp; AT 15.15% DAILY ROI',
            'acronym' => 'GOLD',
            'amount' => 25000,
            'rate' => 15.15
        ]);

    }
}
