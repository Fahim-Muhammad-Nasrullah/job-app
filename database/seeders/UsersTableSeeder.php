<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Factory::create();

            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('secret'),
                'role' => 1,
                'created_at' => $data->dateTime($max = 'now'),
                'updated_at' => $data->dateTime($max = 'now'),
            ]);
    }
}
