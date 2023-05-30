<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beverages = Beverage::all();
        return view('welcome',compact('beverages'));
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Beverage $beverage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beverage $beverage)
    {
       return view('edit_beverage', compact('beverage'));


    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beverage $beverage)
    {
        $beverage->update([
          'name'=>$request ->Bname,
          'price'=>$request ->bprice,
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beverage $beverage)
    {
        $beverage->delete();
        return redirect()->back();
    }
}
