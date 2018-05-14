<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Processing;
use App\Complete;
use App\EmulsionInterior;
use App\EmulsionExterior;
use App\TexcoteInterior;
use App\TexcoteExterior;
use App\Gloss;
use App\Http\Requests;

class Admin extends Controller
{
    public function __construct()
    {
        $this->middleware('adminauth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
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
        $processing = Processing::create($request->all());
        $order = Order::where('hash', $request->hash)->delete();
        return back();
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
        $completed = Complete::create($request->all());
        $processing = Processing::where('hash', $request->hash)->delete();
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

    public function createproduct(Request $request){
        global $input,$request,$name;
        $input = $request->all();
        if($file = $request->file('path')){
            $name = $file->getClientOriginalName();
            $file->move('assets/images/products', $name);
            $input['path'] = $name;
            $request->path = $name;
            if($request->description == 'Emulsion-exterior'){
                $item = EmulsionExterior::create($request->all())->update(['path'=>$request->path]);
                session()->flash('createmsg', 'Item was successfully created');  
                return back();
            }elseif($request->description == 'Emulsion-interior'){
                $item = EmulsionInterior::create($request->all())->update(['path'=>$request->path]);
                session()->flash('createmsg', 'Item was successfully created');  
                return back();
            }elseif($request->description == 'Texcote-exterior'){
                $item = TexcoteExterior::create($request->all())->update(['path'=>$request->path]);
                session()->flash('createmsg', 'Item was successfully created');  
                return back();
            }elseif($request->description == 'Texcote-interior'){
                $item = TexcoteInterior::create($request->all())->update(['path'=>$request->path]);
                session()->flash('createmsg', 'Item was successfully created');  
                return back();
            }elseif($request->description == 'Gloss'){
                $item = Gloss::create($request->all())->update(['path'=>$request->path]);
                session()->flash('createmsg', 'Item was successfully created');  
                return back();
            }
        }else{
            session()->flash('errormsg', 'Item was not successfully created');  
            return back();
        }
    }

    public function editproduct(Request $request){
        if($request->description == 'Emulsion-exterior'){
            $item = EmulsionExterior::find($request->id)->update($request->all());
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Emulsion-interior'){
            //find($request->id)-> return $request->all();/
            $item = EmulsionInterior::find($request->id)->update($request->all());
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Texcote-exterior'){
            $item = TexcoteExterior::find($request->id)->update($request->all());
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Texcote-interior'){
            $item = TexcoteInterior::find($request->id)->update($request->all());
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Gloss'){
            $item = Gloss::find($request->id)->update($request->all());
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }
    }

    public function deleteproduct(Request $request){
        if($request->description == 'Emulsion-exterior'){
            $item = EmulsionExterior::find($request->id)->delete();
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Emulsion-interior'){
            //find($request->id)-> return $request->all();/
            $item = EmulsionInterior::find($request->id)->delete();
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Texcote-exterior'){
            $item = TexcoteExterior::find($request->id)->delete();
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Texcote-interior'){
            $item = TexcoteInterior::find($request->id)->delete();
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        }elseif($request->description == 'Gloss'){
            $item = Gloss::find($request->id)->delete();
            session()->flash('createmsg', 'Item was successfully created');  
            return back();
        } 
    }

    public function sendmail(Request $request){
        	// Sending the form to a mail
    $to      = $request->to;
    $subject = $request->subject;
    $message_body = $request->body;

        if(mail( $to, $subject, $message_body )){
            return "
            <script>
                alert('mail successfully sent');
                history.back();
            </script>
            ";
        }else{
            return "
            <script>
                alert('mail not sent');
                history.back();
            </script>
            ";
        }
    }
}
