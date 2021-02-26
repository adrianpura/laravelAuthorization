<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply){

//        if(Gate::denies('update-conversation',$reply->conversation)){
//            die('handle it this way');
//        }


        $this->authorize('update',$reply->conversation);
//        $this->authorize($reply->conversation);
        $reply->conversation->setBestReply($reply);
        return back();
    }
}
