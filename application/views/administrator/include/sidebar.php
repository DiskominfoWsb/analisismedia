<!-- Brand Logo -->
<a href="<?php echo base_url().$this->uri->segment(1); ?>" class="brand-link navbar-light">
      <img src="<?php echo base_url(); ?>/asset/logo/admin.png" alt="Admin Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style='color:#000'>ANALISIS MEDIA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php 
          $usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
          if (trim($usr['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $usr['foto']; } 
          echo "<div class='image'>
                  <img src='".base_url()."/asset/foto_user/$foto' class='img-circle elevation-2' alt='$usr[nama_lengkap]'>
                </div>
                <div class='info'>
                  <a href='#' class='d-block'>$usr[nama_lengkap]<br> <span class='badge badge-success'>Online</span></a>
                </div>";
        ?>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat menu-open nav-legacy nav-compact" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">MAIN MENU</li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().$this->uri->segment(1); ?>/home"><i class="nav-icon fas fa-tachometer-alt"></i> <p>Dashboard <span class="right badge badge-danger">Welcome</span></p></a></li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Menu Utama <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
            <?php
              $cek=$this->model_app->umenu_akses("identitaswebsite",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/identitaswebsite'><i class='far fa-circle nav-icon text-success'></i> <p>Identitas Website</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("menuwebsite",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/menuwebsite'><i class='far fa-circle nav-icon text-success'></i> <p>Menu Website</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("halamanbaru",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/halamanbaru'><i class='far fa-circle nav-icon text-success'></i> <p>Halaman Baru</p></a></li>";
              }
            ?>
            </ul>
          </li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pencil-alt"></i>
            <p>Modul Data <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
            <?php
              $cek=$this->model_app->umenu_akses("listberita",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/listberita'><i class='far fa-circle nav-icon text-success'></i> <p>Data</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("kategoriberita",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/kategoriberita'><i class='far fa-circle nav-icon text-success'></i> <p>Kategori</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("kategorimedia",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/kategorimedia'><i class='far fa-circle nav-icon text-success'></i> <p>Media</p></a></li>";
              }

              // $cek=$this->model_app->umenu_akses("tagberita",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/tagberita'><i class='far fa-circle nav-icon text-success'></i> <p>Keyword</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("komentarberita",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/komentarberita'><i class='far fa-circle nav-icon text-success'></i> <p>Komentar</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("sensorkomentar",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/sensorkomentar'><i class='far fa-circle nav-icon text-success'></i> <p>Sensor Komentar</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("album",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/album'><i class='far fa-circle nav-icon text-success'></i> <p>Data Gallery</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("gallery",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/gallery'><i class='far fa-circle nav-icon text-success'></i> <p>Gallery Data Foto</p></a></li>";
              // }
            ?>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-play-circle"></i>
            <p>Modul Trend <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
            <?php
              // $cek=$this->model_app->umenu_akses("playlist",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/playlist'><i class='far fa-circle nav-icon text-success'></i> <p>Playlist Video</p></a></li>";
              // }

              $cek=$this->model_app->umenu_akses("home_grafik",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/home_grafik'><i class='far fa-circle nav-icon text-success'></i> <p>Report Tren&Sentimen All</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("home_grafik",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='#' data-toggle='modal' data-target='#modal_grafik_custom'><i class='far fa-circle nav-icon text-success'></i> <p>Report Tren&Sentimen custom</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("home_grafik",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='#' data-toggle='modal' data-target='#modal_grafik_custom_pdf'><i class='far fa-circle nav-icon text-success'></i> <p>Report Tren&Sentimen PDF</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("tagberita",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/tagberita'><i class='far fa-circle nav-icon text-success'></i> <p>Keyword</p></a></li>";
              }

              // $cek=$this->model_app->umenu_akses("tagvideo",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/tagvideo'><i class='far fa-circle nav-icon text-success'></i> <p>Tag Video</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("komentarvideo",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/komentarvideo'><i class='far fa-circle nav-icon text-success'></i> <p>Komentar Video</p></a></li>";
              // }
            ?>
            </ul>
          </li>

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-play-circle"></i>
            <p>Modul Video <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview"> -->
            <?php
              // $cek=$this->model_app->umenu_akses("playlist",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/playlist'><i class='far fa-circle nav-icon text-success'></i> <p>Playlist Video</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("video",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/video'><i class='far fa-circle nav-icon text-success'></i> <p>Video</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("tagvideo",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/tagvideo'><i class='far fa-circle nav-icon text-success'></i> <p>Tag Video</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("komentarvideo",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/komentarvideo'><i class='far fa-circle nav-icon text-success'></i> <p>Komentar Video</p></a></li>";
              // }
            ?>
            <!-- </ul>
          </li> -->

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chalkboard"></i>
            <p>Modul Iklan <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
            <?php
              $cek=$this->model_app->umenu_akses("iklanatas",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/iklanatas'><i class='far fa-circle nav-icon text-success'></i> <p>Iklan Atas</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("iklanhome",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/iklanhome'><i class='far fa-circle nav-icon text-success'></i> <p>Iklan Home</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("iklansidebar",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/iklansidebar'><i class='far fa-circle nav-icon text-success'></i> <p>Iklan Sidebar</p></a></li>";
              }

              $cek=$this->model_app->umenu_akses("banner",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/banner'><i class='far fa-circle nav-icon text-success'></i> <p>Iklan Link</p></a></li>";
              }
            ?>
            </ul>
          </li> -->

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>Modul Analisis <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview"> -->
            <?php
              // $cek=$this->model_app->umenu_akses("logowebsite",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/logowebsite'><i class='far fa-circle nav-icon text-success'></i> <p>Logo</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("templatewebsite",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/templatewebsite'><i class='far fa-circle nav-icon text-success'></i> <p>Template </p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("background",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/background'><i class='far fa-circle nav-icon text-success'></i> <p>Background </p></a></li>";
              // }
            ?>
            <!-- </ul>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sitemap"></i>
            <p>Modul Interaksi <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
            <?php
              $cek=$this->model_app->umenu_akses("agenda",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/agenda'><i class='far fa-circle nav-icon text-success'></i> <p>Event</p></a></li>";
              }

              // $cek=$this->model_app->umenu_akses("sekilasinfo",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/sekilasinfo'><i class='far fa-circle nav-icon text-success'></i> <p>Sekilas Info</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("jajakpendapat",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/jajakpendapat'><i class='far fa-circle nav-icon text-success'></i> <p>Jajak Pendapat</p></a></li>";
              // }

              // $cek=$this->model_app->umenu_akses("download",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/download'><i class='far fa-circle nav-icon text-success'></i> <p>Download Area</p></a></li>";
              // }

              $cek=$this->model_app->umenu_akses("alamat",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/alamat'><i class='far fa-circle nav-icon text-success'></i> <p>Alamat Kontak</p></a></li>";
              }

              // $cek=$this->model_app->umenu_akses("pesanmasuk",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/pesanmasuk'><i class='far fa-circle nav-icon text-success'></i> <p>Pesan Masuk</p></a></li>";
              // }
            ?>
            </ul>
          </li>
          
          <li class="nav-header">USER MENU</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>Modul Users <i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
            <?php
              $cek=$this->model_app->umenu_akses("manajemenuser",$this->session->id_session);
              if($cek==1 OR $this->session->level=='admin'){
                echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/manajemenuser'><i class='far fa-circle nav-icon text-success'></i> <p>Manajemen User</p></a></li>";
              }

              // $cek=$this->model_app->umenu_akses("manajemenmodul",$this->session->id_session);
              // if($cek==1 OR $this->session->level=='admin'){
              //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/manajemenmodul'><i class='far fa-circle nav-icon text-success'></i> <p>Manajemen Modul</p></a></li>";
              // }
            ?>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().$this->uri->segment(1); ?>/logout"><i class="nav-icon fas fa-sign-out-alt"></i> <p>Logout</p></a></li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
</div>
    <!-- /.sidebar -->




    <div class="modal fade" id="modal_grafik_custom">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Report Custom</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="form_roport" class="form-horizontal" action="<?php echo base_url().'administrator/print_custom'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                      <div class="card card-warning">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Dari Tanggal
                                </label>
                                <input type="date" class="form-control" name="x_dari_tanggal" id="x_dari_tanggal"  >                                      
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Sampai Tanggal
                                </label>
                                <input type="date" class="form-control" name="x_sampai_tanggal" id="x_sampai_tanggal" >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="btn_submit" name="btn_submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
   
   
   
      <div class="modal fade" id="modal_grafik_custom_pdf">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Report Custom</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="form_roport" class="form-horizontal" action="<?php echo base_url().'administrator/print_custom_pdf'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                      <div class="card card-warning">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Dari Tanggal
                                </label>
                                <input type="date" class="form-control" name="x_dari_tanggal" id="x_dari_tanggal"  >                                      
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Sampai Tanggal
                                </label>
                                <input type="date" class="form-control" name="x_sampai_tanggal" id="x_sampai_tanggal" >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="btn_submit" name="btn_submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->