{{-- <?php 
$bg   = DB::table('heading')->where('halaman','Kontak')->orderBy('id_heading','DESC')->first();
 ?> --}}

<section class="wf100 p80 inner-header mb-5">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>

<section class="pelayanan">
   <div class="container">
      <center>
      <div class="pam" style="margin-bottom:50px"> 
         <h3>Pelayanan Administrasi Masyarakat</h3>
         <h3>Secara Offline di Kantor Kecamatan Lowokwaru</h3>
         {{-- ahli waris --}}
         <div class="collaps-data" style="margin-top: 50px">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ahliWaris" aria-expanded="false" aria-controls="ahliWaris" style="background-color: #FBBC04; border:none; width:70%; padding:12px 0; border-radius:10px; margin-bottom:20px">Surat Ahli Waris
            </button>
         
            <div class="collapse" id="ahliWaris">
               <div class="card card-body" style="width: 70%">
                  <p style="text-align: left">Persyaratan : </p>
                  <ul style="text-align: left">
                     <li>Surat Kematian</li>
                     <li>FC KK, KTP (Para Ahli Waris dan Saksi)</li>
                     <li>FC Akta Kelahiran</li>
                     <li>Foto Bukti TTD Dokumen</li>
                  </ul>
               </div>
            </div>
         </div>

         {{-- rekom nikah --}}
         <div class="collaps-data">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#rekomNikah" aria-expanded="false" aria-controls="rekomNikah" style="background-color: #FBBC04; border:none; width:70%; padding:12px 0; border-radius:10px; margin-bottom:20px">Rekomendasi Nikah
            </button>
         
            <div class="collapse" id="rekomNikah">
               <div class="card card-body" style="width: 70%">
                  <p style="text-align: left">Persyaratan : </p>
                  <ul style="text-align: left">
                     <li>FC KK, KTP (Masing-masing 1 lembar)</li>
                     <li>Foto 3x4</li>
                  </ul>
               </div>
            </div>
         </div>

         {{-- tunjangan keluarga --}}
         <div class="collaps-data">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#tunjangan" aria-expanded="false" aria-controls="tunjangan" style="background-color: #FBBC04; border:none; width:70%; padding:12px 0; border-radius:10px; margin-bottom:20px">Tunjangan Keluarga
            </button>
         
            <div class="collapse" id="tunjangan">
               <div class="card card-body" style="width: 70%">
                  <p style="text-align: left">Persyaratan : </p>
                  <ul style="text-align: left">
                     <li>FC KK, KTP (Masing-masing 1 lembar)</li>
                  </ul>
               </div>
            </div>
         </div>
         
         {{-- keterangan tidak mampu --}}
         <div class="collaps-data">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#tidakMampu" aria-expanded="false" aria-controls="tidakMampu" style="background-color: #FBBC04; border:none; width:70%; padding:12px 0; border-radius:10px; margin-bottom:20px">Keterangan Tidak Mampu
            </button>
         
            <div class="collapse" id="tidakMampu">
               <div class="card card-body" style="width: 70%">
                  <p style="text-align: left">Persyaratan : </p>
                  <ul style="text-align: left">
                     <li>FC KK, KTP (Masing-masing 1 lembar)</li>
                     <li>Surat Model C</li>
                  </ul>
               </div>
            </div>
         </div>

         {{-- pendaftaran angkatan --}}
         <div class="collaps-data">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#pendaftaranAngkatan" aria-expanded="false" aria-controls="pendaftaranAngkatan" style="background-color: #FBBC04; border:none; width:70%; padding:12px 0; border-radius:10px; margin-bottom:20px">Pendaftaran Angkatan
            </button>
         
            <div class="collapse" id="pendaftaranAngkatan">
               <div class="card card-body" style="width: 70%">
                  <p style="text-align: left">Persyaratan : </p>
                  <ul>
                     <li style="text-align: left">FC KK, KTP (Masing-masing 1 lembar)</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="card" style="background-color: #00923F; height: 100px; width: 80%;">
                  <h6 style="color: white">Jam Pelayanan</h6>
                  <table style="width: 30%; margin:auto; font-weight:bold; color: white">
                     <tr>
                        <td>Senin - Kamis</td>
                        <td style="text-align: right">: 08.00 - 15.30</td>
                     </tr>
                     <tr>
                        <td>Jumat</td>
                        <td style="text-align: right">: 08.00 - 14.30</td>
                     </tr>
                  </table>
               </div>
            </div>
            <div class="carousel-item">
               @php
                     date_default_timezone_set("Asia/Jakarta");
                     $waktu = new DateTime();
                     $jam = (int)$waktu->format('H');
                     $hari = $waktu->format('l');
                  @endphp
               @if($hari !== 'Saturday' && $hari !== 'Sunday')
                  @if($hari === 'Friday')
                     @if($jam >= 8 && $jam <= 15)
                        <div class="card" style="background-color: #00923F; height: 100px; width: 80%;">
                           <h5 style="color:white; line-height:100px">Pelayanan Sedang Buka</h5>
                        </div>
                     @else
                        <div class="card" style="background-color: red; height: 100px; width: 80%;">
                        <h5 style="color:white; line-height:100px">Pelayanan Sedang Tutup</h5>
                        </div>
                     @endif
                  @elseif($jam >= 8 && $jam <= 16)
                     <div class="card" style="background-color: #00923F; height: 100px; width: 80%;">
                           <h5 style="color:white; line-height:100px">Pelayanan Sedang Buka</h5>
                        </div>
                  @else
                     <div class="card" style="background-color: red; height: 100px; width: 80%;">
                        <h5 style="color:white; line-height:100px">Pelayanan Sedang Tutup</h5>
                        </div>
                  @endif
               @else
                  <div class="card" style="background-color: red; height: 100px; width: 80%;">
                        <h5 style="color:white; line-height:100px">Pelayanan Sedang Tutup</h5>
                        </div>
               @endif  
            </div>
            <div class="carousel-item">
               <div class="card" style="background-color: #00923F; height: 100px; width: 80%">
                  <h5 style="color:white; line-height:100px">TIDAK DIPUNGUT BIAYA / GRATIS</h5>
            </div>
            </div>
         </div>
      </div>
      </center>
   </div>
</section>