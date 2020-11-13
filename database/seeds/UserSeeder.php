<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'              => '',
                'phone'             => '',
                'email'             => '',
                'email_verified_at' => new DateTime(),
                'password'          => Hash::make('12345678'),
                'created_at'        => new DateTime(),
                'updated_at'        => new DateTime(),
            ],
        ]);
    }
}
