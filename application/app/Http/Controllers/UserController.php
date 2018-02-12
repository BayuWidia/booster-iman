<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Auth;
use DB;
use Mail;
use Hash;
use Image;
use Validator;

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
      $message = [
        'email.required' => 'Email Tidak Boleh Kosong',
        'nama.required' => 'Nama Tidak Boleh Kosong',
        'level.required' => 'Level Tidak Boleh Kosong',
        'activated.required' => 'Status Tidak Boleh Kosong'
      ];
      
      $validator = Validator::make($request->all(), [
        'email' => 'required',
        'nama' => 'required',
        'level' => 'required',
        'activated' => 'required',
      ], $message);

      if($validator->fails()) {
        return redirect()->route('user.index')->withErrors($validator)->withInput();
      }

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
      // $message = [
      //   'edit_nama.required' => 'Nama Tidak Boleh Kosong',
      //   'level_user.required' => 'Level Tidak Boleh Kosong',
      //   'activated_id.required' => 'Status Tidak Boleh Kosong'
      // ];
      
      // $validator = Validator::make($request->all(), [
      //   'edit_nama' => 'required',
      //   'level_user' => 'required',
      //   'activated_id' => 'required',
      // ], $message);

      // if($validator->fails()) {
      //   return redirect()->route('user.index')->withErrors($validator)->withInput();
      // }

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
