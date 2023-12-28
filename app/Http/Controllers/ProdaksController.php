<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Prodaks;
use App\Http\Requests\StoreProdaksRequest;
use App\Http\Requests\UpdateProdaksRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdaksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodaks = DB::table('tbl_prodak')->get();
        return view('prodak', ['prodak' => $prodaks]);
        // return view('prodak')->with([
        //     'prodak' =>Prodaks::all()
        // ]);
    }

    public function form()
    {
    return view('tambahProdak');
    }

    public function create(Request $request)
    {
        $photo  =$request->file('gambar');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path      ='prodak_gambar/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($photo));

        try{
            DB::table('tbl_prodak')->insert([
               'nama_prodak' =>$request->nama_prodak,
               'keterangan' =>$request->keterangan,
               'gambar' =>$filename
            ]);
            return redirect('/data-prodak')->with('status', 'Data Berhasil Ditambahkan');
         }catch(\Throwable $th){
            return redirect('/data-prodak')->with('status', 'Data Gagal Ditambahkan');
         }
    }

    public function store(Request $request)
    {
        return $request->file('gambar')->store('produk-gambar');
    }
    public function show(?int $ID=null)
    {
        $prodaks = DB::table('tbl_prodak')->where('ID', $ID)->get()->first();
        // dd($mahasiswa);
        return view('showProdak')->with(['prd'=>$prodaks]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $ID)
    {
        try{
            DB::table('tbl_prodak')->where('ID', $ID )->update([
               'nama_prodak' =>$request->nama_prodak,
               'keterangan' =>$request->keterangan
            ]);
            return redirect('/data-prodak')->with('status', 'Data Berhasil DiUpdate');
         }catch(\Throwable $th){
            return redirect('/data-prodak')->with('status', 'Data Gagal DiUpdate');
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdaksRequest $request, Prodaks $prodaks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ID)
    {
        try{
            DB::table('tbl_prodak')->where('ID', $ID)->delete();
            return redirect()->to('/data-prodak')->with('alert', 'Data Berhasil Di Hapus');
        } catch(\Exception $th){
            return redirect('/data-prodak')->with('status', 'Data Gagal Ditambahkan');
        }
    }
}
