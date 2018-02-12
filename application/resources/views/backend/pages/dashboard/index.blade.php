@extends('backend.layout.master')

@section('title')
  <title>Booster Iman</title>
@endsection

@section('headscript')
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
  <!-- page content -->
  <div class="">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-volume-up"></i></div>
          <div class="count">210</div>
          <h3>Jumlah Berita</h3>
          <p style="text-align: center;"><a style="color: #ff4d4d" href="#">Lihat Data Selengkapnya...</a></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
          <div class="count">90</div>
          <h3>Berita Approve</h3>
          <p style="text-align: center"><a style="color: #ff4d4d" href="#">Lihat Data Selengkapnya...</a></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-thumbs-o-down"></i></div>
          <div class="count">120</div>
          <h3>Berita Unapprove</h3>
          <p style="text-align: center"><a style="color: #ff4d4d" href="#">Lihat Data Selengkapnya...</a></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="count">2516</div>
          <h3>Jumlah Pengguna</h3>
          <p style="text-align: center"><a style="color: #ff4d4d" href="#">Lihat Data Selengkapnya...</a></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-warning">
          <h4><i class="fa fa-warning"></i> Warning!</h4> Berikut adalah tata cara penggunaan sistem infomasi <b style="color: black">BOOSTER IMAN</b>. Bagi Ikhwan, Akhwat, ukhti dan Akhi yang belum mengetahui cara penggunaan sistem ini silahkan klik tombol disamping ini: 
           <button class="btn btn-success"><i class="fa fa-download"></i> Download PDF</button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Dakwah Terbaru</h2>&nbsp;&nbsp;<span class="badge badge-success" style="color: white">42</span> 
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <ul class="list-unstyled timeline">
              <li>
                <div class="block">
                  <div class="tags">
                    <a href="" class="tag">
                      <span>Kategori 1</span>
                    </a>
                  </div>
                  <div class="block_content">
                    <h2 class="title">
                        <a>Jangan Sombong Dengan Ilmu dan Jangan Meremehkan Orang Lain</a>
                    </h2>
                    <div class="byline">
                      <span>2 hours ago</span> by <a>Rahima Zakia</a>
                    </div>
                    <p class="excerpt">Syaikh Al-Imam Ibnu Baaz rahimahullah berkata :"Betapa banyak orang yang jenius/pintar terkadang menjadi zindiq/menyimpang sebab kepintarannya dan meremehkan orang lain, ia menganggap… <a>Baca Selengkapnya</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="tags">
                    <a href="" class="tag">
                      <span>Kategori 2</span>
                    </a>
                  </div>
                  <div class="block_content">
                    <h2 class="title">
                        <a>Origami Cinta Dari Istriku</a>
                    </h2>
                    <div class="byline">
                      <span>5 hours ago</span> by <a>Andhika Bayu</a>
                    </div>
                    <p class="excerpt">Dan manusia yang paling utama kita ucapkan perkataan yang baik adalah teman hidup kita, yaitu istri kita,Bahwa statusnya sebenarnya disamping untuk para suami juga “colekkan” untuk para istri agar lebih mengekspresikan cintanya kepada suaminya… <a>Baca Selengkapnya</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="tags">
                    <a href="" class="tag">
                      <span>Kategori 3</span>
                    </a>
                  </div>
                  <div class="block_content">
                    <h2 class="title">
                        <a>Doa dan Taubat</a>
                    </h2>
                    <div class="byline">
                      <span>8 hours ago</span> by <a>Hikmah Lia</a>
                    </div>
                    <p class="excerpt">Di detik-detik terakhir menjelang pilkada DKI putaran kedua ini, seharusnya kita banyak bertaubat dan beristighfar sbb seringkali cita2 mulia kita tidak tercapai karena terhalang oleh dosa kita. Dan terus berdoa' dan memohon kepada Yang memiliki kekuasaan… <a>Baca Selengkapnya</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="box-footer text-center">
          <a href="#">
            Lihat Semua Berita Dakwah
          </a>
        </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Jadwal Kajian</h2>&nbsp;&nbsp;<span class="badge badge-success" style="color: white">20</span> 
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <ul class="messages">
              <li>
                <img src="{{ url('images') }}/img.jpg" class="avatar" alt="Avatar">
                <div class="message_date">
                  <h5 class="date text-info">24 Februari 2018</h5>
                </div>
                <div class="message_wrapper">
                  <h4 class="heading">Ustadz Abu Nida Fatahullah, Lc</h4>
                  <blockquote class="message"><h5>Ibu Rumah Tangga Tapi Berlimpah Pahala – 10 Faktor Dilipat-gandakan Pahala Sebuah Kebaikan</h5></blockquote>
                  <span class="label label-primary" style="color: white">Jakarta</span> 
                  <br />
                  <p class="url">
                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                    <a href="#"><i class="fa fa-paperclip"></i> Jadwal dan Lokasi.doc </a>
                  </p>
                </div>
              </li>
              <li>
                <img src="{{ url('images') }}/img.jpg" class="avatar" alt="Avatar">
                <div class="message_date">
                  <h5 class="date text-info">01 Maret 2018</h5>
                </div>
                <div class="message_wrapper">
                  <h4 class="heading">Ustadz DR. Firanda Andirja, MA</h4>
                  <blockquote class="message"><h5>Mendulang Faidah Di Balik Dari Perang Uhud</h5></blockquote>
                  <span class="label label-primary" style="color: white">Bandung</span> 
                  <br />
                  <p class="url">
                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                    <a href="#"><i class="fa fa-paperclip"></i> Jadwal dan Lokasi.doc </a>
                  </p>
                </div>
              </li>
              <li>
                <img src="{{ url('images') }}/img.jpg" class="avatar" alt="Avatar">
                <div class="message_date">
                  <h5 class="date text-info">15 Maret 2018</h5>
                </div>
                <div class="message_wrapper">
                  <h4 class="heading">Ustadz Azhar Khalid bin Seff, MA</h4>
                  <blockquote class="message"><h5>Keutamaan dan Sifat Sholat Nabi Shallallahu ‘Alayhi Wasallam</h5></blockquote>
                  <span class="label label-primary" style="color: white">Jambi</span> 
                  <br />
                  <p class="url">
                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                    <a href="#"><i class="fa fa-paperclip"></i> Jadwal dan Lokasi.doc </a>
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <div class="box-footer text-center">
          <a href="#">
            Lihat Semua Jadwal Kajian
          </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2>Berita Dakwah Headline</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <article class="media event">
              <a class="pull-left date">
                <p class="month">Januari</p>
                <p class="day">13</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Hadits Ke-11 Tentang Aqidah: Orang Yang Masuk Surga Tanpa Hisab dan Adzab</a>
                <p>Ustadz Fuad Baraba Lc.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">Januari</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Diharamkan Menyebarkan Video Praktek LGBT</a>
                <p>Ustadz Ahmad Zainuddin Lc.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">Februari</p>
                <p class="day">09</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dua Nikmat yang Kebanyakan Manusia Tertipu dengannya</a>
                <p>Ustadz Mahfudz Umry, Lc.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">Maret</p>
                <p class="day">12</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Allah Pasti Tahu...</a>
                <p>Ustadz DR Firanda Andirja, MA.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Berlemah Lembutlah dan Jangan Marah</a>
                <p>Ustadz Dr. Syafiq Basalamah.</p>
              </div>
            </article>
          </div>
          <div class="box-footer text-center">
            <a class="btn btn-primary btn-xs" href="#">
              Lihat Semua Berita Dakwah
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2>Berita Dakwah Terpopuler</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <article class="media event">
              <a class="pull-left date">
                <p class="month">Februari</p>
                <p class="day">3</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Melaksanakan Sholat Subuh, Dalam Jaminan Allah.</a>
                <p>Ustadz Dr. Syafiq Basalamah.</p>
                <span class="label label-primary" style="color: white">153 orang yang melihat</span> 
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">Januari</p>
                <p class="day">3</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Musibah Menghapus Dosa.</a>
                <p>Ustadz Dr. Syafiq Basalamah.</p>
                <span class="label label-primary" style="color: white">120 orang yang melihat</span> 
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">Januari</p>
                <p class="day">3</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Istri Dari Tulang Rusuk, Yang Ada di Samping Suami.</a>
                <p>Ustadz Dr. Syafiq Basalamah.</p>
                <span class="label label-primary" style="color: white">99 orang yang melihat</span> 
              </div>
            </article>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2>Pengguna</h2>&nbsp;&nbsp;<span class="badge badge-success" style="color: white">2516</span>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <ul class="list-unstyled msg_list">
              <li>
                <a>
                  <span class="image">
                    <img src="{{ url('images') }}/img.jpg" alt="img" />
                  </span>
                  <span>
                    <span>Bayu Widia Santoso</span>
                    <span class="time">12 April 2012</span>
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image">
                    <img src="{{ url('images') }}/img.jpg" alt="img" />
                  </span>
                  <span>
                    <span>Alief Rizkian</span>
                    <span class="time">05 Maret 2011</span>
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image">
                    <img src="{{ url('images') }}/img.jpg" alt="img" />
                  </span>
                  <span>
                    <span>Esa Amalia</span>
                    <span class="time">23 Maret 2014</span>
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image">
                    <img src="{{ url('images') }}/img.jpg" alt="img" />
                  </span>
                  <span>
                    <span>Rahima Zakia</span>
                    <span class="time">25 September 2017</span>
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image">
                    <img src="{{ url('images') }}/img.jpg" alt="img" />
                  </span>
                  <span>
                    <span>Iswahyudi</span>
                    <span class="time">11 Februari 2009</span>
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image">
                    <img src="{{ url('images') }}/img.jpg" alt="img" />
                  </span>
                  <span>
                    <span>Aditya Nugraha</span>
                    <span class="time">23 Oktober 2014</span>
                  </span>
                </a>
              </li>
            </ul>
          </div>
          <div class="box-footer text-center">
            <a class="btn btn-primary btn-xs" href="#">
              Lihat Semua Pengguna
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <!-- /page content -->
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

@endsection
