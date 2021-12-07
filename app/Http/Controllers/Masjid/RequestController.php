<?php

namespace App\Http\Controllers\Masjid;

use App\MasjidRequest;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $requests = MasjidRequest::with(['applicant','category'])->where('masjid_id',Auth::user()->id)->get();
   
        return view('admin.masjid.requests.index',['requests'=>$requests]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('masjid.pages.requests.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $validated = $request->validate([
            'title' => 'required|unique:masjid_requests|max:255',
         
            'masjid_address' => 'required',
            'description' => 'required',
             'type' => 'required',
             
        ]);
        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');
            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/request/images/"), $name);


        }


        $masjidrequest = new MasjidRequest;
        $masjidrequest->title = $request->title;
        $masjidrequest->masjid_name = $request->masjid_name;
        $masjidrequest->masjid_address = $request->masjid_address;
        $masjidrequest->applicant = Auth::user()->id;
        $masjidrequest->status = 'Pending';
        $masjidrequest->description = $request->description;
        $masjidrequest->category_id = $request->category;
        $masjidrequest->request_type = $request->type;
        $masjidrequest->image = $name;

        $added = $masjidrequest->save();




     if($added){
        return response()->json('Request Created Successfully');


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

         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request = MasjidRequest::with(['applicant','category'])->where('id',$id)->first();

        $categories = Category::all();
        return view('masjid.pages.requests.create',['categories'=>$categories,'request'=>$request]);
   
        
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
        dd($request->all());
           $validated = $request->validate([
            'title' => 'required|unique:masjid_requests|max:255',
         
            'masjid_address' => 'required',
            'description' => 'required',
             'type' => 'required',
             
        ]);
        $name = "";
         $masjidrequest = MasjidRequest::find($id);
        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');
            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/request/images/"), $name);
            $masjidrequest->image = $name;


        }else{
            $masjidrequest->image = $request->oldimage;

        }


       
        $masjidrequest->title = $request->title;
        $masjidrequest->masjid_name = $request->masjid_name;
        $masjidrequest->masjid_address = $request->masjid_address;
        $masjidrequest->applicant = Auth::user()->id;
        $masjidrequest->status = 'Pending';
        $masjidrequest->description = $request->description;
        $masjidrequest->category_id = $request->category;
        $masjidrequest->request_type = $request->type;
      

        $updated = $masjidrequest->save();




     if($updated){
        return response()->json('Request Updated Successfully');


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
        $masjidrequest = MasjidRequest::find($id);
        if($masjidrequest->delete()){
            return response()->json('Request Deleted Successfully');
        }
        
    }
}
