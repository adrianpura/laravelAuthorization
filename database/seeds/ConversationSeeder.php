<?php

use Illuminate\Database\Seeder;
use App\Conversation;


class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 5)->create();
        factory(Conversation::class, 5)->create();
        factory(\App\Reply::class, 15)->create();
    }
}
