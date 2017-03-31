@extends('layouts.landing')

@section('content')

<div class="content">
  <h1 class="content__heading">Selamat Datang di Appron</h1>
  <p class="content__teaser">Menentukan Koki Dan Menu Lebih Mudah !</p>
  <a href="{{ url('makanan') }}" class="content__cta">Memasak Sekarang!</a>
</div><!--content-->

<video id="my-video" class="video" muted loop>
  <source src="{{ asset('assets') }}/video/bg.mp4" type="video/mp4">
  <source src="{{ asset('assets') }}/video/bg.ogv" type="video/ogg">
  <source src="{{ asset('assets') }}/video/bg.webm" type="video/webm">
</video><!--video-->

<script>
(function() {
  /**
   * Video element
   * @type {HTMLElement}
   */
  var video = document.getElementById("my-video");

  /**
   * Check if video can play, and play it
   */
  video.addEventListener( "canplay", function() {
    video.play();
  });
})();
</script>

<div class="">
  <div class="col-lg-12 header">
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-fluid">
        <div class="row">
          <div class="arrow-up">
          </div>
        </div>
      </div>
      <div class="box-content">
        <div class="container-fluid">
          <div class="row">
            <center>
              <div class="col-lg-12 title">
                <h1>Ayo Bersama Appron</h1>
              </div>
            </center>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <center>
              <div class="col-sm-4 sub-content">
                <img src="{{asset('assets')}}/img/Hat.png" class="imgbox">
                <h3>Menjadi Chef</h3>
                <p>Memasak makanan atau minuman yang lezat menjadi kenyataan, dengan resep-resep yang lengkap dan terus berkembang bersama komunitas Appron</p>
              </div>
              <div class="col-sm-4 sub-content">
                <img src="{{asset('assets')}}/img/Reputation.png" class="imgbox">
                <h3>Membangun Reputasi</h3>
                <p>Jadikan Appron sebagai inti karir Memasak mu, dengan menjadikan Appron sebagai portofolio kuliner mu tingkatkan kesempatan mu untuk bekerja!</p>
              </div>
              <div class="col-sm-4 sub-content">
                <img src="{{asset('assets')}}/img/Share.png" class="imgbox">
                <h3>Berbagi Bersama</h3>
                <p>Mari kita berkembang bersama dengan berbagi dan membuat resep masakan yang kedepannya akan pasti berguna untuk karir mu</p>
              </div>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid parallax1">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 title2">
            <h1>Appron Sebagai Wadah Kuliner</h1>
            <h4>Dari Berbagi, Portofolio, Hingga Belajar Memasak</h4>
            <p>Appron adalah wadah baru bagi para chef dan kalian yang memiliki passion dalam kuliner, jelajahi Appron dan berkembang di dalamnya, selain itu kalian juga dapat banyak belajar di sini mulai dari cara memasak, teknik, dan banyak lagi.</p>
            <center><a href="#">Ikut Sekarang!</a></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="box-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 img-content">
              <img src="{{ asset('assets') }}/img/1.jpg">
            </div>
            <div class="col-md-6 text-content">
              <h1>Steak Daging</h1>
              <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo...</h4>
              <center>

              <a href="#" class="btn-text-content2">Cari Resep Lain!</a>
              <a href="#" class="btn-text-content">Lihat Selengkapnya</a>

              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid parallax2">
  <div class="row">
    <div class="col-lg-12 last-content">
      <center>
        <h1>Ayo Tunggu Apalagi Mulai Bergabung Sekarang !</h1>
        <a href="#" class="btn-text-content">Mulai Memasak!</a>
      </center>
    </div>
  </div>
</div>

@endsection
