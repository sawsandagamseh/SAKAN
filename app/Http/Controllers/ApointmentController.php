<?php

namespace App\Http\Controllers;


use App\Models\Apointment;
use Illuminate\Http\Request;

class ApointmentController extends Controller
{
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

    // $request->validate([
    //     'full_name' => 'required|string|max:255',
    //     'phone' => 'required|string|max:255',
    //     'email' => 'nullable|email',
    //     'message' => 'nullable|string',
    //     'user_id' => 'nullable|integer',
    //     'property_id' => 'nullable|integer',
    //     'date' => 'required|date',
    //     'time' => 'required',
    // ]);

    
    // Apointment::create([
    //     'full_name' => $request->full_name,
    //     'phone' => $request->phone,
    //     'email' => $request->email,
    //     'message' => $request->message,
    //     'user_id' => $request->user_id,
    //     'property_id' => $request->property_id,
    //     'date' => '2023-10-15', // Example date in 'Y-m-d' format
    //     'houre' => '10:30:00', // Assuming 'houre' is the correct column name
    // ]);
    // return redirect()->route('singleHouse', ['id' => $request->property_id])->with('success', 'Appointment created successfully');



    if (isset($request->user_id)) {
        // 'user_id' is set, you can proceed
        Apointment::create([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'user_id' => $request->user_id,
            'property_id' => $request->property_id,
            'date' => '2023-10-15', // Example date in 'Y-m-d' format
            'houre' => '10:30:00', // Assuming 'houre' is the correct column name
        ]);

        return redirect()->route('singleHouse', ['id' => $request->property_id])->with('success', 'Appointment created successfully');
    } else {
        // 'user_id' is not set, you can handle this situation as needed
        return redirect()->route('login')->with('message', 'You must be logged in to make an appointment');
        // return redirect()->route('singleHouse', ['id' => $request->property_id])->with('fail', 'yor are must login ');

    }
}




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function show(Apointment $apointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apointment $apointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apointment $apointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apointment $apointment)
    {
        //
    }
}
