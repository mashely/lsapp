<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use DB;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return post::where('title','post Two')->get();
        //$posts = DB::select('SELECT * from post);
        //$posts = post::orderBy('title','desc')->take(1)->get();
        //$posts = post::orderBy('title','asc')->get();

        
        $posts = post::orderBy('title','asc')->paginate();
       return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
       $this->validate($request ,[
           'title' => 'required',
           'body' => 'required'
       ]);
   

       //The place where the post is created to send data to the DB
       $post = new post;
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->user_id =auth()->user()->id;
       $post->save();

       return redirect('/posts')->with('success','post created');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this-> Validate($request, [
            'title' => 'required',
            'body'=>'required' 
           ]);
           
           //create a post which will capture data from rhe form
           $post = post::find($id);
           $post->title = $request->input('title');
           $post->body = $request->input('body');
           $post->save();
   
           return redirect('/posts')->with('succeess','post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post ->delete();
        return redirect('/posts')->with('succeess','post removed');
    }
}
