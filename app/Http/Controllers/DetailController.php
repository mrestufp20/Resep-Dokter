<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detail::all();
        return view('detail.index', ['detail' => $detail ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detail.create');
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
        
        'resep_id' => 'required',
        'obat_id' => 'required',
        'harga' => 'required',
        'dosis' => 'required',
        'sub_total' => 'required',

    ]);
        
        $detail = new Detail;
        
        $detail->resep_id = $request->resep_id;
        $detail->obat_id = $request->obat_id;
        $detail->harga = $request->harga;
        $detail->dosis = $request->dosis;
        $detail->sub_total = $request->sub_total;


        $detail->save();
        return redirect('detail');
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
    public function edit($id_detail)
    {
         $detail = Detail::find($id_detail);
        
            
        if(!$detail){
            abort(503);
        }
        
        
        return view('detail.edit')->with('detail', $detail);
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
        
        'resep_id' => 'required',
        'obat_id' => 'required',
        'harga' => 'required',
        'dosis' => 'required',
        'sub_total' => 'required',

    ]);
        
        $detail = Detail::find($id);
        
        $detail->resep_id = $request->resep_id;
        $detail->obat_id = $request->obat_id;
        $detail->harga = $request->harga;
        $detail->dosis = $request->dosis;
        $detail->sub_total = $request->sub_total;


        $detail->save();
        return redirect('detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::find($id);
        $detail->delete();
        return redirect('detail');
    }
}
