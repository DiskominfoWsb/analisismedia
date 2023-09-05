<div class="main-page full-width">
	<!-- <div class="double-block"> -->
		<div class="content-block main">
	
			
			<div class="block">
				<div class="block-title">
					<a href="<?php echo base_url(); ?>berita/indeks_berita" class="right">+ Indexs Berita</a>
					<h2>Berita Terbaru</h2>
				</div>
				<div class="block-content">
					<ul class="article-block">
						<?php 
							$no = 1;
							
                			foreach ($hot->result_array() as $row) {	
							$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $row['id_berita']))->num_rows();
							$tgl = tgl_indo($row['tanggal']);
							$isi_berita =(strip_tags($row['isi_berita'])); 
							  $isi = substr($isi_berita,0,170); 
							  $isi = substr($isi_berita,0,strrpos($isi," ")); 
							  $judul = $row['judul'];
							echo "<li>
							<div style='height:100px; background:#e3e3e3; overflow:hidden; margin-left:10px; float:right' class='article-photo hidden-xs'>
								<a href='".base_url()."$row[judul_seo]' class='hover-effect'>";
									if ($row['gambar'] == ''){
										echo "<img style='width:180px;' src='".base_url()."asset/foto_berita/no-image.jpg' alt='no-image.jpg' /></a>";
									}else{
										echo "<img style='width:180px;' src='".base_url()."asset/foto_berita/$row[gambar]' alt='$row[gambar]' /></a>";
									}
								echo "</a>
							</div>
							<div class='article-photo visible-xs' style='margin-right:10px'>";
								if ($row['gambar'] ==''){
									echo "<a class='hover-effect' href='".base_url()."$row[judul_seo]'><img style='width:59px; height:42px' src='".base_url()."asset/foto_berita/small_no-image.jpg' alt='small_no-image.jpg' /></a>";
								}else{
									echo "<a class='hover-effect' href='".base_url()."$row[judul_seo].html'><img style='width:59px; height:42px' src='".base_url()."asset/foto_berita/$row[gambar]' alt='$row[gambar]' /></a>";
								}
						echo "</div>

							<div class='article-content' style='margin-left:0px'>
								<h2 class='hidden-xs h2-judul'><a title='$row[judul]' href='".base_url()."$row[judul_seo]'>$judul</a></h2>
								<h4 class='visible-xs'><a title='$row[judul]' href='".base_url()."$row[judul_seo]'>$judul</a></h4>
								<span class='meta'>
									<a href='".base_url()."kategori/detail/$row[kategori_seo]'><b>$row[nama_kategori]</b></a>
									<a href='".base_url()."$row[judul_seo]'><span class='icon-text'>&#128340;</span>$row[jam], ".tgl_indo($row['tanggal'])."</a>
									<a >- <b>$row[nama_media]</b></a>
								</span>
								<p class='hidden-xs'>$isi . . .</p>
							</div>
						</li>";
							}
						?>
					</ul>
				</div>
			</div>
			
			
			
			
			
			
		</div>				
		
	</div>
	
	<div class="pagination">
	<?php echo $this->pagination->create_links(); ?>
	</div>
	
	
	