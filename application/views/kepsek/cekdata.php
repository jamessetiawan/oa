<?php


                    if(!empty($GetDataUser))
                    {
                    
                        foreach($GetDataUser as $GetDataUser_read)
                        {
                          $nama_guru=$GetDataUser_read->username;
                          $nik=$GetDataUser_read->nik;

                        }
                    }
?>
<div class="callout callout-info">
          <h6>Nama Guru : <b class="text-primary"><?php echo $nama_guru; ?></b></h6>

          <p>Silahkan untuk mendownload file yang sudah dilampirkan, selanjutnya silahkan untuk memberikan penilaian ketercapaian dokumen.</p>
</div>

<br>



              <div class="table-responsive">
                <table class="table datatable no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Administrasi</th>
                    <th>Lampiran Dokumen</th>
                    <th>Keterangan Pencapaian</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    if(!empty($GetDataDoc))
                    {
                        $no= 1;
                        foreach($GetDataDoc as $GetDataDoc_read)
                        {
                   ?>

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><a href=""><b><?php echo $GetDataDoc_read->nama_jenis_doc; ?></b><a></td>
                    <td>
                      <?php 
                        if ($GetDataDoc_read->upload_doc<>null) 
                        {

                          if($GetDataDoc_read->st_doc==1 or $GetDataDoc_read->st_doc==0 or $GetDataDoc_read->st_doc==22)
                          {
                      ?>
                        <a href="<?php echo base_url('asset/dok/'.$GetDataDoc_read->upload_doc); ?>" download><i class="fa fa-download"></i> Download File<a>
                      <?php 
                          }


                          if($GetDataDoc_read->st_doc==2)
                          {
                      ?>
                        
                        
                      <a href="<?php echo base_url('asset/dok/'.$GetDataDoc_read->upload_doc); ?>" download><i class="fa fa-download"></i> Download File<a>


                      <?php 
                          }

                        }
                        else
                        {
                          echo "Belum Mengumpulkan Dokumen";
                        }
                        
                      
                      ?>
                    <td>
                      

                      <?php 
                        if ($GetDataDoc_read->upload_doc<>null) 
                        {
                          if($GetDataDoc_read->st_doc==1)
                          {
                      ?>
                        <span class="badge badge-success">Sudah di ACC</span>
                      <?php 
                          }
                          if($GetDataDoc_read->st_doc==0)
                          {
                      ?>
                        <span class="badge badge-info mb-2">Belum di Periksa</span>
<form action="<?php echo site_url('Kepsek/SimpanPeriksa') ?>"  method="post">
                        <select name="st_doc" class="form-control mb-2">
                          <option value="0">Berikan Penilaian</option>
                          <option value="1">Sudah Acc</option>
                          <option value="2">Perbaikan</option>
                        </select>

                        <input type="hidden" name="nik" value="<?=$nik?>">
                        <input type="hidden" name="kd_doc" value="<?php echo $GetDataDoc_read->kd_doc; ?>">
                        <textarea class="form-control" name="note_doc" rows="10" placeholder="Silahkan isi note perbaikan dokumen ... ..."></textarea>
                        <button type="submit" class="mt-2 btn btn-sm btn-block btn-info">Simpan</button>
</form>                        


                      <?php 
                          }
                          if($GetDataDoc_read->st_doc==22)
                          {
                      ?>
                        <span class="badge badge-info mb-3">Perbaikan Belum di Periksa</span>

                        <form action="<?php echo site_url('Kepsek/SimpanPeriksa')?>"  method="post">
                        <select name="st_doc" class="form-control mb-2" data-toggle="dropdown">
                          <option value="22">Berikan Penilaian</option>
                          <option value="1">Sudah Acc</option>
                          <option value="2">Perbaikan</option>
                        </select>
                        <input type="hidden" name="nik" value="<?=$nik?>">

                        <input type="hidden" name="kd_doc" value="<?php echo $GetDataDoc_read->kd_doc; ?>">
                        <textarea class="form-control" name="note_doc" rows="10"><?php echo $GetDataDoc_read->note_doc ?></textarea>
                        <button type="submit" class="mt-2 btn btn-sm btn-block btn-info">Simpan</button>
</form>        

                      <?php 
                          }


                          if($GetDataDoc_read->st_doc==2)
                          {
                      ?>
                        
                        <span class="badge badge-warning">Perbaikan</span>
                        <button href="" class="btn btn-sm btn-link" data-toggle="modal" data-target="#Modal<?php echo $GetDataDoc_read->kd_doc ?>">Note</button>
                         <form>
          <div class="modal fade" id="Modal<?php echo $GetDataDoc_read->kd_doc ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Note Perbaikan Dokumen</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
              </div>
              <div class="modal-body">
                
              
              <form>
                <textarea class="textarea" placeholder="Silahkan isi note perbaikan dokumen ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $GetDataDoc_read->note_doc ?></textarea>
              </form>
              



              </div>
              <div class="modal-footer">
                
              <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </form>

                      <?php 
                          }

                        }
                        else
                        {
                      ?>


<span class="badge badge-danger">Proses Pengumpulan Data</span>

                      <?php
                        }
                        
                      
                      ?>


                    </td>
                    
                  </tr>


                  <?php
                      }
                  }
                  ?>
                 
                
                                      
                  </tbody>
                </table>
                <br><br><br>
              </div>
              <!-- /.table-responsive -->
            






         





