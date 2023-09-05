<?php
	$baca = $rows['dibaca']+1;	
	$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $rows['id_berita']))->num_rows();
?>	
<div class="full-width">
	<div class="article-title">
		<div class="share-block right">
			<div>
				<div class="share-article left">
					<span>Social media</span>
					<strong>Share Artikel ini</strong>
				</div>
				<div class="left">
					<script language="javascript">
					document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + " ' target='_blank' class='custom-soc icon-text'>&#62220;</a> <a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank' class='custom-soc icon-text'>&#62217;</a> <a href='https://plus.google.com/share?url=" + document.URL + "' target='_blank' class='custom-soc icon-text'>&#62223;</a>");
					</script>
					<a href="#" class="custom-soc icon-text">&#62232;</a>
					<a href="#" class="custom-soc icon-text">&#62226;</a>
				</div>
				<div class="clear-float"></div>
			</div>
			<div>
				<a href="javascript:printArticle();" class="small-button"><span class="icon-text">&#59158;</span>&nbsp;&nbsp;Print this article</a>
				<a href="#" class="small-button"><span class="icon-text">&#9993;</span>&nbsp;&nbsp;Send e-mail</a>
			</div>
		</div>

		<h1>
			<?php echo "<b>$rows[judul]</b> <br><span style='font-size:14px; color:blue'>$rows[sub_judul] </span>";?>
			
		</h1>
		<div class="author">
			<span class="hover-effect left">
			<?php $test = md5(strtolower(trim($rows['email']))); 
				echo "<img src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
			?>
			</span>
			<div class="a-content">
				<span>By <b><?php echo "$rows[nama_lengkap]"; ?></b>
				
				</span>
				<span class="meta"><?php echo tgl_indo($rows['tanggal']).", $rows[jam] WIB"; ?>
				<!-- <span class="tag" style="background-color: #2a8ece;"><a href="<?php echo base_url()."kategori/detail/$rows[kategori_seo]"; ?>"><?php echo "$rows[nama_kategori]"; ?></a></span> -->
					<a href="#" class="small-button"><span class="icon-text"></span>&nbsp;&nbsp;<?php echo $rows['nama_kategori'];?></a>
					<a href="#" class="small-button"><span class="icon-text"></span>&nbsp;&nbsp;<?php echo $rows['nama_media'];?></a>
					<a target="_BLANK" href="<?php echo $rows['youtube'];?>" class="small-button"><span class="icon-text">&#59157;</span>&nbsp;&nbsp;Klik Link Berita</a>
				</span>
			</div>
		</div>
	</div>
</div>

<div class="main-page left">
	<div class="single-block">
		<div class="content-block main left">
			<div class="block">
				<div class="block-content">
					<div class="shortcode-content">
						<div class="paragraph-row">
							
							<div class="column12">
								<?php 
									if ($rows['gambar'] !=''){ echo "<img style='width:100%' src='".base_url()."asset/foto_berita/$rows[gambar]' alt='$rows[judul]' /></a><br><br>"; }
									if ($rows['keterangan_gambar'] !=''){ echo "<center><p><i><b>Keterangan Gambar :</b> $rows[keterangan_gambar]</i></p></center><br>"; }
									
									$paragraph = explode("</p>", $rows['isi_berita']);
									if (empty($paragraph[3])){
										$content = $paragraph[0].$paragraph[1].$paragraph[2]."</p>";
									}else{
										$content = $paragraph[0].$paragraph[1].$paragraph[2]."</p>";
										
												$pisah_kata  = explode(",",$rows['tag']);
												$jml_katakan = (integer)count($pisah_kata);
												$jml_kata = $jml_katakan-1; 
												$ambil_id = substr($rows['id_berita'],0,4);
												$cari = "SELECT * FROM berita WHERE (id_berita<'$ambil_id') and (id_berita!='$ambil_id') and (" ;
												for ($i=0; $i<=$jml_kata; $i++){
												$cari .= "tag LIKE '%$pisah_kata[$i]%'";
												if ($i < $jml_kata ){
												$cari .= " OR ";}}
												$cari .= ") ORDER BY id_berita DESC LIMIT 5";
												$hasil  = $this->db->query($cari);
												if ($hasil->num_rows()>=1){
													$content .= "<h4>Baca Lainnya : </h4><ul>";
												}
												foreach ($hasil->result_array() as $row) {	
													$total_komentar_terkait = $this->model_utama->view_where('komentar',array('id_berita' => $row['id_berita']))->num_rows();
													$content .= "<li style='padding:0px'><a style='color:blue' href='".base_url()."$row[judul_seo]''>$row[judul]</a><a href='#' class='h-comment'>$total_komentar_terkait</a></li>";
												}      
												$content .= "</ul>";

										for ($i=3; $i <=count($paragraph)-1 ; $i++) { 
											$content .= $paragraph[$i];
										}
									}
		
									echo "$content<hr>
											<div class='fb-like'  data-href='".base_url()."$rows[judul_seo]' 
												data-send='false'  data-width='600' data-show-faces='false'>
											</div> <br><br>"; 


								?>
							</div>
						</div>

					</div>
				</div>
				
			
		

			</div>
		</div>
	</div>
</div>

<div class='main-sidebar right'>
	<?php //include "sidebar_kanan.php";  ?>
</div>
