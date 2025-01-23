<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{

    public function tambah()
    {
        return view('admin.tambah');
    }

    public function postTambahAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 'admin';
        $user->jenis_kelamin = $request->jenisKelamin;
        $user->password = Hash::make($request->password);

        $user->save();

        if ($user) {
            return back()->with('success', 'Admin baru berhasil ditambah!');
        } else {
            return back()->with('failed', 'Gagal menambah admin baru!');
        }
    }

    public function editAdmin($id)
    {
        $data = User::find($id);

        return view('admin.edit', compact('data'));
    }

    public function postEditAdmin(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'jenisKelamin' => 'required',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenisKelamin;

        $user->save();

        if ($user) {
            return back()->with('success', 'Data admin berhasil di update!');
        } else {
            return back()->with('failed', 'Gagal mengupdate data admin!');
        }
    }

    public function deleteAdmin($id)
    {
        $data = User::find($id);

        $data->delete();

        if ($data) {
            return back()->with('success', 'Data berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data!');
        }
    }

    public function adminProduk(Request $request)
    {
        $search = $request->input('search');
        $data = Produk::where(function ($query) use ($search) {
            $query->where('kategori', 'LIKE', '%' . $search . '%');
        })->paginate(5);
        return view('admin.produk', compact('data'));
    }
    public function userProduk(Request $request)
    {
        $search = $request->input('search');
        $data = Produk::where(function ($query) use ($search) {
            $query->where('kategori', 'LIKE', '%' . $search . '%');
        })->paginate(5);
        return view('user.produk', compact('data'));
    }
    public function tambahProduk()
    {
        return view('admin.tambahProduk');
    }
    public function postTambahProduk(Request $request)
    {
        $request->validate([
            'kodeProduk' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|max:5120',
            'deskripsi' => 'required',
            'kategori' => 'required',

        ]);
        $produk = new Produk;
        $produk->kode_produk = $request->kodeProduk;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $produk->gambar = $filename;
        }
        $produk->save();
        if ($produk) {
            return back()->with('success', 'Produk baru berhasil
        ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }
    public function editProduk($id)
    {
        $data = Produk::find($id);
        $kategori = ['congratulations', 'pernikahan', 'duka_cita'];

        return view('admin.editProduk', compact('data', 'kategori'));
    }
    public function postEditProduk(Request $request, $id)
    {
        $request->validate([
            'kodeProduk' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|max:5120',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        $produk = Produk::find($id);
        $produk->kode_produk = $request->kodeProduk;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $filepath = 'images/' . $produk->gambar;
            if (File::exists($filepath)) {
                File::delete($filepath);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $produk->gambar = $filename;
        }
        $produk->save();
        if ($produk) {
            return back()->with('success', 'Produk berhasil diupdate!');
        } else {
            return back()->with('failed', 'Produk gagal diupdate!');
        }
    }
    public function deleteProduk($id)
    {
        $produk = Produk::find($id);
        $filepath = 'images/' . $produk->gambar;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $produk->delete();
        if ($produk) {
            return back()->with('success', 'Data produk berhasil di
        hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data produk!');
        }
    }
}
