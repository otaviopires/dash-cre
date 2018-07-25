<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		$this->middleware('auth')->except('logout');
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Post::where('title', 'Post two')->get();
        //$posts =  Post::all();
        //$posts =  Post::orderBy('title', 'desc')->get();

        $posts =  Post::orderBy('created_at', 'desc')->paginate(2);
        return view('posts.index')->with('posts', $posts);
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
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'body' => 'required',
			'cover_image' => 'image|nullable|max:1999'
		]);
		
		//Handle file upload
		if($request->hasFile('cover_image')){
			//Get the file name with the extenion
			$filenameWithExt = $request->file('cover_image')->getClientOriginalName();
			//Get just file name
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			//Get just extension
			$extension = $request->file('cover_image')->getClientOriginalExtension();
			//Filename to store
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			//Upload image
			$path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
		} else {
			$fileNameToStore = 'noimage.jpg';
		}
		
		//Create post
		$post = new Post;
		$post->user_id = auth()->user()->id;
		$post->title = $request->input('title');
		$post->body = $request->input('body');
		$post->cover_image = $fileNameToStore;
		$post->save();
		
		return redirect('/posts')->with('success', 'Postagem criada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
		
		if(auth()->user()->id != $post->user_id){
			return redirect('/posts')->with('error', 'Página não autorizada');
		}
		
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, [
			'title' => 'required',
			'body' => 'required'
		]);
		
		//Handle file upload
		if($request->hasFile('cover_image')){
			//Get the file name with the extenion
			$filenameWithExt = $request->file('cover_image')->getClientOriginalName();
			//Get just file name
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			//Get just extension
			$extension = $request->file('cover_image')->getClientOriginalExtension();
			//Filename to store
			$filenameToStore = $filename.'_'.time().'.'.$extension;
			//Upload image
			$path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);
		}
		
		//Update post
		$post = Post::find($id);
		$post->title = $request->input('title');
		$post->body = $request->input('body');
		if($request->hasFile('cover_image')){
			$post->cover_image = $filenameToStore;
		}

		$post->save();
		
		return redirect('/posts/list')->with('success', 'Postagem atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
		
		if(auth()->user()->id != $post->user_id){
			return redirect('/posts/list')->with('error', 'Página não autorizada');
		}
		
		if($post->cover_image != 'noimage.jpg'){
			//Delete image
			Storage::delete('public/cover_images/'.$post->cover_image);
		}
		
		$post->delete();
		return redirect('/posts/list')->with('success', 'Postagem excluída!');

		
    }
}
