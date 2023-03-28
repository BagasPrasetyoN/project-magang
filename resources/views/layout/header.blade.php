<?php 
$site_config = DB::table('konfigurasi')->first();
?>
<div class="wrapper home3">
   <!--Header Start-->
   <header class="header-style-3 wf100">

      <div class="h3-logo-row"style="background-color:#00923F;">
         <div class="container">
            <div class="row">
               <div class="m-auto">
                  <div class="logo text-center" ><a href="{{ asset('/') }}"><img src="{{ asset('assets/upload/image/'.$site_config->logo) }}" alt="{{ $site_config->namaweb }}"  style="max-height: 80px; width: auto;"></a></div>
               </div>
            </div>
         </div>
      </div><div class="navrow">
<div class="container">