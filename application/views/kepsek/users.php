

              <div class="table-responsive">
              <button class="btn btn-sm btn-primary float-right ml-2"><i class="fas fa-plus-circle"></i> Baru</button>
                <table class="table no-margin datatable">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tipe</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($Users))
                     {
                          $no=1;
                        foreach($Users as $usr) 
                        { 
                          
                            
                    ?>
                          <tr>
                            <td><?=$no++; ?></td>
                            <td><?=$usr->user_nik; ?></td>
                            <td>
                              <?php if($usr->employee_id):?>
                                <a href="<?=base_url('kepsek/employee/detail/'.$usr->nik)?>"><b><?=$usr->username; ?></b></a>
                              <?php else:?>
                                <b><?=$usr->username; ?></b>
                            <?php endif?>
                            </td>
                            <td>
                            <?=$usr->email; ?>
                            </td>
                            <td>
                            <?=$usr->type; ?>

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
      