

              <div class="table-responsive">
              <button class="btn btn-sm btn-primary float-right ml-2"><i class="fas fa-plus-circle"></i> Baru</button>
                <table class="table no-margin datatable">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($Student))
                     {
                          $no=1;
                        foreach($Student as $std) 
                        { 

                            
                    ?>
                          <tr>
                            <td><?=$no++; ?></td>
                            <td><?=$std->nis; ?></td>
                            <td><a href="<?=base_url('kepsek/student/detail/'.$std->nis)?>"><b><?=$std->student_name; ?></b></a></td>
                            <td>
                            <?=$std->gender; ?>
                            </td>
                            <td>
                            <?=$std->major; ?>

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
      