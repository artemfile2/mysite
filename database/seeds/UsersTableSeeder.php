<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert([
                'login' => 'admin',
                'name' => 'admin',
                'surname' => 'suradmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'role_id' => 1,
                'gender' => 1,
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);

        DB::table('users')
            ->insert([
                'login' => 'user',
                'name' => 'user',
                'surname' => 'suruser',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123'),
                'role_id' => 1,
                'gender' => 1,
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);
    }
}
