<?php 
if ($this->session->level==''){
    redirect(base_url());
}else{
  // $iden = $this->model_app->view_where('identitas',array('id_identitas'=>'1'))->row_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Analisis Media</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin_mu/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin_mu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin_mu/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'asset/adminlte/dist/css/adminlte.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin_mu/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin_mu/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">.checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }</style>
  <!--<script src="asset/ckeditor/ckeditor.js"></script>-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin_mu/plugins/daterangepicker/daterangepicker-bs3.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/admin_mu/plugins/daterangepicker/moment.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
</head>
<!-- <body class="" onload="window.print(),5000;"> -->
<body >

<!-- <div class=""> -->
  <!-- Navbar -->
  <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
    <?php //include "include/navbar.php"; ?>
  <!-- </nav> -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar elevation-4 sidebar-dark-success"> -->
    <?php //include "include/sidebar.php"; ?>
  <!-- </aside> -->

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class='breadcrumb float-sm-right'>
          <!-- <?php 
            if($this->uri->segment(2)!='home' AND $this->uri->segment(2)!=''){
              echo "<li class='breadcrumb-item'><a href='".base_url().$this->uri->segment(1)."'>Home</a></li>
                    <li class='breadcrumb-item active'>".$this->uri->segment(2)."</li>";
            }else{
              echo "<li class='breadcrumb-item'></li>";
            }
          ?> -->
          </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          
<?php 
  $number1 = $this->model_app->view('berita')->num_rows(); 
  $number2 = $this->model_app->view('halamanstatis')->num_rows(); 
  $number3 = $this->model_app->view('agenda')->num_rows(); 
  $number4 = $this->model_app->view('users')->num_rows();   
  echo $this->session->flashdata('message'); 
       $this->session->unset_userdata('message');
?>
 <!-- Info boxes -->
  
  <!-- /.row -->

</div>
<!-- BAR CHART -->
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    
    <center>  
      <div class="card-footer">
            <button onclick="window.print()" class="btn btn-primary">Cetak</button>
          </div>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data tanggal <?= $dari;?> s/d <?= $sampai;?></h1>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </center>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
       
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Data</span>
                <span class="info-box-number">
                  <?= $jumlah_data;?>
                  <small>Data</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Positif</span>
                <span class="info-box-number"><?= $sentimen[0]->positif;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dot-circle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">netral</span>
                <span class="info-box-number"><?= $sentimen[0]->netral;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Negatif</span>
                <span class="info-box-number"><?= $sentimen[0]->negatif;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->








  <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Media Teratas</h3>
          </div>
                <ul>
                <?php 
                  foreach ($media_teratas->result_array() as $row){
                      echo "<li>
                      <a target='_BLANK' href='#'>$row[nama_media]</a> 
                      <small style='color:black'><b><i>($row[jumlah_media])</i></b></small>  ||
                      <small style='color:green'>positif : <i>($row[positif])</i> </small>
                      <small style='color:red'>negatif : <i>($row[negatif])</i></small>
                      <small style='color:blue'> netral : <i>($row[netral])</i></small>
                      </li>";
                  }
              ?>
          </ul>
        </div><!-- /.card (chat card) -->
      </div>



	<div class="col-lg-6">
		<!-- DONUT CHART -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Grafik Keyword</h3>

				<div class="card-tools">
				<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove"><i
					class="fas fa-times"></i></button> -->
				</div>
			</div>
			<div class="card-body">
        <canvas id="donutChart"
        style="min-height: 250px; height: 150; max-height: 150; max-width: 100%;"></canvas>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>


	<!-- /.col (LEFT) -->
	<div class="col-lg-6">
		<!-- BAR CHART -->
		<div class="card card-warning">
			<div class="card-header">
				<h3 class="card-title">Grafik Sentimen</h3>

				<div class="card-tools">
					<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i
							class="fas fa-times"></i></button> -->
				</div>
			</div>
			<div class="card-body">
				<div class="chart">
					<canvas id="pieChart"
						style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col (RIGHT) -->

  <div class="col-lg-12">
		<!-- DONUT CHART -->
		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Grafik Media</h3>

				<div class="card-tools">
				<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove"><i
					class="fas fa-times"></i></button> -->
				</div>
			</div>
			<div class="card-body">
        <canvas id="donutChartMedia"
        style="min-height: 250px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>





  <!-- /.col (LEFT) -->
  <div class="col-lg-12">
    <!-- BAR CHART -->
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Sentimen Perbulan</h3>

        <div class="card-tools">
          <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i
              class="fas fa-times"></i></button> -->
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="barChart"
            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col (RIGHT) -->







   <!-- TABLE: LATEST ORDERS -->
       <div class="col-lg-12">
           <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Pemberitaan Media</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nama Media</th>
                      <th>Jumlah Pemberitaan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Kompas.com</td>
                      <td><span class="badge <?php if (($media[0]->kompascom) < 1) { echo 'badge-danger';} else { echo 'badge-info';} ?>"><?= $media[0]->kompascom;?></span></td>
                    </tr>
                    <tr>
                      <td>detik.com</td>
                      <td><span class="badge <?php if (($media[0]->detikcom)<1) {echo 'badge-danger';} else {echo 'badge-info';} ?>"><?= $media[0]->detikcom;?></span></td>
                    </tr>
                    <tr>
                      <td>radarsemarang.jawapos.com</td>
                      <td><span class="badge <?php if (($media[0]->radarsemarangjawaposcom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->radarsemarangjawaposcom;?></span></td>
                    </tr>
                    <tr>
                      <td>kabarwonosobo.pikiranrakyat.com</td>
                      <td><span class="badge <?php if (($media[0]->kabarwonosobopikiranrakyatcom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->kabarwonosobopikiranrakyatcom;?></span></td>
                    </tr>
                    <tr>
                      <td>derapjuang.id</td>
                      <td><span class="badge <?php if (($media[0]->derapjuangid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->derapjuangid;?></span></td>
                    </tr>
                    <tr>
                      <td>infopublik.id</td>
                      <td><span class="badge <?php if (($media[0]->infopublikid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->infopublikid;?></span></td>
                    </tr>
                    <tr>
                      <td>newswsb.my.id</td>
                      <td><span class="badge <?php if (($media[0]->newswsbmyid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->newswsbmyid;?></span></td>
                    </tr>
                    <tr>
                      <td>Solopos.com</td>
                      <td><span class="badge <?php if (($media[0]->wwwsoloposcom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wwwsoloposcom;?></span></td>
                    </tr>
                    <tr>
                      <td>Suarabaru.id</td>
                      <td><span class="badge <?php if (($media[0]->suarabaruid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->suarabaruid;?></span></td>
                    </tr>
                    <tr>
                      <td>Republika.co.id</td>
                      <td><span class="badge <?php if (($media[0]->republikacoid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->republikacoid;?></span></td>
                    </tr>
                    <tr>
                      <td>Jateng.antaranews.com</td>
                      <td><span class="badge <?php if (($media[0]->jatengantaranewscom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jatengantaranewscom;?></span></td>
                    </tr>
                    <tr>
                      <td>medianasional.id</td>
                      <td><span class="badge <?php if (($media[0]->wwwmedianasionalid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wwwmedianasionalid;?></span></td>
                    </tr>
                    <tr>
                      <td>todaylineme.id</td>
                      <td><span class="badge <?php if (($media[0]->todaylinemeid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->todaylinemeid;?></span></td>
                    </tr>
                    <tr>
                      <td>rri.co.id/semarang</td>
                      <td><span class="badge <?php if (($media[0]->rricoidsemarang)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->rricoidsemarang;?></span></td>
                    </tr>
                    <tr>
                      <td>Pesona FM Wonosobo</td>
                      <td><span class="badge <?php if (($media[0]->pesonafmwonosobo)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->pesonafmwonosobo;?></span></td>
                    </tr>
                    <tr>
                      <td>Web Tv</td>
                      <td><span class="badge <?php if (($media[0]->webtv)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->webtv;?></span></td>
                    </tr>
                    <tr>
                      <td>Wonosobo Zone</td>
                      <td><span class="badge <?php if (($media[0]->wonosobozone)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wonosobozone;?></span></td>
                    </tr>
                    <tr>
                      <td>Magelang Ekspres</td>
                      <td><span class="badge <?php if (($media[0]->magelangeksprescom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->magelangeksprescom;?></span></td>
                    </tr>
                    <tr>
                      <td>wonosobo.sorot.co</td>
                      <td><span class="badge <?php if (($media[0]->wonosobosorotco)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wonosobosorotco;?></span></td>
                    </tr>



                    <tr>
                      <td>wonosobohebat</td>
                      <td><span class="badge <?php if (($media[0]->wonosobohebat)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wonosobohebat;?></span></td>
                    </tr>
                    <tr>
                      <td>kompascom</td>
                      <td><span class="badge <?php if (($media[0]->kompascom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->kompascom;?></span></td>
                    </tr>
                    <tr>
                      <td>bernasid</td>
                      <td><span class="badge <?php if (($media[0]->bernasid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->bernasid;?></span></td>
                    </tr>
                    <tr>
                      <td>republikaid</td>
                      <td><span class="badge <?php if (($media[0]->republikaid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->republikaid;?></span></td>
                    </tr>
                    <tr>
                      <td>jatengprovgoid</td>
                      <td><span class="badge <?php if (($media[0]->jatengprovgoid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jatengprovgoid;?></span></td>
                    </tr>
                    <tr>
                      <td>jatenginewsid</td>
                      <td><span class="badge <?php if (($media[0]->jatenginewsid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jatenginewsid;?></span></td>
                    </tr>

                    <tr>
                      <td>radarsemarangid</td>
                      <td><span class="badge <?php if (($media[0]->radarsemarangid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->radarsemarangid;?></span></td>
                    </tr>
                    <tr>
                      <td>wwwgatracom</td>
                      <td><span class="badge <?php if (($media[0]->wwwgatracom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wwwgatracom;?></span></td>
                    </tr>
                    <tr>
                      <td>wwwtvonenewscom</td>
                      <td><span class="badge <?php if (($media[0]->wwwtvonenewscom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wwwtvonenewscom;?></span></td>
                    </tr>
                    <tr>
                      <td>NJTNews</td>
                      <td><span class="badge <?php if (($media[0]->NJTNews)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->NJTNews;?></span></td>
                    </tr>
                    <tr>
                      <td>wwwjatengnetworkcom</td>
                      <td><span class="badge <?php if (($media[0]->wwwjatengnetworkcom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wwwjatengnetworkcom;?></span></td>
                    </tr>
                    <tr>
                      <td>mercusuarcom</td>
                      <td><span class="badge <?php if (($media[0]->mercusuarcom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->mercusuarcom;?></span></td>
                    </tr>
                    <tr>
                      <td>jatengsuaracom</td>
                      <td><span class="badge <?php if (($media[0]->jatengsuaracom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jatengsuaracom;?></span></td>
                    </tr>

                    <tr>
                      <td>indonesiakinigoid</td>
                      <td><span class="badge <?php if (($media[0]->indonesiakinigoid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->indonesiakinigoid;?></span></td>
                    </tr>
                    <tr>
                      <td>satumenitnews</td>
                      <td><span class="badge <?php if (($media[0]->satumenitnews)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->satumenitnews;?></span></td>
                    </tr>
                    <tr>
                      <td>repjogjarepublikadotcoid</td>
                      <td><span class="badge <?php if (($media[0]->repjogjarepublikadotcoid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->repjogjarepublikadotcoid;?></span></td>
                    </tr>
                    <tr>
                      <td>republika_co_id</td>
                      <td><span class="badge <?php if (($media[0]->republika_co_id)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->republika_co_id;?></span></td>
                    </tr>
                    <tr>
                      <td>jateng_tribbunnewscom</td>
                      <td><span class="badge <?php if (($media[0]->jateng_tribbunnewscom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jateng_tribbunnewscom;?></span></td>
                    </tr>
                    <tr>
                      <td>wisatakublog</td>
                      <td><span class="badge <?php if (($media[0]->wisatakublog)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wisatakublog;?></span></td>
                    </tr>
                    <tr>
                      <td>kompascom</td>
                      <td><span class="badge <?php if (($media[0]->kompascom)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->kompascom;?></span></td>
                    </tr>
                    <tr>
                      <td>bidikekspresiid</td>
                      <td><span class="badge <?php if (($media[0]->bidikekspresiid)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->bidikekspresiid;?></span></td>
                    </tr>
                    <tr>
                      <td>jateng_inews_id</td>
                      <td><span class="badge <?php if (($media[0]->jateng_inews_id)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jateng_inews_id;?></span></td>
                    </tr>
                    <tr>
                      <td>Suara_merdeka</td>
                      <td><span class="badge <?php if (($media[0]->Suara_merdeka)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->Suara_merdeka;?></span></td>
                    </tr>
                    <tr>
                      <td>www_republikaindonesia_com</td>
                      <td><span class="badge <?php if (($media[0]->www_republikaindonesia_com)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->www_republikaindonesia_com;?></span></td>
                    </tr>
                    <tr>
                      <td>jateng_suara_com</td>
                      <td><span class="badge <?php if (($media[0]->jateng_suara_com)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jateng_suara_com;?></span></td>
                    </tr>
                    <tr>
                      <td>detik_com</td>
                      <td><span class="badge <?php if (($media[0]->detik_com)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->detik_com;?></span></td>
                    </tr>
                    <tr>
                      <td>tribun_banyumas</td>
                      <td><span class="badge <?php if (($media[0]->tribun_banyumas)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->tribun_banyumas;?></span></td>
                    </tr>
                    <tr>
                      <td>radar_magelang</td>
                      <td><span class="badge <?php if (($media[0]->radar_magelang)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->radar_magelang;?></span></td>
                    </tr>
                    <tr>
                      <td>wonosobo_ekspres</td>
                      <td><span class="badge <?php if (($media[0]->wonosobo_ekspres)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wonosobo_ekspres;?></span></td>
                    </tr>
                    <tr>
                      <td>jogja_tribunnnews_com</td>
                      <td><span class="badge <?php if (($media[0]->jogja_tribunnnews_com)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->jogja_tribunnnews_com;?></span></td>
                    </tr>
                    <tr>
                      <td>wisata_news</td>
                      <td><span class="badge <?php if (($media[0]->wisata_news)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wisata_news;?></span></td>
                    </tr>
                    <tr>
                      <td>wonosobo_wni_or_id</td>
                      <td><span class="badge <?php if (($media[0]->wonosobo_wni_or_id)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->wonosobo_wni_or_id;?></span></td>
                    </tr>
                    <tr>
                      <td>metroTV</td>
                      <td><span class="badge <?php if (($media[0]->metroTV)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->metroTV;?></span></td>
                    </tr>
                    <tr>
                      <td>Tribunnews</td>
                      <td><span class="badge <?php if (($media[0]->Tribunnews)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->Tribunnews;?></span></td>
                    </tr>
                    <tr>
                      <td>medocom_id</td>
                      <td><span class="badge <?php if (($media[0]->medocom_id)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->medocom_id;?></span></td>
                    </tr>
                    <tr>
                      <td>www_antaranews_com</td>
                      <td><span class="badge <?php if (($media[0]->www_antaranews_com)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->www_antaranews_com;?></span></td>
                    </tr>
                    <tr>
                      <td>Kedaulatan_rakyat</td>
                      <td><span class="badge <?php if (($media[0]->Kedaulatan_rakyat)<1) {echo 'badge-danger';} else {echo 'badge-info';}?>"><?= $media[0]->Kedaulatan_rakyat;?></span></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div> -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col lg 12-->
          




</div>
  <!-- /.row -->


  <script src="<?=base_url('asset/adminlte/')?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url('asset/adminlte/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?=base_url('asset/adminlte/')?>plugins/chart.js/Chart.min.js"></script>
  <script>
   var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData = {
        labels: [
          'Wonosobo Hebat',
          'Wonosobo Aman',
          'Wonosobo Pintar',
          'Wonosobo Makmur',
          'Wonosobo Maer',
          'Bupati Wonosobo',
          'Wakil Bupati Wonosobo',
        ],
        datasets: [{
          data: [<?= $tag[0]->Wonosobo_Sehat 
          .','. $tag[0]->Wonosobo_Aman 
          .','. $tag[0]->Wonosobo_Pintar 
          .','. $tag[0]->Wonosobo_Makmur 
          .','. $tag[0]->Wonosobo_Maer 
          .','. $tag[0]->Bupati_Wonosobo 
          .','. $tag[0]->Wakil_Bupati_Wonosobo  ?>],
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })




      //chart media
      var donutChartCanvasMedia = $('#donutChartMedia').get(0).getContext('2d')
      var donutDataMedia = {
        labels: [
         'kompascom',
         'detikcom',
         'radarsemarangjawaposcom',
         'kabarwonosobopikiranrakyatcom',
         'derapjuangid', 
         'infopublikid', 
         'newswsbmyid', 
         'wwwsoloposcom', 
         'suarabaruid', 
         'republikacoid', 
         'jatengantaranewscom', 
         'wwwmedianasionalid', 
         'todaylinemeid', 
         'rricoidsemarang', 
         'pesonafmwonosobo', 
         'webtv', 
         'wonosobozone', 
         'magelangeksprescom',
         'wonosobosorotco', 
         'wonosobohebat', 
         'kompascom', 
         'bernasid', 
         'republikaid', 
         'jatengprovgoid', 
         'jatenginewsid', 
         'radarsemarangid', 
         'wwwgatracom', 
         'wwwtvonenewscom', 
         'NJTNews', 
         'wwwjatengnetworkcom', 
         'mercusuarcom', 
         'jatengsuaracom', 
         'indonesiakinigoid', 
         'satumenitnews', 
         'repjogjarepublikadotcoid', 
         'republika_co_id', 
         'jateng_tribbunnewscom', 
         'wisatakublog', 
         'kompascom', 
         'bidikekspresiid', 
         'jateng_inews_id', 
         'Suara_merdeka', 
         'www_republikaindonesia_com', 
         'jateng_suara_com', 
         'detik_com', 
         'tribun_banyumas', 
         'radar_magelang', 
         'wonosobo_ekspres', 
         'jogja_tribunnnews_com', 
         'wisata_news', 
         'wonosobo_wni_or_id', 
         'metroTV', 
         'Tribunnews', 
         'medocom_id', 
         'www_antaranews_com', 
         'Kedaulatan_rakyat' 
        ],
        datasets: [{
          data: [<?= 
           $media[0]->kompascom
          .','. $media[0]->detikcom
          .','. $media[0]->radarsemarangjawaposcom
          .','. $media[0]->kabarwonosobopikiranrakyatcom
          .','. $media[0]->derapjuangid 
          .','. $media[0]->infopublikid 
          .','. $media[0]->newswsbmyid 
          .','. $media[0]->wwwsoloposcom 
          .','. $media[0]->suarabaruid 
          .','. $media[0]->republikacoid 
          .','. $media[0]->jatengantaranewscom 
          .','. $media[0]->wwwmedianasionalid 
          .','. $media[0]->todaylinemeid 
          .','. $media[0]->rricoidsemarang 
          .','. $media[0]->pesonafmwonosobo 
          .','. $media[0]->webtv 
          .','. $media[0]->wonosobozone 
          .','. $media[0]->magelangeksprescom
          .','. $media[0]->wonosobosorotco 
          .','. $media[0]->wonosobohebat 
          .','. $media[0]->kompascom 
          .','. $media[0]->bernasid 
          .','. $media[0]->republikaid 
          .','. $media[0]->jatengprovgoid 
          .','. $media[0]->jatenginewsid 
          .','. $media[0]->radarsemarangid 
          .','. $media[0]->wwwgatracom 
          .','. $media[0]->wwwtvonenewscom 
          .','. $media[0]->NJTNews 
          .','. $media[0]->wwwjatengnetworkcom 
          .','. $media[0]->mercusuarcom 
          .','. $media[0]->jatengsuaracom 
          .','. $media[0]->indonesiakinigoid 
          .','. $media[0]->satumenitnews 
          .','. $media[0]->repjogjarepublikadotcoid 
          .','. $media[0]->republika_co_id 
          .','. $media[0]->jateng_tribbunnewscom 
          .','. $media[0]->wisatakublog 
          .','. $media[0]->kompascom 
          .','. $media[0]->bidikekspresiid 
          .','. $media[0]->jateng_inews_id 
          .','. $media[0]->Suara_merdeka 
          .','. $media[0]->www_republikaindonesia_com 
          .','. $media[0]->jateng_suara_com 
          .','. $media[0]->detik_com 
          .','. $media[0]->tribun_banyumas 
          .','. $media[0]->radar_magelang 
          .','. $media[0]->wonosobo_ekspres 
          .','. $media[0]->jogja_tribunnnews_com 
          .','. $media[0]->wisata_news 
          .','. $media[0]->wonosobo_wni_or_id 
          .','. $media[0]->metroTV 
          .','. $media[0]->Tribunnews 
          .','. $media[0]->medocom_id 
          .','. $media[0]->www_antaranews_com 
          .','. $media[0]->Kedaulatan_rakyat
          ?>],
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#f56954' , '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#f56954', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af', '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de' , '#00c3af'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvasMedia, {
        type: 'doughnut',
        data: donutDataMedia,
        options: donutOptions
      })





    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = {
        labels: [
      'netral',
      'positif',
      'negatif'
        ],
        datasets: [{
          data: [<?=$sentimen[0]->netral . ','.$sentimen[0]->positif. ','.$sentimen[0]->negatif ?>],
          backgroundColor: [ '#00c3af', '#00a65a','#f56954'],
        }]
      }
      var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
      })





      //--------------
      //- AREA CHART -
      //--------------
      // Get context with jQuery - using jQuery's .get() method.
      var areaChartData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agust', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [
          {
            label: 'Sentimen Netral',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: [<?php foreach ($sentimen_netral_perbulan as $key) echo $key. ","; ?>]
          },
          {
            label: 'Sentimen Positif',
            backgroundColor: 'rgba(210, 214, 222, 1)',
            borderColor: 'rgba(210, 214, 222, 1)',
            pointRadius: false,
            pointColor: 'rgba(210, 214, 222, 1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [<?php foreach ($sentimen_positif_perbulan as $key) echo $key. ","; ?>]
          },
          {
            label: 'Sentimen Negatif',
            backgroundColor: 'RGBA(255,150,80,1)',
            borderColor: 'RGBA(255,150,80,1)',
            pointRadius: false,
            pointColor: 'RGBA(255,150,80,1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [<?php foreach ($sentimen_negatif_perbulan as $key) echo $key. ","; ?>]
          },
        ]
      }

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = jQuery.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp0
      barChartData.datasets[1] = temp1

      var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false,
          
      }

      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

    </script>

  <script>
              var lineChartData = {
                labels : <?php echo json_encode($id_kategori);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jumlah_id);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("grafik1").getContext("2d")).Line(lineChartData);
        
