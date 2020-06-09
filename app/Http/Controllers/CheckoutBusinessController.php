<?php

namespace App\Http\Controllers;
use Cartalyst\Stripe\Laravel\StripeServiceProvider;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

use Illuminate\Http\Request;
use App\User;
class CheckoutBusinessController extends Controller
{
    public function __construct()
    {   
        //Kjo ndalon vezhgimin e posteve pa u loguar me pare.
        // Brenda [] vendosen faqet qe do shfaqen dhe pse useri nuk eshte loguar ose regjistruar:
        $this->middleware('auth');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        if($user->is_business == 0){
               return view('pages.checkout-business');
        }
       else {
              return redirect('/dashboard');
       }
     
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
        
        try {
            //code...
            
            
            $charge = Stripe::charges()->create([
                'amount' => 199.99,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' =>  'Business subscription payed',
                'receipt_email' => $request->email,
                'metadata' => [
                    'data1' => 'metadata 1',
                    'data2' => 'metadata 3',
                    'data3' => 'metadata 3',
    
                ],
    
            ]);
            //Succes
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            $user->is_business = 1;

            $user->business_name = $request->input('business-name');
            $user->business_address = $request->input('address');
            $user->business_city = $request->input('city');
            $user->business_number = $request->input('phone-number');

            $user->save();
            return redirect('/checkout-business')->with('success','Thank you , your payment has been accepted.' );
        } catch (CardErrorException $e) {
            //throw $e
           return redirect('/checkout-business')->with('error', $e->getMessage());
     
        }
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
        //
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
        //
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


    public function reservate(){
        return view('posts.reservate');
}

public function reservated(Request $request){
    try {
        //code...
        
        
     
        //Succes
          $user_id = auth()->user()->id;
        $user = User::find($user_id);
        if($user->is_business == 1){
            return redirect('/posts')->with('error','A business cant make a reservation.' );
        }
            $charge = Stripe::charges()->create([
                'amount' => 199.99,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' =>  'Reservation payed',
                'receipt_email' => $request->email,
                'metadata' => [
                    'Name' => $request->input('name'),
                    'Email' => $request->input('email')
    
                ],
    
            ]);

        // $user->business_name = $request->input('business-name');
        // $user->business_address = $request->input('address');
        // $user->business_city = $request->input('city');
        // $user->business_number = $request->input('phone-number');

        // $user->save();
        return redirect('/posts')->with('success','Thank you , your reservation payment has been accepted '.$user->name.'.' );
    } catch (CardErrorException $e) {
        //throw $e
       return redirect('/posts')->with('error', $e->getMessage());
 
    }
}
}
