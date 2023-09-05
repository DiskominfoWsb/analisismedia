<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Edit Media</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_kategorimedia',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='x_id_media' value='$rows[id_media]'>
                    <tr><th width='120px' scope='row'>Nama Media</th>    <td><input type='text' class='form-control' name='x_nama_media' value='$rows[nama_media]' required></td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/kategoriberita'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();