</script>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  <!-- </div> -->
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer text-sm">
    <strong>Copyright &copy; 2014-<?php echo date('Y'); ?> <a target='_BLANK' href="http://google.com/"><?php echo $iden['nama_website']; ?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    <a style='color:#cecece !important' href="<?php echo base_url().$this->uri->segment(1); ?>/upgrade"><b>Version</b> 3.0.0</a>
    </div>
  </footer> -->
<!-- </div> -->



<!-- ./wrapper -->
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript">
$('#rangepicker').daterangepicker();
</script>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script type="text/javascript">
$(document).ready(function(){
  $('#editor1').summernote({
      height: "300px",
      callbacks: {
          onImageUpload: function(image) {
              uploadImage(image[0]);
          },
          onMediaDelete : function(target) {
              deleteImage(target[0].src);
          }
      }
  });

  function uploadImage(image) {
      var data = new FormData();
      data.append("image", image);
      $.ajax({
          url: "<?php echo site_url('administrator/upload_image')?>",
          cache: false,
          contentType: false,
          processData: false,
          data: data,
          type: "POST",
          success: function(url) {
              $('#editor1').summernote("insertImage", url);
          },
          error: function(data) {
              console.log(data);
          }
      });
  }

  function deleteImage(src) {
      $.ajax({
          data: {src : src},
          type: "POST",
          url: "<?php echo site_url('administrator/delete_image')?>",
          cache: false,
          success: function(response) {
              console.log(response);
          }
      });
  }
});
</script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/admin_mu/dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url(); ?>asset/admin_mu/dist/js/demo.js"></script>
<!-- PAGE PLUGINS -->
<script src="<?php echo base_url(); ?>asset/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#editor1').summernote()
  })
</script>

<!-- jQuery Mapael -->
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>asset/admin_mu/plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->

<script src="<?php echo base_url(); ?>asset/admin_mu/dist/js/jquery.nestable.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>



<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

  <script>
  /** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    return this.href == url;
}).addClass('active');

// for treeview
$('ul.nav-treeview a').filter(function() {
    return this.href == url;
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open') .prev('a').addClass('active');
</script>



<?php if ($this->uri->segment('2')!='menuwebsite'){ ?>
  <!--<script>
    /* CKEDITOR.replace('editor1' ,{
      filebrowserImageBrowseUrl : '<?php // echo base_url('asset/kcfinder'); ?>'
    }); */
  </script>-->
<?php } ?>
</body>
</html>
<?php } ?>











