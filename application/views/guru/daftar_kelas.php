
              <div class="table-responsive">
                <table class="table datatable no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Jumlah Siswa</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($GetDaftarKelas))
                     {
                          $no=1;
                        foreach($GetDaftarKelas as $GetDaftarKelas_read) 
                        { 
                            if($GetDaftarKelas_read->name=="")
                            {

                            } 
                            else
                            {
                    ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $GetDaftarKelas_read->name; ?></td>
                            <td><?php echo $GetDaftarKelas_read->capacity; ?></td>
                            <td><a href="<?php echo site_url('Guru/daftar_siswa/'.$this->uri->segment(3).'/'.$GetDaftarKelas_read->id); ?>">Lihat Siswa</a></td>
                          </tr>
                  <?php
                            }
                      }
                    }
                  ?>
                  
                  	
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
      