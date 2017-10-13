<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', ['obat' => $obat ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
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
        
        'nama_obat' => 'required',
        'jenis_obat' => 'required',
        'kategori' => 'required',
        'harga_obat' => 'required',
        'jumlah_obat' => 'required',

    ]);
        
        $obat = new Obat;
        
        $obat->nama_obat = $request->nama_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->kategori = $request->kategori;
        $obat->harga_obat = $request->harga_obat;
        $obat->jumlah_obat = $request->jumlah_obat;


        $obat->save();
        return redirect('obat');
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
    public function edit($id_obat)
    {
         $obat = Obat::find($id_obat);
        
            
        if(!$obat){
            abort(503);
        }
        
        
        return view('obat.edit')->with('obat', $obat);
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
        
        'nama_obat' => 'required',
        'jenis_obat' => 'required',
        'kategori' => 'required',
        'harga_obat' => 'required',
        'jumlah_obat' => 'required',

    ]);
        
        $obat = Obat::find($id);
        
        $obat->nama_obat = $request->nama_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->kategori = $request->kategori;
        $obat->harga_obat = $request->harga_obat;
        $obat->jumlah_obat = $request->jumlah_obat;


        $obat->save();
        return redirect('obat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::find($id);
        $obat->delete();
        return redirect('dokter');
    }
}
