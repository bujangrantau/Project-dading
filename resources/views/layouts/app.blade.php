<!doctype html>
<html lang="en">
  <head>
    <!-- icon -->
    <link rel="shortcut icon" href="{{'/img/logo.png'}}" type="image/x-icon" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  @yield('header')
    <title>PT. Risky Putra Kasih</title>
  </head>
  <body>
    <div class="header-top d-none d-lg-block py-3">
      <div class="container">
        <div class="row text-white pt">
          <div class="col-lg-5 ">
            Selamat Datang di PT. Risky Putra Kasih
          </div>
          <div class="col-lg-7 text-right pt">
            Hubungi Kami : <i class="far fa-envelope"></i> pt.riskyputrakasih@yahoo.com  
            <i class="fas fa-phone-alt"></i> (0341)3041063 - Bebas Pulsa
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="{{'/img/navbar/logo.png'}}" alt="PT. RISKY PUTRA KASIH"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-3" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item @if($active ==='home') active @endif">
              <a class="nav-link text-white" href="/">Beranda</a>
            </li>
            <li class="nav-item @if($active ==='about') active @endif">
              <a class="nav-link text-white" href="/about">Tentang Kami</a>
            </li>
            <li class="nav-item @if($active ==='product') active @endif dropdown">
              <a class="nav-link text-white" href="/products">Produk</a>
              <div class="dropdown-menu drop-hover py-0 border-dark border-2">
                  <a class="dropdown-item text-white py-2" href="/products/category/1">Medical Equipment</a>
                  <a class="dropdown-item text-white py-2" href="/products/category/2">Bahan Habis Pakai</a>
                  <a class="dropdown-item text-white py-2" href="/products/category/3">Alat dan Bahan LAB</a>
                  <a class="dropdown-item text-white py-2" href="/products/category/4">Sparepart Alkes</a>
              </div>
            </li>
            <li class="nav-item @if($active ==='service') active @endif dropdown">
              <a class="nav-link text-white" href="/service">Service</a>
              <div class="dropdown-menu drop-hover py-0 border-dark border-2">
                  <a class="dropdown-item text-white py-2" href="#">Alkes Electric</a>
                  <a class="dropdown-item text-white py-2" href="#">Alkes Mekanik</a>
              </div>
            </li>
            <li class="nav-item @if($active ==='career') active @endif">
              <a class="nav-link text-white" href="/recruitment/carerr">Karir</a>
            </li>
            @if (Auth::check())
            <li class="nav-item dropdown @if($active ==='admin') active @endif">
              <a class="nav-link text-white" href="/admin/products">
                Admin
              </a>
              <div class="dropdown-menu drop-hover py-0 border-dark border-2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-white py-2" href="/admin/products">Produk</a>
                <a class="dropdown-item text-white py-2" href="/admin/setting">Pengaturan</a>
                <div class="dropdown-divider my-0"></div>
                <form method="POST" action="{{ route('logout') }}">
                  {{ csrf_field() }}
                  <button class="dropdown-item text-white py-2" href="#">Logout</button>
                </form>
              </div>
            </li>
            
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <div id="app">
      @yield('content')
      <!-- scroll up -->
      <button class="btn btn-main scroll-top" data-scroll="up" type="button" title="Go Up"><i class="fa fa-chevron-up"></i>
    </div>

    <!-- NAVBAR -->
    <div class="container-flex pt-md-5 pr-md-5 pb-4 pl-md-5 bg-dark">
      <div class="container text-light pt-5">
        <div class="row">
          <div class="col-lg-4">
            <h4 class="col-header mb-5">Tentang Kami</h4>
            <p class="text-low">PT.RISKY PUTRA KASIH yang bergerak dalam Bidang Service Alat Kesehatan. Baik Mechanical maupun Electrical (Medis dan Non Medis). Kami Juga Menyediakan berbagai macam Spare Part untuk Alat-Alat Kesehatan. Selain itu kami juga menjual Alat-Alat Kesehatan atau Medical Equipment misalnya : Patient Monitor (Pasien Monitor), Alat USG, Suction Pump, Bed Pasien, dll. Medical Equipment atau Alat-Alat Kesehatan yang kami sediakan Baru maupun bekas (Second) namun dengan kondisi normal. Waktu Pengerjaan Untuk Service Alat-Alat Kesehatan Electrical yang kami butuhkan satu minggu.</p>
          </div>
          <div class="col-lg-4">
            <h4 class="col-header mb-5">Link</h4>
            <div class="row links">
              <div class="col-lg-7">
                <ul>
                  <li><a class="text-low" href="/">Beranda</a></li>
                  <li><a class="text-low" href="/about">Tentang Kami</a></li>
                </ul>
              </div>
              <div class="col-lg-5">
                <ul>
                  <li><a class="text-low" href="/products">Produk</a></li>
                  <li><a class="text-low" href="/recruitment/register">Karir</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h4 class="col-header mb-5">Mendaftar Newsletter</h4>
            <p class="text-low">Tetap update dengan berita terbaru dari PT. Risky Putra Kasih.</p>
              <form>
                <div class="form-group">
                  <label for="username">Nama (Perusahaan / Institusi / Perorangan)</label>
                  <input type="text" class="form-control outline-0" id="username">
                </div>
                <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input type="email" class="form-control outline-0" id="email">
                </div>
                <button type="submit" class="btn btn-main text-light mt-2 outline-0 border-0">Submit</button>
              </form>
          </div>
        </div>
      </div>
      <div class="container text-light pt-4 border-top border-low border-3">
        <h6 class="text-low">Copyright © RISKY PUTRA KASIH, PT.</h6>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('js/app.js')}}"></script>
    <script>
      $(document).ready(function(){
        $(".dropdown, .btn-group").hover(function(){
          var dropdownMenu = $(this).children(".dropdown-menu");
          if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
          }
        });
      });

      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 300) {
            $('.scroll-top').fadeIn();
          } else {
            $('.scroll-top').fadeOut();
          }
        });

        $('.scroll-top').click(function () {
          $("html, body").animate({
            scrollTop: 0
          }, 500);
            return false;
        });

      });
    </script>
    @yield('footer')
  </body>
</html>