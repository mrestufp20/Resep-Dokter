<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index', ['pendaftaran' => $pendaftaran ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran.index');
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

            'tgl_pendaftaran' => 'required',
            'dokter_id' => 'required',
            'pasien_id' => 'required',
            'poliklinik_id' => 'required',
            'biaya' => 'required',
            'keterangan' => 'required',

        ]);
        
        $pendaftaran = new Pendaftaran;
        
        $pendaftaran->tgl_pendaftaran = $request->tgl_pendaftaran;
        $pendaftaran->dokter_id = $request->dokter_id;
        $pendaftaran->pasien_id = $request->pasien_id;
        $pendaftaran->poliklinik_id = $request->poliklinik_id;
        $pendaftaran->biaya = $request->biaya;
        $pendaftaran->keterangan = $request->keterangan;

        $pendaftaran->save();
        return redirect('pendaftaran');
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
    public function edit($id_pendaftaran)
    {
        $pendftaran = Pendaftaran::find($id_pendaftaran);
        
        return view('pendaftaran.edit')->with('pendaftaran', $pendftaran);
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

            'pasien_id' => 'required',
            'tgl_bayar' => 'required',
            'jumlah_bayar' => 'required',
        ]);
        
        $pendaftaran = Pendaftaran::find($id);
        
        $pendaftaran->tgl_pendaftaran = $request->tgl_pendaftaran;
        $pendaftaran->dokter_id = $request->dokter_id;
        $pendaftaran->pasien_id = $request->pasien_id;
        $pendaftaran->poliklinik_id = $request->poliklinik_id;
        $pendaftaran->biaya = $request->biaya;
        $pendaftaran->keterangan = $request->keterangan;

        $pendaftaran->save();
        return redirect('pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect('pendaftaran');
    }
}
