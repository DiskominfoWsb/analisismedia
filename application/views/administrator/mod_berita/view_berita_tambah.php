<?php 
    echo "<div class='card'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Tambah Data Baru </h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_listberita',$attributes); 
          echo "<table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr>
                        <th width='120px' scope='row'>Title</th>    
                        <td><input type='text' class='form-control' name='b' required></td></tr>
                         
                        <td><input type='hidden' class='form-control' name='c'></td></tr>
                        <th scope='row'>Link</th>          
                        <td><input type='text' class='form-control' name='d' placeholder='Contoh link: https://website.wonosobokab.go.id/kesehatan/kunjungan-bupati-wonosobo-selomerto'></td>
                    </tr>

                    <tr>
                      <th scope='row'>Nama Media</th>          
                      <td><select name='x_media' class='form-control' required>
                      <option value='' selected>- Pilih Media -</option>";
                      foreach ($media as $row){
                          echo "<option value='$row[id_media]'>$row[nama_media]</option>";
                      }
                echo "</td>
                    </tr>
                    
                    <tr>
                        <th scope='row'>Kategori</th>               
                        <td><select name='a' class='form-control' required>
                          <option value='' selected>- Pilih Kategori -</option>";
                          foreach ($record as $row){
                              echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                          }
                    echo "</td></tr>

                    <tr>
                        <th scope='row'>Tone</th>               
                        <td><select name='x_sentimen' class='form-control' required>
                        <option value='' selected>- Pilih Tone -</option>
                            <option value='positif'>positif</option>
                            <option value='negatif'>negatif</option>
                            <option value='netral'>netral</option>
                        </td>
                    </tr>



                    <input type='hidden' name='e' value='N' checked> 

                    <input type='hidden' name='f' value='N' checked> 

                    <input type='hidden' name='g' value='N' checked> 

                    <tr>
                        <th scope='row'>Ringkasan Berita</th>             
                        <td><textarea id='editor1' class='form-control' name='h' style='height:260px' required></textarea></td></tr>
                    <tr>
                        <th scope='row'>Gambar</th>                 
                        <td><input type='file' class='form-control' name='k'></td></tr>
                    <tr>
                        <th scope='row'>Ket. Gambar</th>            
                        <td><input type='text' class='form-control' name='i'></td></tr>
                    <tr>
                        <th scope='row'>Keyword</th>                    
                        <td><div class='checkbox-scroll'>";
                            foreach ($tag as $tag){
                                echo "<span style='display:block;'><input type=checkbox value='$tag[tag_seo]' name=j[]> $tag[nama_tag] &nbsp; &nbsp; &nbsp; </span>";
                            }
                    echo "</div></td></tr>
                    <tr>
                        <th scope='row'>Waktu Input</th>
                        <td><input type='text' id='datetimepicker1' data-date-format='YYYY-MM-DD HH:mm:ss' class='form-control' name='waktu' value='".date('Y-m-d H:i:s')."'></td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                <a href='".base_url().$this->uri->segment(1)."/listberita'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
              </div>
            </div>
          </div>";
            echo form_close();
