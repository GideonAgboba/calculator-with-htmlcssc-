<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.profile');
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
        return 'am the show controller';
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
        global $input,$request,$name;
        $input = $request->all();
        if($file = $request->file('path')){
            $name = 'image'.rand(282746508, 9) .$file->getClientOriginalName();
            $file->move('uploads', $name);
            $request->path = $name;
        }else{
            return back();
         }
         $user = User::find($id);
         if($user->role_id == 1){
             $user->update([
 
                 'firstname'=>$request->firstname, 
                 'lastname'=>$request->lastname, 
                 'address'=>$request->address, 
                 'country'=>$request->country,
                 'state'=>$request->state,
                 'city'=>$request->city,
                 'zip'=>$request->zip,
                 'bio'=>$request->bio,
                 'path'=>$request->path,
                 'hash'=> rand(929310058, 9),
                 'is_active'=> 1,
                 'role_id'=> 1,
                 'email'=>$request->email,
                 'phone'=>$request->phone,
                 'gender'=>$request->gender,
                 'phone'=>$request->phone
              
             ]);
         }else{
             $user->update([
 
                 'firstname'=>$request->firstname, 
                 'lastname'=>$request->lastname, 
                 'address'=>$request->address, 
                 'country'=>$request->country,
                 'state'=>$request->state,
                 'city'=>$request->city,
                 'zip'=>$request->zip,
                 'bio'=>$request->bio,
                 'path'=>$request->path,
                 'hash'=> rand(929310058, 9),
                 'is_active'=> 1,
                 'role_id'=> 2,
                 'email'=>$request->email,
                 'phone'=>$request->phone,
                 'gender'=>$request->gender,
                 'phone'=>$request->phone
              
             ]);
         }
         
         return back();
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

    public function editprofile(Request $request, $id){
        
        $user = User::find($id);
        if($user->role_id == 1){
            $user->update([

                'firstname'=>$request->firstname, 
                'lastname'=>$request->lastname, 
                'address'=>$request->address, 
                'country'=>$request->country,
                'state'=>$request->state,
                'city'=>$request->city,
                'zip'=>$request->zip,
                'bio'=>$request->bio,
                'path'=>$request->path,
                'hash'=> rand(929310058, 9),
                'is_active'=> 1,
                'role_id'=> 1,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'gender'=>$request->gender,
                'phone'=>$request->phone
             
            ]);
        }else{
            $user->update([

                'firstname'=>$request->firstname, 
                'lastname'=>$request->lastname, 
                'address'=>$request->address, 
                'country'=>$request->country,
                'state'=>$request->state,
                'city'=>$request->city,
                'zip'=>$request->zip,
                'bio'=>$request->bio,
                'path'=>$request->path,
                'hash'=> rand(929310058, 9),
                'is_active'=> 1,
                'role_id'=> 2,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'gender'=>$request->gender,
                'phone'=>$request->phone
             
            ]);
        }
        
        
        
        $request->session()->flash('updatemsg', 'Profile successfully updated');       
        return back();
    }

    public function editdp(Request $request, $id){

        global $input,$request,$name;
        $input = $request->all();
        if($file = $request->file('path')){
            $name = 'image'.rand(282746508, 9) .$file->getClientOriginalName();
            $file->move('uploads', $name);
            $request->path = $name;
        }else{
            return '404';
        }
        // if(Auth::user()->name == ''){
        //     return back();
        // }
        $user = User::find($id)->update(['path'=>$request->path]);      
        return back();
    }



    public function sentmsg(Request $request){
        $msg = Message::create($request->all());
        $request->session()->flash('updatemsg', 'Your message was sent successfully');    
        return back();
    }



    // public function command1_click(){

    // }
}
