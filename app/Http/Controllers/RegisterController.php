<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('register'); // Pastikan ini sesuai dengan lokasi file blade Anda
    }

    // Memproses registrasi
    public function register(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan pengguna baru
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password); // Enkripsi password
        $user->email = $request->email;
        $user->save();

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}