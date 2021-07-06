<form action="<?php echo site_url('Guru/SimpanAbsensi'); ?>" method="post">
              <div class="table-responsive">
                <table class="table datatable-export no-margin">
                  <thead>
                  <?php

                        $awal=1;
                            if(!empty($GetCekPertemuan))
                            {
                                  $awal=1;
                                foreach($GetCekPertemuan as $GetCekPertemuan_read) 
                                {
                                  $awal=$awal+1;  
                                }
                            }
                            ?>
                          <?php
                          $akhir=$awal-1;
                            $no=1;
                            for($i=1;$i<$awal;$i++)
                            {
                          ?>
                          <?php
                            }
                          ?>
                        <input type="hidden" name="subject_teacher_id" class="form-control" value="<?php echo $this->uri->segment(3); ?>">
                         <input type="hidden" name="class_room_id" class="form-control" value="<?php echo $this->uri->segment(4); ?>">
                  <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Presentasi Kehadiran</th>
                    <th>Poin yang Diperoleh</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($GetMonPertemuan))
                     {
                          $no=1;
                        foreach($GetMonPertemuan as $GetMonPertemuan_read) 
                        { 

                            if($GetMonPertemuan_read->name=="Admin Sekolah")
                            {}else
                            {
                    ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $GetMonPertemuan_read->nis; ?>
                            </td>
                            <td><?php echo $GetMonPertemuan_read->name; ?></td>
                            <td>
                              <?php

                              $Presentasi=($GetMonPertemuan_read->jumlah/$akhir)*100;
                              echo number_format($Presentasi,0);
                              echo " &nbsp; %";


                              ?>
                            </td>
                            <td>
                              <?php

                              if($Presentasi>=80)
                              {
                                echo "10";
                              }
                              elseif($Presentasi>=60)
                              {
                                echo "5";
                              }
                              elseif($Presentasi<60)
                              {
                                echo "3";
                              }

                              ?>
                            </td>
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
           

</form>