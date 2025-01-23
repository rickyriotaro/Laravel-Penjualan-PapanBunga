<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Produk;

class LoginRegisterController extends Controller
{

    public function userHome(Request $request)
    {
        $search = $request->input('search');

        $data = Produk::where(function ($query) use ($search) {
            $query->where('kode_produk', 'LIKE', '%' . $search . '%');
        })->paginate(5);

        return view('user.home', compact('data'));
    }

    public function adminhome()
    {
        return view('admin.home');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function home()
    {
        return view('home');
    }
    public function produk()
    {
        return view('admin.produk');
    }
    public function postRegister(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'nohp' => 'required',
            'password' => 'required|min:8|max:20|confirmed'
        ]);
        $user = new User;

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->password = Hash::make($request->password);

        $user->save();

        if ($user) {
            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat,
        silahkan melakukan proses login!');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali
        beberapa saat!');
        }
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->level == 'user') {
                return redirect('/user/home');
            } elseif ($user->level == 'admin') {
                return redirect('/admin/home');
            }
        }
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa
        saat!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
