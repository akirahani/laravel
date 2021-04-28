<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use App\Models\drink;
use App\Models\cake;
use App\Models\dessert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    { 
        $recordc = cake::all();
        $recordd = dessert::all();
        $recordr = drink::all();
        $records = food::all();
        return view('home',compact('records','recordr','recordd','recordc'));
    }
    public function insert(Request $request){
        $insert =new food;
        $this.validate($request,[
            'name'=>'required',
            'place'=>'required',
        ]);
        $insert->name = $request->input('name');
        $insert->place = $request->input('place');
        if($request->hasfile('image')){
            $filename= $request->file('image');
            $insert->image = time().'.'.$filename->getClientOriginalExtension();
            $path = $filename->move(public_path('upload'),  $insert->image);
        }
        $insert->save();
        return redirect()->view('home');
    }
    public function insert_drink(Request $request){
        $insert =new drink;
        $this.validate($request,[
            'name'=>'required',
            'place'=>'required',
        ]);
        $insert->name = $request->input('name');
        $insert->place = $request->input('place');
        if($request->hasfile('image')){
            $filename= $request->file('image');
            $insert->image = time().'.'.$filename->getClientOriginalExtension();
            $path = $filename->move(public_path('upload/drink'),  $insert->image);
        }
        $insert->save();
        return redirect()->view('home');
    }
    public function insert_cake(Request $request){
        $insert =new cake;
        $this.validate($request,[
            'name'=>'required',
            'place'=>'required',
        ]);
        $insert->name = $request->input('name');
        $insert->place = $request->input('place');
        if($request->hasfile('image')){
            $filename= $request->file('image');
            $insert->image = time().'.'.$filename->getClientOriginalExtension();
            $path = $filename->move(public_path('upload/drink'),  $insert->image);
        }
        $insert->save();
        return redirect()->view('home');
    }
    public function insert_dessert(Request $request){
        $insert =new dessert;
        $this.validate($request,[
            'name'=>'required',
            'place'=>'required',
        ]);
        $insert->name = $request->input('name');
        $insert->place = $request->input('place');
        if($request->hasfile('image')){
            $filename= $request->file('image');
            $insert->image = time().'.'.$filename->getClientOriginalExtension();
            $path = $filename->move(public_path('upload/drink'),  $insert->image);
        }
        $insert->save();
        return redirect()->view('home');
    }

}
