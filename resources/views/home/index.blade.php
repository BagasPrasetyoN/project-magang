<!--Slider Start-->

<section id="home-slider" class="owl-carousel owl-theme wf100">
   @php
      date_default_timezone_set("Asia/Jakarta");
      $waktu = new DateTime();
      $jam = (int)$waktu->format('H');
      $hari = $waktu->format('l');
   @endphp
   
   <?php foreach($slider as $slider) { ?>
   <div class="item">
      @if($hari === 'Tuesday')
         @if($jam >= 8 && $jam <= 13)
            <div class="jatim" style="background-color: #CD0E0A; padding: 10px; text-align:center">
               <h6 style="margin:0; color:rgb(255, 255, 255)">Pelayanan Bank Jatim di Kecamatan Lowokwaru Sedang Buka</h6>
            </div>
         @else
            <div class="jatim" style="background-color: #CD0E0A; padding: 10px; text-align:center">
               <h6 style="margin:0; color:rgb(255, 255, 255)">Pelayanan Bank Jatim di Kecamatan Lowokwaru Buka Setiap Hari Selasa Pukul 08.00 - 13.00</h6>
            </div>
         @endif
      @else
         <div class="jatim" style="background-color: #CD0E0A; padding: 10px; text-align:center">
            <h6 style="margin:0; color:rgb(255, 255, 255)">Pelayanan Bank Jatim di Kecamatan Lowokwaru Buka Setiap Hari Selasa Pukul 08.00 - 13.00</h6>
         </div>
      @endif
       
      <div class="slider-caption h3slider">
         <div class="container">
            <?php if($slider->status_text=="Ya") { ?>
            <strong>{{ strip_tags($slider->isi) }}</strong>
            <h1>{{ $slider->judul_galeri }}</h1>
            <?php } ?>
         </div>
      </div>
      <img src="{{ asset('assets/upload/image/'.$slider->gambar) }}" alt=""> 
   </div>
   <?php } ?>
</section>
<!--Slider End--> 
<!--Service Area Start-->
<section class="donation-join wf100">
   <div class="container text-center">
      <div class="row">
         <?php foreach($terupdate as $terupdate) { ?>
            <div class="col-md-4 col-sm-12">
               <br>
               <img src="{{ asset('assets/upload/image/thumbs/'.$terupdate->gambar) }}" alt="{{ $terupdate->judul_berita }}" class="img img-thumbnail img-fluid">
               <div class="volbox">
                  <h6>{{ $terupdate->judul_berita }}</h6>
                  <p>{{ $terupdate->keywords }}</p>
                  
               </div>
            </div>
            <!--box  end--> 
         <?php } ?>
         
      </div>
   </div>
</section>
<!--Service Area End--> 

<!--Card Slider Start-->
<section class="testimonials-section bg-white wf100 p80">
   <div class="container-fluid">
      <div class="row">
         <div class="section-title-2 m-auto">
            <h2>#Lowokwaru</h2>
         </div>
         <div class="col-md-12 col-sm-12" style="background-color: #00923F; padding:30px 50px">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active d-flex">
                     <div class="row justify-content-center p-5" style="background-color:white">
                        <div class="col-md-4 col-sm-12">
                           <img class="d-block" src="assets/img/img-slider.png" alt="First slide" style="width: 100%">
                        </div>

                        <div class="col-md-6 col-sm-12 align-self-center">
                           <h5 class="font-weight-normal " style="text-align: justify; font-size:20px">Kampung Warna Warni Malang atau yang dikenal juga dengan nama Kampung Jodipan ini termasuk kampung wisata pertama di Kota Malang. Setiap sudut kampung ini dihiasi dengan berbagai warna cerah dan terang yang mampu menarik perhatian.</h5>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item d-flex">
                  <div class="row justify-content-center p-5" style="background-color:white">
                        <div class="col-md-4 col-sm-12">
                           <img class="d-block" src="assets/img/img-slider2.png" alt="First slide" style="width: 100%">
                        </div>

                        <div class="col-md-6 col-sm-12 align-self-center">
                           <h5 class="font-weight-normal " style="text-align: justify; font-size:20px">Taman Alun-alun Tugu Kota Malang merupakan salah satu simbol landmark Kota Malang, Jawa Timur. </h5>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item d-flex">
                  <div class="row justify-content-center p-5" style="background-color:white">
                        <div class="col-md-4 col-sm-12">
                           <img class="d-block" src="assets/img/img-slider3.png" alt="First slide" style="width: 100%">
                        </div>

                        <div class="col-md-6 col-sm-12 align-self-center">
                           <h5 class="font-weight-normal " style="text-align: justify; font-size:20px">Alun-alun ini juga dilengkapi dengan lampu-lampu cantik yang bersinar di setiap malam. Wisatawan yang berkunjung bisa menikmatinya dengan hanya sekadar duduk-duduk santai, atau memanfaatkan indahnya alun-alun untuk berfoto </h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Card Slider End--> 

{{-- Berita Awal --}}
<section class="h2-news wf100 p80 blog">
   <div class="blog-grid">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="section-title-2">
                  <h5>Baca update kami</h5>
                  <h2>Berita & Updates</h2>
               </div>
            </div>
            <div class="col-md-6"> <a href="{{ asset('berita') }}" class="view-more">Lihat berita lainnya</a> </div>
            <div class="col-md-12">
               <hr>
            </div>
         </div>
         <div class="row" style="background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 5px;">
            <?php foreach($berita as $berita) { ?>
            <!--Blog Small Post Start-->
            <div class="col-md-4 col-sm-6" >
               <div class="blog-post">
                  <div class="blog-thumb"> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-link"></i></a> <img src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" alt="><?php  echo $berita->judul_berita ?>"> </div>
                  <div class="post-txt">
                     <h5><a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a></h5>
                     <ul class="post-meta">
                        <li> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-calendar-alt"></i> {{ tanggal('tanggal_id',$berita->tanggal_post)}}</a> </li>
                        <li> <a href="{{ asset('berita/kategori/'.$berita->slug_berita) }}"><i class="fas fa-sitemap"></i> {{ $berita->nama_kategori }}</a> </li>
                     </ul>
                     <p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end='...') ?></p>
                     <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="read-post">Baca detail</a>
                  </div>
               </div>
            </div>
            <!--Blog Small Post End--> 
            <?php } ?>
         </div>
         
      </div>
   </div>
</section>