<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'title' => 'title Message',
                'message' => 'text text text',
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);
    }
}
