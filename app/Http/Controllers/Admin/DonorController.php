<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest('created_at')->paginate('6');

        return view('admin.Donors.index',compact('users'));
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
        $user = User::where('id',$id)->first();
        return view('admin.Donors.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.Donors.edit',compact('user'));
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
      
        $user = User::where('id',$id)->first();
        
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'occupation' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'nic' => ['required'],
 
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->occupation = $request->occupation;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->nic = $request->nic;
        $user->status = $request->status;
        $update = $user->save();
     

        if($update){
            

            return redirect()->back()->with('message','Data Updated Successfully');

        }else{
            return redirect()->back()->with('message','Failed To Update Data');

        }



        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::where('id',$id)->delete();
        if($delete){

          return response()->json('200');

        }else{

            return response()->json('203');

        }
    }

    public function updateStatus(Request $request){

      $id = $request->id;
      $status = $request->status;
 

      $update = User::where('id',$id)->update(['status' => $status]);;

     
      if($update){

        return response()->json('1');
      }else{

        return response()->json('0');

      }




    }
}
