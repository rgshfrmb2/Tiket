<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tiket;
use Illuminate\Support\Str;


class TiketController extends Controller
{
    public function index()
    {
        $tiket = Tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    public function create()
    {
        return view('tiket.create');
    }

    public function store(Request $request)
    {
        $id = random_int(1000000, 9999999);

        // validasi data
        $request->validate([
            'nama_konser' => 'required',
            'tgl' => 'required',
            'htm' => 'required',
            'nama_pembeli' => 'required',
            'tlp' => 'required',
            'email' => 'required',


        ]);

        $create = Tiket::create([
            'nama_konser' => $request->get('nama_konser'),
            'tgl' => $request->get('tgl'),
            'htm' => $request->get('htm'),
            'id_tiket' => $id,
            'nama_pembeli' => $request->get('nama_pembeli'),
            'tlp' => $request->get('tlp'),
            'email' => $request->get('email'),
            'status' => 'Belum Checkin',



           
        ]);
        // jika berhasil create
        if ($create) {
            // dan akan di arahkan ke halaman view barang bersama alert succes
            return redirect()->route('tiket.index')->with('success', 'Data Berhasil Ditambahkan');
        }
        // jika gagal akan di arahkan ke halaman form create bersama alert error
        return redirect()->route('contact.create')->with('error', $error);
    }


    public function edit($id)
    {
        
        $tiket = Tiket::find($id);
        // mengarahkan ke halaman form edit 
        return view('tiket.edit', compact('tiket'));
    }

    // controller sistem update
    public function update(Request $request, $id)
    {
        // menarik data berdasarkan model barang sesuai id
        $tiket = Tiket::find($id);
        // validasi data
        $request->validate([
            'nama_konser' => 'required',
            'tgl' => 'required',
            'htm' => 'required',
            'nama_pembeli' => 'required',
            'tlp' => 'required',
            'email' => 'required',
        ]);


       $update = $tiket->update([
            'nama_konser' => $request->input('nama_konser'),
            'tgl' => $request->input('tgl'),
            'htm' => $request->input('htm'),
            'nama_pembeli' => $request->input('nama_pembeli'),
            'tlp' => $request->input('tlp'),
            'email' => $request->input('email'),

        ]);
        if ($update) {
            return redirect()->route('tiket.index')->with('success', 'Data Berhasil Diperbaharui');
        }
        // jika gagal akan di arahkan ke halaman form edit bersama alert error
        return redirect()->route('tiket.edit')->with('error', $error);
        
        
    }

    public function destroy($id, Request $request)
    {
       
        $tiket = Tiket::find($id);
        $tiket->delete();

        return redirect()->route('tiket.index')->with('success', 'Data Berhasil Dihapus');

    }
}
