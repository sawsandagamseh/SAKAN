<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AgentProfileController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //-----------------breez--------------------
     public function Indexx(){
        $admin = User::find(1);
       

            return view("dash.dashboard_admin", compact('admin'));
     }
     //----------------------end------------------




    public function index($id)
    {  
        $agent = User::find($id);
       

            return view("profileAgent.agentProfile_main", compact('agent'));
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
     * @param  \App\Models\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//         $request->validate([
//             'name' => 'required |max:30',
            
//             'about' => 'required |max:300',
//             'phone'=>'Required',
//             // 'email' => 'required|email|unique:admins',
            

//  'password' => [
//     'nullable', // Allow updating password, but it's not required
//     'min:8',
//     'confirmed',
//     'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
//  ],


//             // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
       
//         ]);

      
        $agent = User::find($id);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{   
            $input['image']= $agent->image;
        }

        if ($request->has('password')) {
            $input['password'] = bcrypt($request->input('password'));
        }
         
       
        $agent->update($input);
        //dd($input);
        // return redirect("dashboard_admin.index")->with('success','Category updated successfully');
                       
        return redirect()->route('agent_profile.index', ['id' => $id])->with('success', 'Category updated successfully');
    }
}


// public function index2()
    // {
    //     $allAdmin = User::all();
       

    //         return view("dash.admin.all_admin", compact('allAdmin'));
    // }


    // public function createNewAdmin()
    // {
    //     return view("dash.admin.add_admin");
    // }

    // public function storeNewAdmin(Request $request)
    // {
    //     User::create([
            
    //         'name' => $request->name,
    //         'about' => $request->about,
    //         'image' => $request->image,
    //         'phone' => $request->phone,
    //         'email' => $request->email,
    //         'password' => $request->password,
    //         'statuse' =>$request->statuse,
            
    //     ]);
    //     return redirect()->route('admin.index2')->with('success', 'Category updated successfully');    
    // }
