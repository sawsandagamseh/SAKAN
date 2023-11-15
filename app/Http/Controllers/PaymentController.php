<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Subscription;
use App\Models\Subscription_booking;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       dd('sawsan');
        return view("profileAgent.agent_payment");

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
        
        dd('sawsan@');
    }



    public function purchaseSubscribe(Request $request)
{
    // Store the request data in the session
    session(['mySubscriptionData' => $request->all()]);

    return view("profileAgent.agent_payment");
}




public function checkOut(Request $request)
{
    // Retrieve the session data
    $mySubscriptionData = session('mySubscriptionData');

    if ($mySubscriptionData && isset($mySubscriptionData['subscription_id']) && isset($mySubscriptionData['property_number']) && isset($mySubscriptionData['user_id'])) {
        $sub_id = $mySubscriptionData['subscription_id'];
        
        $property_number = $mySubscriptionData['property_number'];
        $user_id= $mySubscriptionData['user_id'];
        // dd($user_id);

        $numerOfDay = Subscription::where('id', $sub_id)->value('number_of_days');

        $end_day = date('Y-m-d H:i:s', strtotime('+' . $numerOfDay . ' days'));
        $now = now();
        $post_number = 0;
        $price = 0;

        if ($property_number == 'property_1') {
            $post_number = 1;
            $price = Subscription::where('id', $sub_id)->value('property_1');
        } elseif ($property_number == 'property_5') {
            $post_number = 5;
            $price = Subscription::where('id', $sub_id)->value('property_5');
        } elseif ($property_number == 'property_10') {
            $post_number = 10;
            $price = Subscription::where('id', $sub_id)->value('property_10');
        } elseif ($property_number == 'property_20') {
            $post_number = 20;
            $price = Subscription::where('id', $sub_id)->value('property_20');
        } elseif ($property_number == 'property_50') {
            $post_number = 50;
            $price = Subscription::where('id', $sub_id)->value('property_50');
        }

        
        Subscription_booking::create([
            'price' => $price,
          
            'number_days' => $numerOfDay,
            'numberOfPosts' => $post_number,
            'start_day' => $now,
            'end_day' => $end_day,
            'user_id' => $user_id,
            'sub_id' => $sub_id,
            

            
            
            
        ]);

        return view("profileAgent.agent_payment");
    } else {
        // Handle the case where session data is missing or incomplete
        return redirect()->back()->with('error', 'Session data is missing or incomplete');
    }
}


    // public function checkOut(Request $request)
    // {    
    //     $mySubscriptionData = session('mySubscriptionData');
    //     // dd($request);
    //     $post_number=0;
    //     $price=0;
        
    //     $sub_id=$mySubscriptionData->subscription_id;
    //     dd($sub_id);

    //     $numerOfDay=Subscription::where('id', $sub_id)->value('number_of_days');

    //     $property_number=$mySubscriptionData->property_number;

    //     $end_day = date('Y-m-d H:i:s', strtotime('+' . $numerOfDay . ' days'));

        

    //     if( $property_number=='property_1')
    //     {$post_number=1;
    //         $price=Subscription::where('id', $sub_id)->value('property_1');
    //     }elseif($property_number=='property_5')
    //     {$post_number=5;
    //      $price=Subscription::where('id', $sub_id)->value('property_5');
    //     }elseif($property_number=='property_10')
    //     {$post_number=10;
    //     $price=Subscription::where('id', $sub_id)->value('property_10');
    //     }elseif($property_number=='property_20')
    //     {$post_number=20;
    //     $price=Subscription::where('id', $sub_id)->value('property_20');
    //     }elseif($property_number=='property_50')
    //     {$post_number=50;
    //      $price=Subscription::where('id', $sub_id)->value('property_50');
    //     }
         
       
        
        
       

    //     return view("profileAgent.agent_payment");

    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
