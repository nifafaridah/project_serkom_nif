<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    //
    public function index()
    {
        $guru = DB::table('guru')->get();
        return view('admin.guru.index', compact('guru'));
    }

    
    public function create()
    {
        return view('admin.guru.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip'       => 'required',
            'mapel'     => 'required',
            'foto'      => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $namaFoto = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/guru'), $namaFoto);
        }

            DB::table('guru')->insert([
            'nama'  => $request->nama_guru,
            'nip'   => $request->nip,
            'mapel' => $request->mapel,
            'foto'  => $namaFoto,
        ]);
        

        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil ditambahkan!');
    }
}
