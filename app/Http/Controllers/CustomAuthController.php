<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'DnG Store | Login',
        ]);
    }

    // Method Custom Registration
    public function create()
    {
        return view('auth.register', [
            'title' => 'DnG Store | Register'
        ]);
    }

    public function credentials(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            session(['email' => $request->email, 'name' => $user->name]);
            return redirect()->intended('home')->with(['message' => 'Selamat datang di DnG Store!', 'type' => 'Login', 'alert' => 'Notifikasi Sukses!', 'class' => 'success']);
        }
        return redirect()->back()->with(['message' => 'Email atau password salah, harap login kembali!', 'type' => 'Credentials Error', 'alert' => 'Notifikasi Gagal!', 'class' => 'success']);
    }

    // All proccess stored data here's
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'repeat-password' => 'required|same:password|required_with:password'
        ]);
        $this->insert($request->all());
        $session = [
            'message' => 'Berhasil membuat akun!',
            'type' => 'Insert Data',
            'alert' => 'Notifikasi Sukses!',
            'class' => 'success'
        ];
        return redirect()->intended('home')->with($session);
    }

    public function insert(array $data)
    {
        session(['email' => $data['email'], 'name' => $data['name']]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        $session = [
            'message' => 'Berhasil keluar dari DnG Store!',
            'type' => 'Logout Success',
            'alert' => 'Notifikasi Sukses!',
            'class' => 'success'
        ];
        return Redirect('auth')->with($session);
    }
}
