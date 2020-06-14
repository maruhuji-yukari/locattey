<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'managers_name'=>'managers_yukarin',
            'managers_password'=>Hash::make('mp_012345'),
            'managers_email'=>'yukarin53721@gmail.com',
        ]);
    }
}
