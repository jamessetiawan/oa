

<div class="row">

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1">
                          Total Karyawan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <h3>
                        
                      <sup style="font-size: 20px"><?=$GetDataEmpl_count?></sup>
                    </h3>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-users fa-2x text-success"></i>
                  </div>
              </div>
             
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary mb-1">
                      Tenaga Pendidik
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <h3>
                       
                          <sup style="font-size: 20px"><?=$GetDataEmpla1?></sup>
                      </h3>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                  </div>
              </div>
            
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning mb-1">
                      Tenaga Kependidikan
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                              <h3>
                            
                              <sup style="font-size: 20px"><?=$GetDataEmpla2?></sup>
                            </h3>
                              </div>
                          </div>
                        
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-user-edit fa-2x text-warning"></i>
                  </div>
              </div>
            
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger mb-1">
                      PNS/Honorer</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <h3>
                       
                      <sup style="font-size: 20px"><?=$GetDataEmplb1?>/<?=$GetDataEmplb2?></sup>
                          </h3>

                
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-certificate fa-2x text-danger"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
    


      <br>


              <div class="table-responsive">
              <button class="btn btn-sm btn-primary float-right ml-2"><i class="fas fa-plus-circle"></i> Baru</button>
                <table class="table no-margin datatable">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NUPTK</th>
                    <th>Nama Guru</th>
                    <th>Jabatan</th>
                    <th>Pendidikan</th>
                    <th>Mapel</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($GetDataEmpl))
                     {
                          $no=1;
                        foreach($GetDataEmpl as $GetDataEmpl_read) 
                        { 
                          if($GetDataEmpl_read->nik<>"")
                          {  
                            
                    ?>
                          <tr>
                            <td><?=$no++; ?></td>
                            <td><?=$GetDataEmpl_read->nik; ?></td>
                            <td><a href="<?=base_url('kepsek/employee/detail/'.$GetDataEmpl_read->nik)?>"><b><?=$GetDataEmpl_read->name; ?></b></a></td>
                            <td>
                            <?=$GetDataEmpl_read->position; ?>
                            </td>
                            <td>
                            <?=$GetDataEmpl_read->degree; ?>

                            </td>
                            <td>
                            <?=$GetDataEmpl_read->study; ?>

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
      