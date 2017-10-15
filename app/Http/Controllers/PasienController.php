<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', ['pasien' => $pasien ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.index');
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

            'nama_pasien' => 'required',
            'alamat_pasien' => 'required',
            'gender_pasien' => 'required',
            'umur_pasien' => 'required',
            'telepon_pasien' => 'required',

        ]);
        
        $pasien = new Pasien;
        
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->alamat_pasien = $request->alamat_pasien;
        $pasien->gender_pasien = $request->gender_pasien;
        $pasien->umur_pasien = $request->umur_pasien;
        $pasien->telepon_pasien = $request->telepon_pasien;


        $pasien->save();
        return redirect('pasien');
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
    public function edit($id_pasien)
    {
        $pasien = Pasien::find($id_pasien);
        
        return view('pasien.edit')->with('pasien', $pasien);
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

            'nama_pasien' => 'required',
            'alamat_pasien' => 'required',
            'gender_pasien' => 'required',
            'umur_pasien' => 'required',
            'telepon_pasien' => 'required',

        ]);
        
        $pasien = Pasien::find($id);
        
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->alamat_pasien = $request->alamat_pasien;
        $pasien->gender_pasien = $request->gender_pasien;
        $pasien->umur_pasien = $request->umur_pasien;
        $pasien->telepon_pasien = $request->telepon_pasien;


        $pasien->save();
        return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('pasien');
    }
}
