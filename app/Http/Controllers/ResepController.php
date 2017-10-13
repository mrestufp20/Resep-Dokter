<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resep;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep = Resep::all();
        return view('resep.index', ['resep' => $resep ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.create');
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
        
        'tgl_resep' => 'required',
        'dokter_id' => 'required',
        'pasien_id' => 'required',
        'poliklinik_id' => 'required',
        'total_harga' => 'required',
        'bayar_kembali' => 'required',

    ]);
        
        $resep = new Resep;
        
        $resep->tgl_resep = $request->tgl_resep;
        $resep->dokter_id = $request->dokter_id;
        $resep->pasien_id = $request->pasien_id;
        $resep->poliklinik_id = $request->poliklinik_id;
        $resep->total_harga = $request->total_harga;
        $resep->bayar_kembali = $request->bayar_kembali;


        $resep->save();
        return redirect('resep');
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
   public function edit($id_resep)
    {
         $resep = Resep::find($id_resep);
        
            
        if(!$resep){
            abort(503);
        }
        
        
        return view('resep.edit')->with('resep', $resep);
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
        
        'tgl_resep' => 'required',
        'dokter_id' => 'required',
        'pasien_id' => 'required',
        'poliklinik_id' => 'required',
        'total_harga' => 'required',
        'bayar_kembali' => 'required',

    ]);
        
        $resep = Resep::find($id);
        
        $resep->tgl_resep = $request->tgl_resep;
        $resep->dokter_id = $request->dokter_id;
        $resep->pasien_id = $request->pasien_id;
        $resep->poliklinik_id = $request->poliklinik_id;
        $resep->total_harga = $request->total_harga;
        $resep->bayar_kembali = $request->bayar_kembali;


        $resep->save();
        return redirect('resep');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resep = Resep::find($id);
        $resep->delete();
        return redirect('resep');
    }
}
