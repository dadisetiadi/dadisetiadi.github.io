<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventorie;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Inventorie::all();
    //    return view('data-sekolah.datasekolah', compact('datas'));
        return view('databarang.barang', compact('datas'), ['title'=> 'Inventori']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Inventorie $data)
    {    
        return view('databarang.create-barang', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
       // dd($request->all());
        
        $this->validate($request, [
            'foto'=>'required|mimes:jpg,png',
            'nama_barang'=>'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'stok'=>'required',
 
        ]);

        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();

        $data = new Inventorie();

        $data->nama_barang = $request->nama_barang;
        $data->harga_beli = $request->harga_beli;
        $data->harga_jual = $request->harga_jual;
        $data->stok = $request->stok;

        $data ->foto = $namaFile;
        $nm->move(public_path().'/img', $namaFile);
    
        $data->save();

        return redirect('/databarang');
    }
    /**

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id)
    {
     $delete = DB::table('inventories')
                ->where('id', $id)
                ->delete();
     return redirect('/databarang');
    }

   
}
