<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poliklinik;

class PoliklinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poliklinik = Poliklinik::all();
        return view('poliklinik.index', ['poliklinik' => $poliklinik ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poliklinik.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'nama_poliklinik' => 'required',

        ]);
        
        $poliklinik = new Poliklinik;
        
        $poliklinik->nama_poliklinik = $request->nama_poliklinik;

        $poliklinik->save();
        return redirect('poliklinik');
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
    public function edit($id_poliklinik)
    {
        $poliklinik = Poliklinik::find($id_poliklinik);
        
        return view('poliklinik.edit')->with('poliklinik', $poliklinik);
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
        $this->validate($request, [

            'nama_poliklinik' => 'required',

        ]);
        
        $poliklinik = Poliklinik::find($id);
        
        $poliklinik->nama_poliklinik = $request->nama_poliklinik;

        $poliklinik->save();
        return redirect('poliklinik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poliklinik = Poliklinik::find($id);
        $poliklinik->delete();
        return redirect('poliklinik');
    }
}
