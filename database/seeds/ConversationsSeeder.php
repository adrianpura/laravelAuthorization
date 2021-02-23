<?php

use App\Conversation;
use App\Reply;
use App\User;
use Illuminate\Database\Seeder;

class ConversationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
        factory(Conversation::class, 5)->create();
        factory(Reply::class, 15)->create();
    }
}
