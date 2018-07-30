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
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<span class="flow-text"><b>Foto Kegiatan</b></span>
				<hr class="hr-gbawah">
			</div>
			<div class="col s12 m12 l12 ">	
				<p align="left">
					<div class="row">						
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/1.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/2.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/3.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/15.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/6.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/16.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/7.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/8.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/9.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/10.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/11.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/12.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/13.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
						<div class="col s12 m6 l4 ">
							<img src="<?php echo base_url('assets/image/kegiatan/14.jpg');?>" width="280" height="180">
							<br>
							<span style="font-size: 0.7rem">Kegiatan SMK Nuswan...</span>
						</div>
					</div>															
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