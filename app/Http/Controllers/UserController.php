<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    // Menampilkan form tambah user
    public function create()
    {
        // Hanya Administrator yang boleh menambah user
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menambah user.');
        }

        return view('admin.user.create');
    }

    // Menyimpan user baru
    public function store(Request $request)
    {
        // Hanya Administrator yang boleh menyimpan user
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menambah user.');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'nullable|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'User',
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'User berhasil ditambahkan!');
    }

    // Menampilkan detail user
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view(
            'admin.user.show',
            compact('user')
        );
    }

    // Menampilkan form edit
    public function edit($id)
    {
        // Hanya Administrator yang boleh edit
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk mengedit user.');
        }

        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    // Mengupdate user
    public function update(Request $request, $id)
    {
        // Hanya Administrator yang boleh update
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk mengubah user.');
        }

        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'nullable|string',
            'password' => 'nullable|min:6',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role ?? 'User';

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()
            ->route('user.index')
            ->with('success', 'User berhasil diperbarui!');
    }

    // Menghapus user
    public function destroy($id)
    {
        // Hanya Administrator yang boleh hapus
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menghapus user.');
        }

        $user = User::findOrFail($id);

        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', 'User berhasil dihapus!');
    }
}