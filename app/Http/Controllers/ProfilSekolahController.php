<?php 

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | TAMPILKAN PROFIL
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $profil = ProfilSekolah::first();

        if (!$profil) {
            return view('admin.profil-sekolah.index', [
                'profil' => null,
                'mode' => 'create'
            ]);
        }

        return view('admin.profil-sekolah.index', [
            'profil' => $profil,
            'mode' => 'show'
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN DATA BARU
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'kepala_sekolah' => 'required|string|max:255',
            'npsn' => 'required|string|max:50',
            'alamat' => 'required|string',
            'kontak' => 'required|string|max:50',
            'tahun_berdiri' => 'required',
            'visi_misi' => 'required|string',
            'deskripsi' => 'required|string',

            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except(['foto', 'logo']);

        // Upload foto
        if ($request->hasFile('foto')) {
            $namaFoto = time() . '_foto.' .
                $request->file('foto')->getClientOriginalExtension();

            $request->file('foto')->move(
                public_path('uploads/profil'),
                $namaFoto
            );

            $data['foto'] = $namaFoto;
        }

        // Upload logo
        if ($request->hasFile('logo')) {
            $namaLogo = time() . '_logo.' .
                $request->file('logo')->getClientOriginalExtension();

            $request->file('logo')->move(
                public_path('uploads/profil'),
                $namaLogo
            );

            $data['logo'] = $namaLogo;
        }

        ProfilSekolah::create($data);

        return redirect()
            ->route('profil-sekolah.index')
            ->with('success', 'Profil sekolah berhasil disimpan!');
    }

    /*
    |--------------------------------------------------------------------------
    | HALAMAN EDIT
    |--------------------------------------------------------------------------
    */

    public function edit()
    {
        $profil = ProfilSekolah::first();

        return view('admin.profil-sekolah.edit', compact('profil'));
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE DATA
    |--------------------------------------------------------------------------
    */

    public function update(Request $request)
    {
        $profil = ProfilSekolah::firstOrFail();

        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'kepala_sekolah' => 'required|string|max:255',
            'npsn' => 'required|string|max:50',
            'alamat' => 'required|string',
            'kontak' => 'required|string|max:50',
            'tahun_berdiri' => 'required',
            'visi_misi' => 'required|string',
            'deskripsi' => 'required|string',

            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except(['foto', 'logo']);

        // Upload foto baru
        if ($request->hasFile('foto')) {
            $namaFoto = time() . '_foto.' .
                $request->file('foto')->getClientOriginalExtension();

            $request->file('foto')->move(
                public_path('uploads/profil'),
                $namaFoto
            );

            $data['foto'] = $namaFoto;
        }

        // Upload logo baru
        if ($request->hasFile('logo')) {
            $namaLogo = time() . '_logo.' .
                $request->file('logo')->getClientOriginalExtension();

            $request->file('logo')->move(
                public_path('uploads/profil'),
                $namaLogo
            );

            $data['logo'] = $namaLogo;
        }

        $profil->update($data);

        return redirect()
            ->route('profil-sekolah.index')
            ->with('success', 'Profil sekolah berhasil diperbarui!');
    }
}

