<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //-----------------breez--------------------
     public function Indexx(){
        $admin = Admin::find(1);
       

            return view("dash.dashboard_admin", compact('admin'));
     }
     //----------------------end------------------




    public function index()
    {
        $admin = Admin::find(1);
       

            return view("dash.dashboard_admin", compact('admin'));
    }

    public function index2()
    {
        $allAdmins = Admin::paginate();
       

            return view("dash.admin.all_admin", compact('allAdmins'));
    }


    public function createNewAdmin()
    {
        return view("dash.admin.add_admin");
    }

    public function storeNewAdmin(Request $request)
    {
        Admin::create([
            
            'name' => $request->name,
            'about' => $request->about,
            'image' => $request->image,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
            'statuse' =>$request->statuse,
            
        ]);
        return redirect()->route('admin.index2')->with('success', 'Category updated successfully');    
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required |max:30',
            
            'about' => 'required |max:300',
            'phone'=>'Required',
            // 'email' => 'required|email|unique:admins',
            

 'password' => [
    'nullable', // Allow updating password, but it's not required
    'min:8',
    'confirmed',
    'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
 ],


            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
       
        ]);
        $admin = Admin::find($id);
        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }else{   
        //     $input['image']= $admin->image;
        // }

        // if ($request->has('password')) {
        //     $input['password'] = bcrypt($request->input('password'));
        // }
         
        
        $admin->update($input);
        //dd($input);
        // return redirect("dashboard_admin.index")->with('success','Category updated successfully');
                       
        return redirect()->route('dashboard_admin.index')->with('success', 'Category updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('admin.index2')->with('success', 'Category updated successfully'); 
    }
}
