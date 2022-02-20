<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from posts
        $posts= Post::all();
        // $post->user->name;
        // return $posts;
        return view("posts.index",["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // $data=$request->all();
        // $data=$request->title;
        // post::create([
        //     "title"=>$request->title,
        //     "description"=>$request->description
        // ]);

        // validate([rolrs],[msg])

        // $request->validate([
        //     'title'=>'required|min:3',
        //     'description'=>'required'
        // ]);
        $post= new Post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->user_id=Auth::id();
        $post->save();

        // return "done";
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //select * from posts where id=$id
        // $post=post::where("variable","condition","value")
        // $post=post::where("salary","<",5000)->get(); >>> return all data
        // $post=post::where("id","<",5)->first(); >>> return first row only as find()       

        $post=post::find($id);
        return view("posts.show",$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=post::find($id);
        return view("posts.edit",$post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        // $request->validate([
        //     'title'=>'required|min:3',
        //     'description'=>'required'
        // ]);

        $post= post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        // return $request;

        // $posts=Post::all();
        // return view("posts.index", ["posts"=>$posts]);

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Post::find($id)->delete();
        Post::destroy($id);
// return "done";
        return redirect('/posts');
    }
}
