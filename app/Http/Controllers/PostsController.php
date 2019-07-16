<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::paginate(6);

        return $posts;
        return view('posts.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return time();
        $post = new Post;
        $this->validate($request,[
            'url'=>'image|max:1999'
        ]);

        if($request->hasFile('url')){
            //get filename adn extension
            $filenamewithext=$request-> 	file('url')->	
            getClientOriginalName();
            //get just filename
            $filename=pathinfo($filenamewithext, 	PATHINFO_FILENAME);
            //get just extension
            $extension=$request->	file('url')->	getClientOriginalExtension();
            //set filename
            $image=	'Image-'.time().'.'.$extension;
            //upload image
            $path=$request->file('url')->storeAs('public/posts/',$image);
        }
        else{
            $image = 'noimage.jpg';
        }
        $post->title=$request->title;
        $post->url = $image;
        $post->user_id =Auth::user()->id;
        $post->body=$request->body;

        $post->save();

        return redirect()->route('posts.show',[$post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
