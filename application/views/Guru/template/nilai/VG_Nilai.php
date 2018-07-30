
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/image/apple-icon.png') ?>" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/image/favicon.png') ?>" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penilaian - SMK Nuswantoro.</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url('assets/css/material-dashboard.css?v=1.2.0') ?>" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css') ?>" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <?php $this->load->view('Guru/common/header'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><b>Penilaian Siswa</b></h4>
                            <a href="<?php echo base_url();?>/C_Nilai/add"><p align="right"><i title="Tambah Data" style="font-size: 4.5rem;" class="large material-icons">add_circle</i></p></a>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>NIS</th>
                                    <th>Matakuliah</th>
                                    <th>Ulangan</th>
                                    <th>Tugas</th>
                                    <th>UTS</th>
                                    <th>UAS</th>
                                    <th align="center"><b>Nilai Akhir</b></th>
                                    <th align="center"><b></b></th>
                                </thead>
                                <?php foreach ($nilai as $n) {?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $n->nama;?></td>     
                                        <td><?php echo $n->nm_mapel;?></td>
                                        <td><?php echo $n->nilai_ulangan;?></td>
                                        <td><?php echo $n->nilai_tugas;?></td>
                                        <td><?php echo $n->UTS;?></td>
                                        <td><?php echo $n->UAS;?></td>
                                        <td align="center"><b><?php echo $n->nilai_akhir; ?></b></td>
                                        <td>
                                            <?php echo anchor('C_Nilai/update'.$n->id,'<i title="Update" class="material-icons">edit</i>'); ?>
                                            <?php echo anchor('C_Nilai/delete/'.$n->id,'<i title="Delete" class="material-icons">close</i>'); ?> 
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Guru/common/footer'); ?>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/material.min.js') ?>" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url('assets/js/chartist.min.js') ?>"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url('assets/js/arrive.min.js') ?>"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url('assets/js/perfect-scrollbar.jquery.min.js') ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/js/bootstrap-notify.js') ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url('assets/js/material-dashboard.js?v=1.2.0') ?>"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/js/demo.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

      // Or with jQuery

    $(document).ready(function(){
        $('select').formSelect();
    });

</script>
</html>