@extends('backend.layout.master')

@section('title')
  <title>Booster Iman</title>
@endsection

@section('headscript')
  <!-- iCheck -->
  <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="{{ asset('vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
  <!-- Select2 -->
  <link href="{{ asset('vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
  <!-- Switchery -->
  <link href="{{ asset('vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
  <!-- starrr -->
  <link href="{{ asset('vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
@endsection

@section('content')
<script>
  window.setTimeout(function() {
    $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
  }, 2000);

  window.setTimeout(function() {
    $(".alert-warning").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
  }, 5000);
</script>

<div class="modal fade" id="modaledit" role="dialog">
  <div class="modal-dialog">
    <form class="form-horizontal" action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit User</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-14 {{ $errors->has('email') ? 'has-error' : '' }}">
            <label class="control-label">Email</label>
            <input type="hidden" name="id" id="id">
            <input id="edit_email" type="email" name="email" class="form-control" placeholder="Email" readonly="true" 
            @if($errors->has('email'))
              value="{{ old('email') }}"
            @endif
            readonly>
            @if($errors->has('email'))
              <span class="help-block">
                <i>* {{$errors->first('email')}}</i>
              </span>
            @endif
          </div>
          <div class="col-md-14 {{ $errors->has('nama') ? 'has-error' : '' }}">
            <label class="control-label">Nama</label>
            <input id="edit_nama" type="input" name="nama" class="form-control" placeholder="Name"
            @if($errors->has('nama'))
              value="{{ old('nama') }}"
            @endif>
            @if($errors->has('nama'))
              <span class="help-block">
                <i>* {{$errors->first('nama')}}</i>
              </span>
            @endif
          </div>
          <div class="col-md-14 {{ $errors->has('level') ? 'has-error' : '' }}">
            <label class="control-label">Level</label>
            <select class="form-control" name="level" id="level_user">
              <option value="-- Pilih --">-- Pilih --</option>
              <option value="1" {{ old('level')=="1" ? 'selected' : '' }} id="flag_super_admin">Superadmin</option>
              <option value="2" {{ old('level')=="2" ? 'selected' : '' }} id="flag_admin">Admin</option>
              <option value="3" {{ old('level')=="3" ? 'selected' : '' }} id="flag_user">User</option>
            </select>
            @if($errors->has('level'))
              <span class="help-block">
                <i>* {{$errors->first('level')}}</i>
              </span>
            @endif
          </div>
          <div class="col-md-14 {{ $errors->has('activated') ? 'has-error' : '' }}">
            <label class="control-label">Status Aktif</label>
            <select class="form-control" name="activated" id="activated_id">
              <option value="-- Pilih --">-- Pilih --</option>
              <option value="0" {{ old('activated')=="0" ? 'selected' : '' }} id="flag_tidak_aktif">Tidak Aktif</option>
              <option value="1" {{ old('activated')=="1" ? 'selected' : '' }} id="flag_aktif">Aktif</option>
            </select>
            @if($errors->has('activated'))
              <span class="help-block">
                <i>* {{$errors->first('activated')}}</i>
              </span>
            @endif
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-primary btn-flat">Simpan Perubahan</a>
        </div>
      </div>
  </form>
  </div>
</div>

