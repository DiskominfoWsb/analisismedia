<?php 
  $number1 = $this->model_app->view('berita')->num_rows(); 
  $number2 = $this->model_app->view('kategori')->num_rows(); 
  $number3 = $this->model_app->view('agenda')->num_rows(); 
  $number4 = $this->model_app->view('users')->num_rows();   
  echo $this->session->flashdata('message'); 
       $this->session->unset_userdata('message');
?>
 <!-- Info boxes -->
  <div class="row">
    
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">List Data</span>
          <span class="info-box-number">
            <?php echo $number1; ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Kategori</span>
          <span class="info-box-number"><?php echo $number2; ?></span>
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
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Event</span>
          <span class="info-box-number"><?php echo $number3; ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Users</span>
          <span class="info-box-number"><?php echo $number4; ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-lg-6">
      <?php 
        $jmlpesan = $this->model_app->view_where('hubungi', array('dibaca'=>'N'))->num_rows();
        $jmlberita = $this->model_app->view_where('komentar', array('aktif'=>'N'))->num_rows();
        $jmlvideo = $this->model_app->view_where('komentarvid', array('aktif'=>'N'))->num_rows();
      ?>
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
        <div class="card">
          <?php include "grafik.php"; ?>
        </div>
      </div><!-- right col -->
    </div>
</div>
<!-- BAR CHART -->
  <?php
        foreach($data as $data){
            $jumlah_id[] = $data->jumlah_id;
            $id_kategori[] = $data->id_kategori;
        }
    ?>
<div class="row">
	<div class="col-lg-6">
		<!-- DONUT CHART -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Grafik Keyword</h3>

				<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove"><i
					class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
        <canvas id="donutChart"
        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i
							class="fas fa-times"></i></button>
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
