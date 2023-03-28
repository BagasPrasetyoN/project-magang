<?php 
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();

?>
<!--Footer Start-->
<footer class="h3footer wf100 pt-0">
   <div class="container">
      <div class="row p-5">
         <!--Footer Widget Start-->
         <div class="col-md-4 col-sm-6 align-self-center">
         <a href="{{ asset('/') }}"><img src="{{ asset('assets/upload/image/'.$site_config->logo) }}" alt="" style="max-height: 80px; width: auto;"></a>
         </div>
         <!--Footer Widget End--> 
         <!--Footer Widget Start-->
         <div class="col-md-4 col-sm-12 ml-auto">
            <div class="footer-widget">
               <h3>{{ $site_config->namaweb }}</h3>
               <p>{{ $site_config->deskripsi }}</p>
               <hr style="border-top: solid thin #EEE;padding:0; margin: 5px 0;">
               <p><strong>Our office:</strong>
               <?php echo nl2br($site_config->alamat) ?>
               <br><strong>Phone:</strong> {{ $site_config->telepon }}
               <br><strong>Email:</strong> {{ $site_config->email }}
               <div class="footer-social">
                  <a href="https://api.whatsapp.com/send?phone=6285784786525&text=Permisi%20saya%20ingin%20bertanya%20mengenai"><i class="fab fa-whatsapp"></i></a> 
                  <a href="https://www.facebook.com/people/Kecamatan-Lowokwaru/100007392405137/"><i class="fab fa-facebook-f"></i></a> 
                  <a href="https://twitter.com/kec_lowokwaru"><i class="fab fa-twitter"></i></a> 
                  <a href="https://www.instagram.com/kec_lowokwaru/"><i class="fab fa-instagram"></i></a> 
                  <a href="https://www.youtube.com/channel/UC0f8UDVStrdtiOCnwP5HHnA"><i class="fab fa-youtube"></i></a> </div>
            </div>
         </div>
         <!--Footer Widget End--> 
      </div>
   </div>
</footer>
<!--Footer End--> 
</div>
<!--   JS Files Start  --> 
<script src="{{ asset('assets/aws/js/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery-migrate-1.4.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/popper.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery.prettyPhoto.js') }}"></script> 
<script src="{{ asset('assets/aws/js/isotope.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/slick.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/custom.js') }}"></script>
</body>
</html>