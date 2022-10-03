<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {

        $data = mahasiswa::all();
        
        return view ('datamahasiswa', compact('data'));
    }

    public function tambah() {

        return view ('tambah');
    }

    public function insert(Request $request) {

        mahasiswa::create($request->all());

        return redirect()->route('mahasiswa')->with('success','Data Berhasil ditambahkan ke-Database');
    }

    public function show($id) {

        $data = mahasiswa::find($id);
        
        return view ('show', compact('data'));
    }

    public function update(Request $request, $id) {

        $data = mahasiswa::find($id);
        $data -> update($request -> all());

        return redirect()->route('mahasiswa')->with('success','Data Berhasil diubah');
    }

    public function delete ($id) {

        $data = mahasiswa::find($id);
        $data->delete();

        return redirect()->route('mahasiswa')->with('success','Data berhasil dihapus');
    }

}
