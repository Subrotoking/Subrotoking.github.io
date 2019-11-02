<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
    	return view('prosiding.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $list_user = \App\User::all()->pluck('name','id');
        return view('prosiding.create',compact('list_user'));
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
        // $post = \App\Post::create([
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
        // $request->validate([
        //     'lampiran1' => 'required|file|max:2000',
        //     'Nama_Artikel' => 'required',
        // ]);
        // $post = User::findOrFail(auth()->post()->id);
        // // Check if a profile image has been uploaded
        // if ($request->has('lampiran1')) {
        //     // Get image file
        //     $file = $request->file('lampiran1');
        //     // Make a image name based on user name and current timestamp
        //     $name = str_slug($request->input('Nama_Artikel')).'_'.time();
        //     // Define folder path
        //     $folder = '/public/files/';
        //     // Make a file path where image will be stored [ folder path + file name + file extension]
        //     $filePath = $folder . $name. '.' . $file->getClientOriginalExtension();
        //     // Upload image
        //     $this->uploadOne($file, $folder, 'public', $name);
        //     // Set user profile image path in database to filePath
        //     $post->lampiran1 = $filePath;
        // }
        // // Persist user record to database
        // // $user->save();
        // // $this->validate($request,[
        // //     'lampiran1' => 'required|file|max:2000',
        // //     'Nama_Artikel' => 'required',
        // //     // 'Nomer_DOI_Artikel' => 'required',
        // //     // 'Cakupan_Bidang_Ilmu' => 'required',
        // //     // 'kontribusi' => 'required',
        // //     // 'Bidang_Ilmu_Pengusul' => 'required',
        // //     // 'Alamat_Redaksi' => 'required',
        // //     // 'Alamat_URL' => 'required',
        // //     // 'Penerbit' => 'required',
        // //     // 'Tanggal_Penerbitan' => 'required',
        // //     // 'Nama_Program' => 'required',
        // //     // 'Lembaga_Pemberi_dana' => 'required',
        // //     // 'Tempat_Penelitian' => 'required',
    	// // 	// 'Nomor_Kontrak' => 'required'
        // // ]);
        
        $data = $request->all();
        \App\Post::create($data);
        return redirect('/file/upload')->with(['status' => 'Data created successfully.']);
    }

    public function upload(Request $request)
    {
        return view('prosiding.lanjut'); 
    }
    public function upload2(Request $request,$id)
    {
        $request->validate([
            'lampiran1' => 'required|file|max:2000',
            'Nama_Artikel' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->Nama_Artikel = $request->input('Nama_Artikel');
        // Check if a profile image has been uploaded
        if ($request->has('lampiran1')) {
            // Get image file
            $file = $request->file('lampiran1');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('Nama_Artikel')).'_'.time();
            // Define folder path
            $folder = '/public/files/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $file->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($file, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $post->lampiran1 = $filePath;
        }
        // Persist user record to database
         $post->save();
        return view('master',compact('post'));        
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
        $post = \App\Post::findOrFail($id);
        return view('prosiding.edit', ['post' => $post]);
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
        $post = Post::find($id);
        $post->update($request->all());
        return redirect('/prosiding');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Post::findOrFail($id);
        $post->delete();
        return redirect('/prosiding');
    }
}
