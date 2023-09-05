<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function index(){
		$jumlah= $this->model_utama->view('berita')->num_rows();
		$data['title'] = title();
		$data['description'] = description();
		$data['keywords'] = keywords();
		$config['base_url'] = base_url().'main/index/';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 15;
		if ($this->uri->segment('3')==''){
			$dari = 0;
		}else{
			$dari = $this->uri->segment('3');
		}
		$data['hot'] = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('status' => 'Y'),'tanggal','DESC',$dari,$config['per_page']);
		$this->pagination->initialize($config);

		$this->template->load(template().'/template',template().'/content',$data);
	}
}
