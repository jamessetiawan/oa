              <div class="table-responsive">
                <table class="table datatable no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Matapelajaran</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($GetMengajar))
                     {
                          $no=1;
                        foreach($GetMengajar as $GetMengajar_read) 
                        { 
                    ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $GetMengajar_read->name; ?></td>
                            <td><a href="<?php echo site_url('Guru/daftar_kelas2/'.$GetMengajar_read->id.'?mapel='.$GetMengajar_read->name); ?>">Lihat Kelas</a></td>
                          </tr>
                  <?php
                          
                      }
                    }
                  ?>
                  
                  	
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
         