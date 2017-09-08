<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')
            ->insert([
                'id' => 1,
                'name' => 'Jhon',
                'email' => 'zxc@zxc.ru',
                'message' => 'text text text',
            ]);
    }
}
