<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Facades Laravel
use Illuminate\Support\Facades\DB;

// Model
use App\Models\GuruModel;
use App\Models\MapelModel;
use App\Models\GampanganModel;

class GampanganController extends Controller{

    public function list_pagination(Request $request){
        $nama = $request->nama;
        $umur = $request->umur;
        $lq = DB::table('calonpegawai')->where([
            ['nama', 'like', "%".$nama."%"],
            // Kemungkinan lain disimpan disini
        ])->orWhere([
            ['umur', 'like', "%".$umur."%"],
            // Kemungkinan lain disimpan disini
        ])->paginate('10');
        return view('gampanganfolder.list-pagination')->with(compact(array( 'lq' )));
    }

    // View List Global
    public function list_global(){
        // LQ = 'List Query'
        $lq = DB::table('crudgampangan')->get();
        
        // LE = 'List Eloquent'
        $le = GampanganModel::all();
        
        // Passing Data menggunakan With dan Compact
        return view('gampanganfolder.list')->with(compact(array( 'lq', 'le' )));
    }

    /*
    ---------------------------------
    || CRUD menggunakan Query Builder
    ---------------------------------
    */

    // View Add
    public function add_query(){
        return view('gampanganfolder.add');
    }

    // Simpan Insert Data
    public function add_query_store(Request $request){
        // Pesan jika terjadi kesalahan
        $messages = [
            '*.required'    => 'Kolom ini wajib diisi.',
        ];

        // Proses validasi input
        $request->validate([
            'title'         => ['required'],
            'body'          => ['required'],
        ], $messages);

        // Insert data kedalam table 'crudgampangan' menggunakan Query Builder
        DB::table('crudgampangan')->insert([
            'title'         => $request->title,
            'body'          => $request->body,
        ]);

        // Setelah selesai insert, redirect ke route 'crud.list.global' dengan pesan.
        return redirect()->route('crud.list.global')->with('alert', 'alert alert-success')->with('message', 'Data berhasil ditambahkan menggunakan Query Builder.');
    }

    // View Edit
    public function edit_query($id){
        $post = DB::table('crudgampangan')->where('id', $id)->first();
        return view('gampanganfolder.edit')->with(compact(array( 'post' )));
    }

    // Simpan Update Data
    public function edit_query_store(Request $request, $id){
        DB::table('crudgampangan')->where('id', $id)->update([
            'title'         => $request->title,
            'body'          => $request->body,
        ]);
        return redirect()->route('crud.list.global')->with('alert', 'alert alert-info')->with('message', 'Data berhasil diubah menggunakan Query Builder.');
    }

    // Delete data
    public function delete_query($id){
        DB::table('crudgampangan')->where('id', $id)->delete();
        return redirect()->route('crud.list.global')->with('alert', 'alert alert-info')->with('message', 'Data berhasil dihapus menggunakan Query Builder.');
    }

    /*
    ----------------------------
    || CRUD menggunakan Eloquent
    ----------------------------
    */

    // View Add
    public function add_eloquent(){
        return view('gampanganfolder.add');
    }

    // Simpan Insert Data
    public function add_eloquent_store(Request $request){
        // Pesan jika terjadi kesalahan
        $messages = [
            '*.required'    => 'Kolom ini wajib diisi.',
        ];
        
        // Proses validasi input
        $request->validate([
            'title'         => ['required'],
            'body'          => ['required'],
        ], $messages);

        // Insert data kedalam table 'crudgampangan' menggunakan Eloquent
        GampanganModel::create([
            'title'         => $request->title,
            'body'          => $request->body,
        ]);

        // Setelah selesai insert, redirect ke route 'crud.list.global' dengan pesan.
        return redirect()->route('crud.list.global')->with('alert', 'alert alert-success')->with('message', 'Data berhasil ditambahkan menggunakan Eloquent.');
    }

    // View Edit
    public function edit_eloquent($id){
        $post = GampanganModel::where('id', $id)->firstOrFail();
        return view('gampanganfolder.edit')->with(compact(array( 'post' )));
    }
    
    // Simpan Update Data
    public function edit_eloquent_store(Request $request, $id){
        // Update data kedalam table 'crudgampangan' menggunakan Query Builder
        GampanganModel::where('id', $id)->update([
            'title'         => $request->title,
            'body'          => $request->body,
        ]);

        // Setelah selesai update, redirect ke route 'crud.list.global' dengan pesan.
        return redirect()->route('crud.list.global')->with('alert', 'alert alert-info')->with('message', 'Data berhasil diubah menggunakan Eloquent.');
    }

    // Delete data
    public function delete_eloquent($id){
        GampanganModel::find($id)->delete();
        return redirect()->route('crud.list.global')->with('alert', 'alert alert-info')->with('message', 'Data berhasil dihapus menggunakan Eloquent.');
    }

    // Relasi database Eloquent - One to One
    public function onetoone(){
        $el = MapelModel::all();
        return view('gampanganfolder.list-relasi-1on1')->with(compact(array( 'el' )));
    }
}