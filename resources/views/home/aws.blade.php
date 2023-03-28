<?php 
$bg   = DB::table('heading')->where('halaman','AWS')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: bottom center;">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>
<!--Inner Header End--> 
<!--About Start-->
<section class="wf100 about">
   <!--About Txt Video Start-->
   <div class="about-video-section wf100">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="about-text">
                  <h2 style="color: #00923F">Visi dan Misi</h2>
                  <p style="text-align: justify">
                     "Mewujudkan Pelayanan Prima yang Akuntabel" 
                  </p>
                  <br>
                  <p style="text-align: justify">
                     1. Mewujudkan pelayanan masyarakat yang cepat, tepat dan akuntabel melalui tertib administrasi  <br> <br>
                     2. Mewujudkan peningkatan kinerja aparatur kecamatan dan kelurahan 
                  </p> <br><br><br>
                  <h2 style="color: #00923F">Tujuan dan Sasaran</h2>
                  <p>
                     <?php echo $site_config->tentang?>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php 
$bg2   = DB::table('heading')->where('halaman','Team')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p100 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg2->gambar) }}'); background-position: bottom center;">
   <div class="container text-center">
      <h1>{{ $bg2->judul_heading }}</h1>
   </div>
</section>
   <!--Causes Start-->
<section class="wf100 p30 events justify-content-center">
   <div class="event-grid-2">
      <div class="container">
         <div class="row text-center justify-content-md-center">
            <?php foreach($kategori_staff as $kategori_staff)  
               $id_kategori_staff = $kategori_staff->id_kategori_staff;
               $staff    = DB::table('staff')->where(array('status_staff'=>'Ya','id_kategori_staff'=>$id_kategori_staff))->orderBy('urutan','ASC')->get();
               if($staff) {
               ?>
            <div class="col-lg-12">
               <div class="about-text">
             <h2 style="color: #00923F">{{ $kategori_staff->nama_kategori_staff }}</h2>
                  <br><br>
               </div>
            </div>
            <?php foreach($staff as $staff) { ?>
               <div class="col-md-5 col-sm-12">
                  <div class="card m-auto" style="width: 25rem;">
                     <img class="card-img-top" src="{{ asset('assets/upload/staff/'.$staff->gambar) }}" alt="Card image cap">
                     <div class="card-body text-center">
                        <p class="card-text font-weight-bold">{{ $staff->nama_staff }}</p>
                        <p>{{ $staff->pendidikan }}</p>
                        <p class="card-text font-weight-bold">{{ $staff->jabatan }}</p>
                     </div>
                  </div>
               </div>
            <!--Blog Post End--> 
            <?php } ?>
            <?php } ?>

            <div class="col-lg-12" style="margin-top: 100px">
               <button class="btn btn-success mb-5" style="background-color: #00923F; padding:15px 20px; border:none; border-radius: 8px">
                  <a href="{{ url('/struktur_organisasi') }}" style="color:white; text-decoration:none">Lebih Detail</a>
               </button>
            </div>

      </div>
   </div>
</section>
<!--Causes End--> 
<div class="clearfix"><br><br></div>
