<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\user;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserUkkController extends Controller
{
   function index(){
    return view ('login');
   }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ], [
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $login = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::attempt($login)) {
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            } elseif (Auth::user()->role == 'petugas'){
                    return redirect('petugas');
                } else {
                        return redirect('peminjam');
                    }
        } else {
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak seusai');
    }
}


   function user(){
    $buku=books::all();
    if(auth::id()) {
        $role=auth()->user()->role;
        if ($role == 'admin'){
           return view('admin',compact('buku'));
        } elseif ($role == 'petugas'){
            return view('petugas',compact('buku'));
        } else {
            return view('peminjam',compact('buku'));
        }
    }
   }

   function logout()
 {
     Auth::logout();
     return redirect('')->with('berhasil logout');
 }

 function create() {
    return view('create');
 }

 function createe(Request $request)
    {
        books::create($request->all());
        return redirect('admin')->with('success', 'Product added successfully');
        // return redirect('/home');

    }

function updatee($id){
    $post = books::find($id);
    return view('update', compact('post'));
}
function updateedit(Request $request, $id){
    $post = books::find($id);

    $post ->judul = $request->judul;
    $post ->penulis = $request->penulis;
    $post ->penerbit = $request->penerbit;
    $post ->tahun_terbit = $request->tahun_terbit;
    $post ->save();
    return redirect('/admin');
  }

    function delete($id){
        $buku = books::find($id);

        $buku->delete();
        return redirect('admin');
    }
    function halaman_peminjaman($id) {
        $buku = books::find($id);
        return view ('halaman_peminjaman',compact('buku'));
    }
    function peminjaman(Request $request, $id){
        $pinjam = new peminjaman;

        $pinjam-> userID =$request -> userID;
        $pinjam-> bukuID =$request -> bukuID;
        $pinjam-> tanggal_peminjaman =$request -> tanggal_peminjaman;
        // $pinjam-> tanggal_pengambalian =$request -> tanggal_pengambalian;
        $pinjam-> status_peminjaman =$request -> status_peminjaman;

        $pinjam->save();
        return redirect('home');
    }
    function from_registrasi(){
        return view('registrasi');
    }

    function registrasi(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('');
    }

    function laporan3(){
        $data["data_barangs"] = books::all();
        return view('lapor an', $data);

    }

    // function search(Request $request){
    //     if($request->has('search')){
    //         $buku= books::where('judul','LIKE','%'.$request->search.'%')->get();
    //     }
    //      else{
    //         $buku= books::all();
    //      }
    //      return view('admin', compact('products','request'));
    // }

    public function search(Request $request)
{
    $search = $request->input('search');
    $results = books::where('name', 'like', "%$search%")->get();

    return view('admin', ['results' => $results]);
}

}
