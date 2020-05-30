<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }
    
    public function about(){
        $title = 'About Us';

        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => [
                'Web Design',
                'Programming',
                'Php'
            ]
        );
        return view('pages.services')->with($data);
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
