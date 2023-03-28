<?php 
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();
$nav_profil  = $myprofil->nav_profil();
$nav_layanan = $myprofil->nav_layanan();
$nav_berita  = $myprofil->nav_berita();
$nav_terjadi  = $myprofil->nav_terjadi();

?>
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Beranda</a> </li>
      <li class="nav-item"><a class="nav-link" href="{{ asset('keclowokwaru') }}">Profil</a> </li>
     
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pelayanan <span class="pull-right"><i class="fas fa-caret-down"></i></span></a>
               <ul class="dropdown-menu" >
                  <li><a href="{{ url('/pelayanan') }}">Pelayanan Administrasi Masyarakat</a></li>
                  <li><a href="https://sambat.malangkota.go.id/">Pengaduan Masyarakat</a></li>
               </ul>
      </li>
      
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kelurahan <span class="pull-right"><i class="fas fa-caret-down"></i></span></a>
         <ul class="dropdown-menu" >            
            <li><a href="https://keltunggulwulung.malangkota.go.id/"> Tunggulwulung</a></li>
            <li><a href="https://kelmerjosari.malangkota.go.id/"> Merjosari</a></li>
            <li><a href="https://keltlogomas.malangkota.go.id/"> Tlogomas</a></li>
            <li><a href="https://keldinoyo.malangkota.go.id/"> Dinoyo</a></li>
            <li><a href="http://kelsumbersari.malangkota.go.id/"> Sumbersari</a></li>
            <li><a href="https://kelketawanggede.malangkota.go.id/"> Ketawanggede</a></li>
            <li><a href="https://keljatimulyo.malangkota.go.id/"> Jatimulyo</a></li>
            <li><a href="http://keltunjungsekar.malangkota.go.id/"> Tunjungsekar</a></li>
            <li><a href="https://kelmojolangu.malangkota.go.id/"> Mojolangu</a></li>
            <li><a href="https://keltulusrejo.malangkota.go.id/"> Tulusrejo</a></li>
            <li><a href="http://kellowokwaru.malangkota.go.id/"> Lowokwaru</a></li>
            <li><a href="https://keltasikmadu.malangkota.go.id/"> Tasikmadu</a></li>
         </ul>
      </li>
      <li class="nav-item"> <a class="nav-link" href="{{ asset('galeri') }}">Galeri</a> </li>
      <li class="nav-item"> <a class="nav-link" href="{{ asset('kontak') }}">Kontak</a> </li>
   </ul>
</div>
</nav>
</div>
</div>
</div>
</div>
</header>
<!--Header End-->    