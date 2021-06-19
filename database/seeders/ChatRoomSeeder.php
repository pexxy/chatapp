<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_rooms')->insert([

            'name'=> 'General'

        ]);

        DB::table('chat_rooms')->insert([

            'name'=> 'Healthcare'

        ]);
        DB::table('chat_rooms')->insert([

            'name'=> 'Fashion'

        ]);
        DB::table('chat_rooms')->insert([

            'name'=> 'Lifestyle'

        ]);
    }
}
