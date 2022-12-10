<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewAct;
use App\Models\ActPhoto;
use Illuminate\Support\Facades\Storage;

class NewActController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newacts = NewAct::orderBy('created_at', 'desc')->get();
        return view('aktivitas', ['newacts' => $newacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newact = new NewAct();
        $newact->act_name = $request->act_name;
        $newact->act_date = $request->act_date;
        $newact->category = $request->category;
        $newact->description = $request->description;
        $newact->save();
        return redirect('/aktivitas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newact = NewAct::findOrFail($id);
        $actphotos = ActPhoto::all()->where('act_id', $id);
        return view('newacts.show', ['newact' => $newact, 'actphotos' => $actphotos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newact = NewAct::findOrFail($id);
        return view('newacts.edit', ['newact' => $newact]);
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
        $newact = NewAct::findOrFail($id);
        $newact->act_name = $request->act_name;
        $newact->act_date = $request->act_date;
        $newact->category = $request->category;
        $newact->description = $request->description;
        $newact->save();
        return redirect('/aktivitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newact = NewAct::find($id);
        $newact->delete();
        return redirect('/aktivitas');
    }
}
