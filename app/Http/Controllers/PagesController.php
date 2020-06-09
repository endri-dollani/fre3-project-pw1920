<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function store(Request $request){
       dd($request->all());
    }
    
    public function about(){
        $title = 'About Us';

        return view('pages.about')->with('title',$title);
    }
   

    public function services(){
      
        return view('pages.services');
    }
    public function blog(){
        
        return view('pages.blog');  
    }
    public function singleblog(){
        
        return view('pages.single-blog');  
    }

    public function contact(){
        
        return view('pages.contact');  
    }
}
