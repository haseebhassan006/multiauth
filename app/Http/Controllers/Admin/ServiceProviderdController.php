<?php

namespace App\Http\Controllers\Admin;

use App\ServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceProviderdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = ServiceProvider::latest('created_at')->paginate('6');

        return view('admin.Provider.index',compact('providers'));
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
        $provider = ServiceProvider::where('id',$id)->first();
        return view('admin.Provider.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider = ServiceProvider::where('id',$id)->first();
        return view('admin.Provider.edit',compact('provider'));
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
      
        $provider = ServiceProvider::where('id',$id)->first();
        
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'occupation' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'nic' => ['required'],
 
        ]);


        $provider->name = $request->name;
        $provider->email = $request->email;
        $provider->occupation = $request->occupation;
        $provider->address = $request->address;
        $provider->phone = $request->phone;
        $provider->nic = $request->nic;
        $provider->status = $request->status;
        $update = $provider->save();
     

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
        //
    }

    public function updateStatus(Request $request){

      $id = $request->id;
      $status = $request->status;
 

      $update = ServiceProvider::where('id',$id)->update(['status' => $status]);;

     
      if($update){

        return response()->json('1');
      }else{

        return response()->json('0');

      }




    }
}
