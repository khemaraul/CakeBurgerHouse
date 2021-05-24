<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\burger;

class BurgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $burgers = burger::latest()->get();
        return view('burgers.index', [
            'burgers' => $burgers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('burgers.create');
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
        $burger = new burger();
        $burger->cust_name = request('cust_name');
        $burger->type = request('type');
        $burger->name = request('name');
        $burger->extras = request('extras');
        $burger->save();
        return redirect('/')->with('mssg', 'Thanks for your order');
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
        $burger = burger::findorFail($id);
        return view('burgers.show', ['burger' => $burger]);
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
        //
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
        $burger = burger::findorFail($id);
        $burger->delete();
        return redirect('/burgers');
    }
}
