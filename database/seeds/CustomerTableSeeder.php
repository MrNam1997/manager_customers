<?php

use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 30; $i++) {
            $customer = new Customer();
            $customer->name = str::random(15);
            $customer->email = str::random(10) . "@gmail.com";
            $customer->dob = '2015-11-11';
            $customer->save();


        }

    }
}
