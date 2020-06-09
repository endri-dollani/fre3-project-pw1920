<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\User;
class BusinessController extends Controller
{

    public function __construct()
    {   
        //Kjo ndalon vezhgimin e posteve pa u loguar me pare.
        // Brenda [] vendosen faqet qe do shfaqen dhe pse useri nuk eshte loguar ose regjistruar:
        $this->middleware('auth', ['except' => ['index', 'show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        if(auth()->user()->id != $id){
            return redirect('/dashboard');
        }

        if($user->is_business == 0){
            return redirect('/dashboard');
        }
        return view('business.edit')->with('user', $user);
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
            'name' => 'required|max:20',
            'address' => 'required|max:20',
            'city' => 'required|max:20',
            'number' => 'required|max:15|min:8',
        ]);

        $user = User::find($id);
        $user->business_name = $request->input('name');
        $user->business_address = $request->input('address');
        $user->business_city = $request->input('city');
        $user->business_number = $request->input('number');
        
       
        $user->save();

        return redirect('/dashboard')->with('success', 'Your business account was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
