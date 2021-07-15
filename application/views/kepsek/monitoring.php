<?php
                                    if(!empty($GetTotalJenisDoc))
                                    {
                                        foreach($GetTotalJenisDoc as $GetTotalJenisDoc_read)
                                        {
                                          $JumlahJenisDoc=$GetTotalJenisDoc_read->jumlah;
                                        }
                                    }
                                    if(!empty($GetTotalGuru))
                                    {
                                        foreach($GetTotalGuru as $GetTotalGuru_read)
                                        {
                                          $JumlahGuru=$GetTotalGuru_read->jumlah_nik;
                                        }
                                    }
                                    if(!empty($GetTotalAcc))
                                    {
                                        foreach($GetTotalAcc as $GetTotalAcc_read)
                                        {
                                          $JumlahAcc=$GetTotalAcc_read->jumlah_acc;
                                        }
                                    }
                                    if(!empty($GetTotalPerbaikan))
                                    {
                                        foreach($GetTotalPerbaikan as $GetTotalPerbaikan_read)
                                        {
                                          $JumlahPerbaikan=$GetTotalPerbaikan_read->jumlah_perbaikan;
                                        }
                                    }
                                    if(!empty($GetTotalBelum))
                                    {
                                        foreach($GetTotalBelum as $GetTotalBelum_read)
                                        {
                                          $JumlahBelum=$GetTotalBelum_read->jumlah_belum;
                                        }
                                    }
?>
<div class="row">

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1">
                          Sudah di ACC</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <h3>
                        <?php

                          if(empty($JumlahJenisDoc) or empty($JumlahAcc))
                          {
                            echo number_format(0,2);
                          }
                          else
                          {
                            $bagi=$JumlahJenisDoc*$JumlahGuru;
                            $hasil=($JumlahAcc/$bagi) * 100; 
                            echo number_format($hasil,2);
                          }


                            
                        ?>
                      <sup style="font-size: 20px">%</sup>
                    </h3>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-check-square fa-2x text-success"></i>
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
                      Belum di Periksa
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <h3>
                        <?php

                          if(empty($JumlahJenisDoc) or empty($JumlahBelum))
                          {
                            echo number_format(0,2);
                          }
                          else
                          {
                            $bagi2=$JumlahJenisDoc*$JumlahGuru;
                            $hasil2=($JumlahBelum/$bagi2) * 100; 
                            echo number_format($hasil2,2);
                          }

                        ?>
                          <sup style="font-size: 20px">%</sup>
                      </h3>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-info-circle fa-2x text-primary"></i>
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
                      <div class="text-xs font-weight-bold text-warning mb-1">Perbaikan
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                              <h3>
                              <?php
                              if(empty($JumlahJenisDoc) or empty($JumlahPerbaikan))
                              {
                                echo number_format(0,2);
                              }
                              else
                              {
                                $bagi3=$JumlahJenisDoc*$JumlahGuru;
                                $hasil3=($JumlahPerbaikan/$bagi3) * 100; 
                                echo number_format($hasil3,2);
                              }
            
                              ?>
                            <sup style="font-size: 20px">%</sup>
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
                      Proses Pengumpulan Data</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <h3>
                        <?php
                        if(empty($JumlahJenisDoc))
                          {
                            echo number_format(0,2);
                          }
                          else
                          {
                            $bagi4=$JumlahJenisDoc*$JumlahGuru;
                            $All=$JumlahJenisDoc*$JumlahGuru;
                            $jumlahDoc=$JumlahAcc+$JumlahPerbaikan+$JumlahBelum;
                            $TotalAll=$All-$jumlahDoc;
                            $hasil4=($TotalAll/$bagi4) * 100; 
                            echo number_format($hasil4,2);
                          }
                        ?>
                            <sup style="font-size: 20px">%</sup>
                          </h3>

                
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-danger"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
    


      <br>


              <div class="table-responsive">
                <table class="table no-margin datatable">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NUPTK</th>
                    <th>Nama Guru</th>
                    <th>Jumlah Pencapaian</th>
                    <th>Tools</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($GetDataMon))
                     {
                          $no=1;
                        foreach($GetDataMon as $GetDataMon_read) 
                        { 
                          if($GetDataMon_read->nik<>"")
                          {  
                            if($GetDataMon_read->type=="guru")
                              {
                    ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $GetDataMon_read->nik; ?></td>

                            <td><?php echo $GetDataMon_read->username; ?></b></td>
                            <td>&nbsp;&nbsp;&nbsp;
                              <?php
                                if($GetDataMon_read->jumlah<>0)
                                {
                              ?>
                            <badge class="badge badge-success w-50 text-center"><?php echo $GetDataMon_read->jumlah; ?></badge>

                            <?php
                                }elseif($GetDataMon_read->jumlah>1 && $GetDataMon_read->jumlah<4)
                                {
                              ?>
                            <badge class="badge badge-warning w-50 text-center"><?php echo $GetDataMon_read->jumlah; ?></badge>

                              <?php
                                }else
                                {
                              ?>
                              <badge class="badge badge-danger w-50 text-center"><?php echo $GetDataMon_read->jumlah; ?></badge>
                              <?php
                                }
                              ?>
                          </td>
                            <td>
                              
                                <a href="<?php echo site_url('Kepsek/cekdata/'.$GetDataMon_read->nik); ?>">
                      <i class="fa fa-eye"></i> Cek Dokumen
                            </td>
                            
                          </tr>
                  <?php
                          }}
                      }
                    }
                  ?>
                  
                    
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
      