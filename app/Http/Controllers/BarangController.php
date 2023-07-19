<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        return view('admin.master_data.barang.index', compact('barang'));
    }

    public function create(){
        return view('admin.master_data.barang.create');
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'kd_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'qty' => 'required|string',
            'merk' => 'required|string',
            'harga_pokok' => 'required|integer',
            'harga_jual' => 'required|integer',
            'foto' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->file('foto')){
            $validasiData['foto'] = $request->file('foto')->store('post-images');
        }
        Barang::create($validasiData);

        return redirect('/admin/barang')->with('status', 'Data berhasil ditambah.');
    }

    public function edit($id){
        $barang = Barang::where('id', $id)->get();

        return view('admin.master_data.barang.edit', compact('barang'));
    }

    public function update(Request $request, $id){
        $validasiData = $request->validate([
            'kd_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'qty' => 'required|string',
            'merk' => 'required|string',
            'harga_pokok' => 'required|integer',
            'harga_jual' => 'required|integer',
            'foto' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->file('foto')){
            $validasiData['foto'] = $request->file('foto')->store('post-images');
        }
        Barang::where('id', $id)->update($validasiData);

        return redirect('/admin/barang')->with('status', 'Data berhasil ditambah.');
    }

    public function delete($id) {
        Barang::destroy($id);
        return redirect('/admin/barang')->with('status', 'Data berhasil dihapus.');
    }

}
