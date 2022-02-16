<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //list all posts
    function index(){
        $posts= [
            ["id"=>1,
            "name"=>"Aya",
            "body"=>"Hello!",
            "title"=>"info"],
            ["id"=>2,
            "name"=>"Amr",
            "body"=>"Hello!",
            "title"=>"info"],
            ["id"=>3,
            "name"=>"Kareem",
            "body"=>"Hello!",
            "title"=>"info"],
        ];
        return view("posts.index",["posts"=>$posts]);
    
    }

    function show($id){
        $post= ["id"=>$id,
        "name"=>"Aya",
        "body"=>"Hello!",
        "title"=>"info"];
    return view('posts.show',$post);
    }

    function edit(){
        return view("posts.edit");
    }

    function update(){

    }

    function create(){
        return view("posts.create");
    }

    function destroy(){
        
    }
}
