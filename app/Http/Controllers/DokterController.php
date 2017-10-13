<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', ['dokter' => $dokter ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create');
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
        
        'nama_dokter' => 'required',
        'spesialis' => 'required',
        'alamat_dokter' => 'required',
        'telepon_dokter' => 'required',
        'poliklinik_id' => 'required',
        'tarif' => 'required',

    ]);
        
        $dokter = new Dokter;
        
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->spesialis = $request->spesialis;
        $dokter->alamat_dokter = $request->alamat_dokter;
        $dokter->telepon_dokter = $request->telepon_dokter;
        $dokter->poliklinik_id = $request->poliklinik_id;
        $dokter->tarif = $request->tarif;


        $dokter->save();
        return redirect('dokter');
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
    public function edit($id_dokter)
    {
         $dokter = Dokter::find($id_dokter);
        
            
        if(!$dokter){
            abort(503);
        }
        
        
        return view('dokter.edit')->with('dokter', $dokter);
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
        
        'nama_dokter' => 'required',
        'spesialis' => 'required',
        'alamat_dokter' => 'required',
        'telepon_dokter' => 'required',
        'poliklinik_id' => 'required',
        'tarif' => 'required',

    ]);
        
        $dokter = Dokter::find($id);
        
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->spesialis = $request->spesialis;
        $dokter->alamat_dokter = $request->alamat_dokter;
        $dokter->telepon_dokter = $request->telepon_dokter;
        $dokter->poliklinik_id = $request->poliklinik_id;
        $dokter->tarif = $request->tarif;


        $dokter->save();
        return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect('dokter');
    }
}
