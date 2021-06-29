<div class="callout callout-info">
          <h6>Upload Dokumen <b>Administrasi Guru</b></h6>

          <p>Silahkan untuk mengupload file yang akan dilampirkan, selanjutnya silahkan untuk melihat hasil penilaian ketercapaian dokumen.</p>
          <p class="help-block">File yang diupload hanya (.doc .xls .docx .xlsx .zip .rar)</p>

</div>

<br>




              <div class="table-responsive">
                <table class="table nos-table no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Administrasi</th>
                    <th style="width:350px">Lampiran Dokumen</th>
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
                    <td><a href=""><b><?php echo $GetDataDoc_read->nama_jenis_doc; ?></b></a></td>
                    <td>
                      <?php 
                        if ($GetDataDoc_read->upload_doc<>null) 
                        {

                          if($GetDataDoc_read->st_doc==1 or $GetDataDoc_read->st_doc==0 or $GetDataDoc_read->st_doc==22)
                          {
                      ?>
                        <a href="<?php echo base_url('asset/dok/'.$GetDataDoc_read->upload_doc); ?>" download><i class="fa fa-download"></i> Download File</a>
                      <?php 
                          }


                          if($GetDataDoc_read->st_doc==2)
                          {
                      ?>
<form action="<?php echo site_url('Guru/UpdateDokumen'); ?>" method="post" enctype="multipart/form-data">     

                        <div class="form-group">
                         <input type="hidden" name="kd_doc2" value="<?php echo $GetDataDoc_read->kd_doc; ?>">
                         <input type="hidden" name="kd_jenis_doc2" value="<?php echo $GetDataDoc_read->kd_jenis_doc; ?>" >

                        <div class="custom-file form-control-sm">
                            <input type="file" id="customFile" class="custom-file-input" name="upload_doc2">
                            <label class="custom-file-label" for="customFile">File Input</label>
                        </div>
                        
                        <button type="submit" class="btn btn-sm btn-block btn-warning mt-2">Update</button>
                      </div>
                      (<a href="<?php echo base_url('asset/dok/'.$GetDataDoc_read->upload_doc); ?>" download><i class="fa fa-download"></i> Download File</a>)
</form>

                      <?php 
                          }

                        }
                        else
                        {
                      ?>

<form action="<?php echo site_url('Guru/SimpanDokumen'); ?>" method="post" enctype="multipart/form-data">                          
                      <div class="form-group">
                        <input type="hidden" name="kd_jenis_doc" value="<?php echo $GetDataDoc_read->kd_jenis_doc; ?>" >
                        <div class="custom-file form-control-sm">
                            <input type="file" id="customFile2" class="custom-file-input" name="upload_doc">
                            <label class="custom-file-label" for="customFile2">File input</label>
                        </div>
                        

                        <button type="submit" class="btn btn-sm btn-block btn-primary mt-2">Simpan</button>
                      </div>
</form>


                      <?php
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
                        <span class="badge badge-info">Belum di Periksa</span>

                      <?php 
                          }
                          if($GetDataDoc_read->st_doc==22)
                          {
                      ?>
                        <span class="badge badge-info">Perbaikan Belum di Periksa</span>

                      <?php 
                          }


                          if($GetDataDoc_read->st_doc==2)
                          {
                      ?>
                        
                        <span class="badge badge-warning">Perbaikan</span>


                        <!-- Button trigger modal --><br>
                        <button type="button" class="btn btn-sm btn-link" style="padding:2px !important" data-toggle="modal" data-target="#Modal<?=$GetDataDoc_read->kd_doc?>">Note</button>

                        <!-- Modal -->
                        <div class="modal fade" id="Modal<?=$GetDataDoc_read->kd_doc?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Note Perbaikan Dokumen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <textarea class="textarea" readonly placeholder="Silahkan isi note perbaikan dokumen ..."
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $GetDataDoc_read->note_doc ?></textarea>                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>


                       

                      <?php 
                          }

                        }
                        else
                        {
                      ?>


                      <button type="button" class="btn btn-sm btn-danger">Proses Pengumpulan Data</button>

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
              </div>
              <!-- /.table-responsive -->
         





         