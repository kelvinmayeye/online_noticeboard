<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class sendMailController extends Controller
{
    public function sendNotification(Request $request){

        // $user1 = new User();
        // $user1->name=$request->title;
        // $user1->email=$request->messege;

        $user = User::all();

        $details=[

            'greeting'=>$request->title,
            'body'=>$request->messege,
            'actiontext'=>'Subscribe this channel',
            'actionurl'=>'/',
            'lastline'=>'bye this is the last line'

        ];

        Notification::send($user,new SendEmailNotification($details));

        Session::flash("success","Successfully sent mail");
        return redirect("post");

    }
}
