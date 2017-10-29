<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

Use App\Post;

Use Carbon\Carbon;

class PostController extends Controller 
{

    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    
    
    public function index()
    {

    if (request(['month', 'year'])) {
            $posts = Post::latest()
             ->filter(request(['month', 'year']))
              ->get();
    } else {
         $posts = Post::latest()->get();
    }
    
   
        
            return view('posts.index', compact('posts'));
    }


    public function show(Post $post){

      
        return view('posts.show', compact('post'));
            }

    public function create(){
                
                 return view('posts.create');
           }
           

    public function store(){
        // create a post using the form data
        $this->validate(request(), [
            'title'=> 'required|max:20',
            'body' => 'required',
            'category' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request([ 'title', 'body', 'category']))
        );
      

        session()->flash('message', 'Je post staat nu online!');
       
        // redirect to home page
        return redirect('/');
            
            
           }       
} 