<div class="modal fade" id="modaldelete" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus User</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin untuk menghapus user ini?</p>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Tidak</button>
        <a class="btn btn-danger btn-flat" id="sethapus">Ya, saya yakin</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    @if(Session::has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
        <p>{{ Session::get('message') }}</p>
      </div>
    @endif

    @if(Session::has('messagefail'))
      <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Oops, terjadi kesalahan!</h4>
        <p>{{ Session::get('messagefail') }}</p>
      </div>
    @endif
  </div>

  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Manajemen User</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="row">
      <div class="col-md-5 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Formulir Tambah User</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left input_mask" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12 {{ $errors->has('email') ? 'has-error' : '' }}">Email</label>
                <div class="col-md-10 col-sm-9 col-xs-12">
                  <input type="email" name="email" class="form-control" placeholder="Ketikkan Email Anda..."
                  @if($errors->has('email'))
                    value="{{ old('email') }}"
                  @endif
                  >
                  @if($errors->has('email'))
                    <span class="help-block">
                      <i>* {{$errors->first('email')}}</i>
                    </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12 {{ $errors->has('nama') ? 'has-error' : '' }}">Nama </label>
                <div class="col-md-10 col-sm-9 col-xs-12">
                  <input type="input" name="nama" class="form-control" placeholder="Ketikkan nama Anda..."
                  @if($errors->has('nama'))
                    value="{{ old('nama') }}"
                  @endif
                  >
                  @if($errors->has('nama'))
                    <span class="help-block">
                      <i>* {{$errors->first('nama')}}</i>
                    </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12">Level</label>
                <div class="col-md-10 col-sm-9 col-xs-12">
                  <select class="form-control" name="level">
                    <option value="-- Pilih --">-- Pilih --</option>
                    <option value="1" {{ old('level')=="1" ? 'selected' : '' }} >Superadmin</option>
                    <option value="2" {{ old('level')=="2" ? 'selected' : '' }} >Admin</option>
                    <option value="3" {{ old('level')=="3" ? 'selected' : '' }} >User</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12">Status</label>
                <div class="col-md-10 col-sm-9 col-xs-12">
                  <select class="form-control" name="activated">
                    <option value="-- Pilih --">-- Pilih --</option>
                    <option value="0" {{ old('level')=="0" ? 'selected' : '' }} >Tidak Aktif</option>
                    <option value="1" {{ old('level')=="1" ? 'selected' : '' }} >Aktif</option>
                  </select>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-danger">Reset Formulir</button>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

      <div class="col-md-7 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Seluruh Data User</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="tabelinfo" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                    $no;
                    if($getuser->currentPage()==1)
                      $no = 1;
                    else
                      $no = (($getuser->currentPage() - 1) * $getuser->perPage())+1;
                  ?>
                @foreach($getuser as $key)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$key->email}}</td>
                    <td>
                      @if($key->level=="1")
                        Superadmin
                      @elseif($key->level=="2")
                        Admin
                      @elseif($key->level=="3")
                        User
                      @endif
                    </td>
                    <td>{{$key->nama}}</td>
                    <td>
                      @if($key->activated=="0")
                        <span class="label label-danger">Tidak Aktif</span>
                      @elseif($key->activated=="1")
                        <span class="label label-success">Aktif</span>
                      @endif
                    </td>
                    <td>
                      <span data-toggle="tooltip" title="Edit">
                        <a class="btn btn-xs btn-warning btn-flat edit" data-toggle="modal" data-target="#modaledit" data-value="{{$key->id}}">
                          <i class="fa fa-edit"></i>
                        </a>
                      </span>
                      @if(Auth::user()->id==$key->id)
                        <span data-toggle="tooltip" title="Anda sedang login menggunakan akun ini">
                          <a class="btn btn-xs btn-danger" disabled><i class="fa fa-remove"></i></a>
                        </span>
                      @else
                        <span data-toggle="tooltip" title="Hapus Data">
                          <a href="" class="btn btn-xs btn-danger hapus" data-toggle="modal" data-target="#modaldelete" data-value="{{$key->id}}"><i class="fa fa-remove"></i></a>
                        </span>
                      @endif  
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="box-footer">
              <div class="pull-right">
                {{ $getuser->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <!-- bootstrap-progressbar -->
  <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{ asset('js/moment/moment.min.js') }}"></script>
  <script src="{{ asset('js/datepicker/daterangepicker.js') }}"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="{{ asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
  <script src="{{ asset('vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
  <script src="{{ asset('vendors/google-code-prettify/src/prettify.js') }}"></script>
  <!-- jQuery Tags Input -->
  <script src="{{ asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
  <!-- Switchery -->
  <script src="{{ asset('vendors/switchery/dist/switchery.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ asset('vendors/select2/dist/js/select2.full.min.js') }}"></script>
  <!-- Parsley -->
  <script src="{{ asset('vendors/parsleyjs/dist/parsley.min.js') }}"></script>
  <!-- Autosize -->
  <script src="{{ asset('vendors/autosize/dist/autosize.min.js') }}"></script>
  <!-- jQuery autocomplete -->
  <script src="{{ asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
  <!-- starrr -->
  <script src="{{ asset('vendors/starrr/dist/starrr.js') }}"></script>

  <!-- DataTables -->
  <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
   <script>
    $(function () {
      $("#tabelinfo").on("click", "a.edit", function(){
        var a = $(this).data('value');
        $.ajax({
          url: "{{url('/')}}/panel/bind-user/"+a,
          dataType: 'json',
          success: function(data){

            var id = data.id;
            var email = data.email;
            var nama = data.nama;
            var level = data.level;
            var activated = data.activated;

            $('#id').attr('value', id);
            $('#edit_email').attr('value', email);
            $('#edit_nama').attr('value', nama);
            if (level=="1") {
              $('#flag_super_admin').attr('selected', true);
            } else if (level=="2") {
              $('#flag_admin').attr('selected', true);
            } else if (level=="3") {
              $('#flag_user').attr('selected', true);
            }
            if (activated=="0") {
              $('#flag_tidak_aktif').attr('selected', true);
            } else {
              $('#flag_aktif').attr('selected', true);
            }
          }
        })
      });

      $("#tabelinfo").on("click", "a.hapus", function(){
        var a = $(this).data('value');
        $('#sethapus').attr('href', '{{url('panel/delete-user/')}}/'+a);
      });

    });
  </script>
@endsection
