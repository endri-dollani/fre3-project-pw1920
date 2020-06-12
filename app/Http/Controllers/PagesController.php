<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }


    public function find(Request $request){
        $request->validate([
            'input'=> 'required',
            'adults'=> 'required|numeric',
            'rooms'=> 'required|numeric',
            'kids'=> 'required|numeric'
        ]);
       
        $adults = $request->input('adults');
        $rooms = $request->input('rooms');
        $kids = $request->input('kids');

        $date = explode(" - ", $request->input('input'));



        $posts = Post::where('checkin_date', 'LIKE', '%'.$date[0].'%')
                        ->orWhere('checkout_date', 'LIKE', '%'.$date[1].'%')
                        ->orWhere('rooms', 'LIKE', '%'.$rooms.'%')
                        ->orWhere('adults', 'LIKE', '%'.$adults.'%')
                        ->orWhere('kids', 'LIKE', '%'.$kids.'%')
                        ->get();

        return view('pages.find')->with('posts',$posts);
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
