<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    // Menampilkan profil pengguna yang sedang login
    public function index()
    {
        return view('admin.profil.index');
    }

    // Menampilkan form edit profil sendiri
    public function edit()
    {
        return view('admin.profil.edit');
    }

    // Menyimpan perubahan profil sendiri
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],

            'password' => 'nullable|string|min:6|confirmed',
        ]);

        // Update nama dan email
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password hanya jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Simpan perubahan
        $user->save();

        return redirect()
            ->route('profil.index')
            ->with('success', 'Profil berhasil diperbarui!');
    }
}
