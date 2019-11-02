<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lpengindex;
use Session;

class PengindexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pindex = Lpengindex::all();
    	return view('pengindex.index', ['pindex' => $pindex]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_post = \App\Post::all()->pluck('Nama_Artikel','id');
        return view('pengindex.create',compact('list_post'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'Nama_Artikel' => 'required',
        //     'Nomer_DOI_Artikel' => 'required',
        //     'Cakupan_Bidang_Ilmu' => 'required',
        //     'kontribusi' => 'required',
        //     'Bidang_Ilmu_Pengusul' => 'required',
        //     'Alamat_Redaksi' => 'required',
        //     'Alamat_URL' => 'required',
        //     'Penerbit' => 'required',
        //     'Tanggal_Penerbitan' => 'required',
        //     'Nama_Program' => 'required',
        //     'Lembaga_Pemberi_dana' => 'required',
        //     'Tempat_Penelitian' => 'required',
    	// 	'Nomor_Kontrak' => 'required'
        // ]);
        // $pen = \App\Lpengindex::create([
        //     'Nama_Artikel' => $request->Nama_Artikel,
        //     'Nomer_DOI_Artikel' =>  $request->Nomer_DOI_Artikel,
        //     'Cakupan_Bidang_Ilmu' =>  $request->Cakupan_Bidang_Ilmu,
        //     'kontribusi' =>  $request->kontribusi,
        //     'Bidang_Ilmu_Pengusul' =>  $request->Bidang_Ilmu_Pengusul,
        //     'Alamat_Redaksi' =>  $request->Alamat_Redaksi,
        //     'Alamat_URL' =>  $request->Alamat_URL,
        //     'Penerbit' =>  $request->Penerbit,
        //     'Tanggal_Penerbitan' =>  $request->Tanggal_Penerbitan,
        //     'Nama_Program' =>  $request->Nama_Program,
        //     'Lembaga_Pemberi_dana' =>  $request->Lembaga_Pemberi_dana,
        //     'Tempat_Penelitian' =>  $request->Tempat_Penelitian,
    	// 	'Nomor_Kontrak' =>  $request->Nomor_Kontrak
        // ]);
        $data = $request->all();
        \App\Lpengindex::create($data);
        Session::flash('message', 'Sukses Menambahkan Data Anda!');
        return redirect('/pengesahan/create');
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
    public function edit($id)
    {
        $pindex = Lpengindex::find($id);
        return view('pengindex.edit', compact('pindex'));
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
        $pindex = Lpengindex::find($id);
        $pindex->update($request->all());
        return redirect('/pengindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Lpengindex::findOrFail($id);
        $post->delete();
        return redirect('/pengindex');

    }
}
