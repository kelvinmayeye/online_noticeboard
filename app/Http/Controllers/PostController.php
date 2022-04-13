<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function storePost(Request $request){
        //validating input
        $this->validate($request,["title"=>"required"]);

        $post = new Post();
        $post->title=$request->title;
        $post->messege=$request->messege;
       // $post->post_by=$request->referingtouser;
        $post->save();

        Session::flash("success","Successfully saved");
       // return $request->all();
        return redirect("add_posts");
    }
}
