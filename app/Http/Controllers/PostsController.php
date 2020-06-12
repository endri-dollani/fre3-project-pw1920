<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        //Kjo ndalon vezhgimin e posteve pa u loguar me pare.
        // Brenda [] vendosen faqet qe do shfaqen dhe pse useri nuk eshte loguar ose regjistruar:
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Merr te gjithe te dhenat e tabeles posts nga databaza: 
        //$posts = Post::all();
        
        //Merr nje post me atribut te caktuar:
        //return $post = Post::where('title', 'Post Two')->get();
        
        //Terhiq nje numer te caktuar postesh nga databaza:
        //$posts = Post::orderby('title', 'desc')->take(1)->get();
        
        //Terheq te gjitha postet nga db duke i listuar ai i publiuar kohet e fundit
        //$posts = Post::orderby('title', 'desc')->get();
        
        /*
            Ne qoftese numri i posteve qe do shfaqen e kalon numrin e percaktuar
            do shfaqen linqe te cilat pasi klikohen do shfaqin aq poste sa thote limiti
        */
        $posts = Post::orderby('created_at', 'desc')->paginate(2);
        $recent = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('posts.index',compact('posts','recent'));
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
        if(auth()->user()->is_business == 0){
            $this->validate($request, [
                'title' => 'required|min:8',
                'body' => 'required|min:8',
                'cover_image' => 'image|nullable|max:1999'
            ]);
        }
        else {
            $this->validate($request, [
                'title' => 'required|min:8',
                'body' => 'required|min:8',
                'cover_image' => 'image|nullable|max:1999',
                'input' => 'required',
                // 'checkin' => 'required|size:10',
                // 'checkout' => 'required|size:10',
                'adults' => 'required|min:1|numeric',
                'children' => 'required|min:1|numeric',
                'rooms' => 'required|min:1|numeric',
                'price' => 'required|min:0|numeric',

            ]);
        }
        
        //Handle file upload: 
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;

        if(auth()->user()->is_business == 1){
            $date = explode(" - ", $request->input('input'));
            $post->checkin_date = $date[0];
            $post->checkout_date = $date[1];
            $post->rooms = $request->input('rooms');
            $post->adults = $request->input('adults');
            $post->kids = $request->input('children');
            $post->price = $request->input('price');
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        $recent = Post::orderBy('id', 'desc')->take(3)->get();
        return view('posts.show',compact('post','recent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::find($id);
        
        //Check for currect user: 
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
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
        if(auth()->user()->is_business == 0){
            $this->validate($request, [
                'title' => 'required|min:8',
                'body' => 'required|min:8',
                'cover_image' => 'image|nullable|max:1999'
            ]);
        }
        else {
            $this->validate($request, [
                'title' => 'required|min:8',
                'body' => 'required|min:8',
                'cover_image' => 'image|nullable|max:1999',
                'input' => 'required',

                // 'checkin' => 'required|size:10',
                // 'checkout' => 'required|size:10',
                'adults' => 'required|min:0|numeric',
                'children' => 'required|min:0|numeric',
                'rooms' => 'required|min:1|numeric',
                'price' => 'required|min:0|numeric',

            ]);
        }
         //Handle file upload: 
         if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }

        
        //Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        if(auth()->user()->is_business == 1){
            $date = explode(" - ", $request->input('input'));
            $post->checkin_date = $date[0];
            $post->checkout_date = $date[1];
            $post->rooms = $request->input('rooms');
            $post->adults = $request->input('adults');
            $post->kids = $request->input('children');
            $post->price = $request->input('price');
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
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

        //Check for currect user: 
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($post->cover_image !== 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }

   public function search(Request $request){

        $request->validate([
            'query'=> 'required|min:3',
        ]);
        $query = $request->input('query');

        $posts = Post::where('title', 'LIKE', '%'.$query.'%')
                        ->orWhere('cover_image', 'LIKE', '%'.$query.'%')
                        ->orWhere('body', 'LIKE', '%'.$query.'%')
                        ->orWhere('checkin_date', 'LIKE', '%'.$query.'%')
                        ->orWhere('checkout_date', 'LIKE', '%'.$query.'%')
                        ->orWhere('checkout_date', 'LIKE', '%'.$query.'%')
                        ->get();

        return view('/posts/search-results')->with('posts',$posts);
   }
}
