<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;

class CakeController extends Controller
{
    //public function __construct(){
     //   $this->middleware('auth');
    //}
    public function index(){

        //$cakes = Cake::all();
        //$cakes= Cake::orderBy('name', 'desc')->get();
        //$cakes = Cake::where('type', 'veg')->get();
        $cakes = Cake::latest()->get();



        return view('cakes.index', [
            'cakes' => $cakes,
            //'name' => request('name'),
            //'age' => request('age')
            ]);
    }
    public function show($id){
        $cake = Cake::findorFail($id);
        return view('cakes.show', ['cake' => $cake]);
    }
    public function create(){
        return view('cakes.create');
    }
    public function store(){
        $cake = new Cake();
        $cake->name = request('name');
        $cake->type = request('type');
        $cake->flavour = request('flavour');
        $cake->extras = request('extras');
        $cake->save();
        return redirect('/')->with('mssg', 'Thanks for your order');
    }
    public function destroy($id){
        $cake = Cake::findorFail($id);
        $cake->delete();
        return redirect('/cakes');
    }
}


