<div class="alert alert-info">
  <p>Hai <strong>{{ Session()->get('nama') }}</strong>, Selamat datang di Halaman Dashboard Administrator</p>
</div>
<hr>
<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Artikel &amp; Berita</span>
        <span class="info-box-number">
          <?php 
          $berita = DB::table('berita')->where('jenis_berita','Berita')->get(); 
          echo $berita->count();
          ?>
          <small>Sudah dibuat</small>
        </span>
      </div>
    </div>
  </div>

  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

<div class="info-box-content">
  <span class="info-box-text">
    Staff 
  </span>
  <span class="info-box-number">
  <?php 
    $staff = DB::table('staff')->get(); 
    echo $staff->count();
    ?>
    <small>Orang</small>
  </span>
</div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-image"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Galeri</span>
        <span class="info-box-number">
        	<?php 
          $galeri = DB::table('galeri')->get(); 
          echo $galeri->count();
          ?>
          <small>Gambar</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  </div>
</div>
