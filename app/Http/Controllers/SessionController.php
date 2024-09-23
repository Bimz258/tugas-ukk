<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('sesi/index');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email Harus Diisi',
            'password.required' => 'Password Harus Diisi',
        ]);
    
        // Login untuk tamu
        if ($request->email === 'tamu@gmail.com' && $request->password === '123456') {
            Auth::loginUsingId(1); // Ganti dengan ID tamu yang sesuai
            return redirect()->route('guest.index'); // Redirect ke halaman tamu
        }
    
        // Login untuk admin
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('tamu')->with('success', 'Berhasil Login'); // Redirect ke halaman tamu admin
        } else {
            return redirect('sesi')->with('error', 'Username atau Password salah / tidak valid'); // Pesan error
        }
    }
    public function logout()
{
    Auth::logout(); // Log out pengguna
    return redirect('sesi')->with('success', 'Berhasil Logout'); // Redirect ke halaman login
}

}
