<!DOCTYPE html>
<html>
<head>
	<title> Beranda - SMK Nuswantoro </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=" <?php echo base_url('assets/css/materialize.css') ?>"  media="screen,projection"/> 
    <link type="text/css" rel="stylesheet" href="<?php base_url('assets/css/materialize-social.css') ?>"  media="screen,projection"/>     
    <!-- <link rel="icon" href="<?php base_url('assets/image/logo.ico') ?>" type="image/x-icon">  -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<?php $this->load->view('common/header'); ?>
<body>
<div class="slider">
  <ul class="slides">
      <li>
          <img class="img-responsive" src="<?php echo base_url('assets/image/slide/kegiatan.jpg'); ?>">
          <div class="caption center-align">
              <h3>SMK Nuswantoro.</h3>
              <h5>The World - Class Education Centery</h5>
          </div>
      </li>
      <li>
          <img class="img-responsive" src="<?php echo base_url('assets/image/slide/kegiatan-sekolah.jpg'); ?>">
          <div class="caption left-align">
              <h3></h3>
              <h5 class="light grey-text text-lighten-3"></h5>
          </div>
      </li>
      <li>
          <img class="img-responsive" src="<?php echo base_url('assets/image/slide/fasilitas-sekolah.jpg'); ?>">
          <div class="caption left-align">
              <h3></h3>
              <h5 class="light grey-text text-lighten-3"></h5>
          </div>
      </li>
  </ul>
</div>
<div class="container">
  <div class="row center">
    <div class="col s12 m12 l4 center">       
        <span class="flow-text "> <img src="<?php echo base_url('assets/image/artikel/ekskul.jpg');?>" width="270" height="170"> </span>
        <p class="grey-text text-darken-3 center">             
          6 Ekskul Jaman Sekolah Ini Terkesan Biasa, Tapi Nggak Nyangka Sekarang Bisa Jadi Sumber Pemasukanmu!
        </p>                      
      </div>
    <div class="col s12 m12 l4 center">       
        <span class="flow-text "> <img src="<?php echo base_url('assets/image/artikel/bersih-sehat.jpg');?>" width="270" height="170"> </span>
        <p class="grey-text text-darken-3 center">             
          Lingkungan Sekolah Budaya Bersih Sehat
        </p>                      
      </div>
    <div class="col s12 m12 l4 center">       
        <span class="flow-text "> <img src="<?php echo base_url('assets/image/artikel/IQ.jpg');?>" width="270" height="170"> </span>
        <p class="grey-text text-darken-3 center">             
          IQ Tinggi Tak Selalu Berarti Cerdas Luar Biasa. Ini 7 Fakta Tentang Tes IQ yang Harus Kamu Tahu
        </p>                      
      </div>
      <div class="col s12 m12 l4 center">       
        <span class="flow-text "> <img src="<?php echo base_url('assets/image/artikel/anak-desa.jpg');?>" width="270" height="170"> </span>
        <p class="grey-text text-darken-3 center">             
          Kenapa Anak Desa Lebih Berprestasi daripada Anak Kota
        </p>                      
      </div>
    <div class="col s12 m12 l4 center">       
        <span class="flow-text "> <img src="<?php echo base_url('assets/image/artikel/cara-belajar.jpg');?>" width="270" height="170"> </span>
        <p class="grey-text text-darken-3 center">             
          Belajar yang Efektif Itu Mudah, Asal Kamu Tahu Caranya
        </p>                      
      </div>
    <div class="col s12 m12 l4 center">       
        <span class="flow-text "> <img src="<?php echo base_url('assets/image/artikel/menuntut-ilmu.jpg');?>" width="270" height="170"> </span>
        <p class="grey-text text-darken-3 center">             
          Karena Menuntut Ilmu Itu Tidak Selalu Datang dari Guru, Anak Bisa Mendapatkan Ilmu dari Mana Saja
        </p>                      
      </div>
  </div>
</div>
</body>
<?php $this->load->view('common/footer'); ?>

<!--  Scripts-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/init.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
       $('.slider').slider({
          full_width: false,
          interval: 5000,
          transition: 900,
        });
     });

    $(".button-collapse").sideNav();
</script>
</html>