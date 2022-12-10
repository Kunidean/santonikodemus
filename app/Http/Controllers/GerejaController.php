<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gereja;
class GerejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerejas = Gereja::all();
        return view('gereja.kolekta', ['gerejas' => $gerejas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gerejas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gereja = new Gereja();
        $gereja->tanggal = $request->tanggal;
        $gereja->kolekte1 = $request->kolekte1;
        $gereja->kolekte2 = $request->kolekte2;
        $gereja->save();
        return redirect('/kolekta');
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
        $gerejas = Gereja::findOrFail($id);
        return view('gereja.edit', ['gerejas' => $gerejas]);
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
        $gereja = Gereja::findOrFail($id);
        $gereja->tanggal = $request->tanggal;
        $gereja->kolekte1 = $request->kolekte1;
        $gereja->kolekte2 = $request->kolekte2;
        $gereja->save();
        return redirect('/kolekta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gereja = Gereja::find($id);
        $gereja->delete();
        return redirect('/kolekta');
    }
}
