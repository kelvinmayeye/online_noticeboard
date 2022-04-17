<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function getAddPost(){
        return view('dashboard.posts.addpost');
    }

    public function storePost(Request $request){

        $user = User::all();
        $details=[
            'greeting'=>$request->title,
            'body'=>$request->messege,
            'actiontext'=>'Subscribe this channel',
            'actionurl'=>'/',
            'lastline'=>'bye this is the last line'
        ];
        Notification::send($user,new SendEmailNotification($details));

        //validating input to post to the database
        $this->validate($request,["title"=>"required"]);

        $post = new Post();
        $post->title=$request->title;
        $post->messege=$request->messege;
        $post->save();

        Session::flash("success","Successfully sent mails");
        return redirect("add_posts");
    }
}
