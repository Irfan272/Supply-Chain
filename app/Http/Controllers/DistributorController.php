<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index(){
        $distributor = Distributor::all();
        return view('admin.master_data.distributor.index', compact('distributor'));
    }

    public function create(){
        return view('admin.master_data.distributor.create');
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
        Distributor::create($validasiData);

        return redirect('/admin/distributor')->with('status', 'Data berhasil ditambah.');
    }

    public function edit($id){
        $distributor = Distributor::where('id', $id)->get();

        return view('admin.master_data.distributor.edit', compact('distributor'));
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
        Distributor::where('id', $id)->update($validasiData);

        return redirect('/admin/distributor')->with('status', 'Data berhasil ditambah.');
    }

    public function delete($id) {
        Distributor::destroy($id);
        return redirect('/admin/distributor')->with('status', 'Data berhasil dihapus.');
    }

}
