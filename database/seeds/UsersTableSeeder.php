<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('users')->insert([
            [
                'IsAdmin' => '1',
                'name' => 'John Doe',
                'email' => 'qwe@gmail.com',
                'password' => bcrypt('qwe'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'IsAdmin' => '0',
                'name' => 'John Doe1',
                'email' => 'q@gmail.com',
                'password' => bcrypt('q'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
