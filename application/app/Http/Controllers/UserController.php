<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Auth;
use DB;
use Mail;
use Hash;
use Image;

use App\Models\MasterUser;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('isAdmin');
    }

    public function index()
    {
      $getuser = MasterUser::paginate(10);

      return view('backend.pages.user.index', compact('getuser'));
    }


    public function store(Request $request)
    {
      // dd($request);
      $set = new MasterUser;
      $set->email = $request->email;
      $set->nama = $request->nama;
      $set->level = $request->level;
      $set->password = Hash::make('12345678');
      $set->activated = $request->activated;
      $set->url_foto = '';
      $set->save();
      return redirect()->route('user.index')->with('message', 'Berhasil memasukkan user baru.');
    }



    public function update(Request $request)
    {
      // dd($request);
      $set = MasterUser::find($request->id);
      $set->nama = $request->nama;
      $set->level = $request->level;
      $set->activated = $request->activated;
      $set->save();

      return redirect()->route('user.index')->with('message', 'Berhasil mengubah data user.');
    }

    public function delete($id)
    {
      // $cekberita = Berita::where('id_user', $id)->first();

      // if($cekberita==null) {
      //   $set = MasterUser::find($id);
      //   $set->delete();

      //   return redirect()->route('user.index')->with('message', 'Berhasil menghapus data akun.');
      // } else {
      //   return redirect()->route('user.index')->with('messagefail', 'Gagal melakukan hapus data. Data akun telah memiliki relasi dengan data yang lain.');
      // }

      $set = MasterUser::find($id);
      $set->delete();

      return redirect()->route('user.index')->with('message', 'Berhasil menghapus data user.');
    }

    public function bind($id)
    {
      $get = MasterUser::find($id);
      return $get;
    }

}
