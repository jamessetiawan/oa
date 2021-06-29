<div class="row">

<?php
    foreach($GetDataDoc as $gdd):
?>
  <div class="col-xl-3 col-md-6 mb-4">

    <?php if($gdd->st_doc==""):?>
        <div class="card border-left-danger shadow h-100 py-2">
        <?php elseif($gdd->st_doc==0):?>
            <div class="card border-left-info shadow h-100 py-2">
        <?php elseif($gdd->st_doc==1):?>
            <div class="card border-left-success shadow h-100 py-2">
        <?php elseif($gdd->st_doc==2):?>
            <div class="card border-left-warning shadow h-100 py-2">
        <?php  elseif($gdd->st_doc==22):?>
            <div class="card border-left-info shadow h-100 py-2">
        <?php endif;?>
                    
      <!-- <div class="card border-left-success shadow h-100 py-2"> -->
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">

                    <?php if($gdd->st_doc==""):?>
                        <div class="text-xs font-weight-bold text-danger mb-1">

                        <span>Dokumen Kosong</span>
                        <?php elseif($gdd->st_doc==0):?>
                            <div class="text-xs font-weight-bold text-info mb-1">

                            <span>Sedang di review</span>
                        <?php elseif($gdd->st_doc==1):?>
                            <div class="text-xs font-weight-bold text-success mb-1">

                            <span>Sudah di ACC</span>
                        <?php elseif($gdd->st_doc==2):?>
                            <div class="text-xs font-weight-bold text-warning mb-1">
                            <span>Perbaikan</span>
                        <?php  elseif($gdd->st_doc==22):?>
                            <div class="text-xs font-weight-bold text-info mb-1">

                            <span>Sedang di review ulang</span>
                        <?php endif;?>
                           
                        </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <h3>
                       
                      <sup style="font-size: 20px"><?=$gdd->nama_jenis_doc?></sup>
                    </h3>
                      </div>
                  </div>
                  <div class="col-auto">

                      <?php if($gdd->st_doc==""):?>
                        <i class="fas fa-book fa-2x text-danger"></i>
                        <?php elseif($gdd->st_doc==0):?>
                        <i class="fas fa-book fa-2x text-info"></i>
                        <?php elseif($gdd->st_doc==1):?>
                        <i class="fas fa-book fa-2x text-success"></i>
                        <?php elseif($gdd->st_doc==2):?>
                        <i class="fas fa-book fa-2x text-warning"></i>
                        <?php  elseif($gdd->st_doc==22):?>
                        <i class="fas fa-book fa-2x text-info"></i>
                        <?php endif;?>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <?php endforeach;?>
</div>
      


      <br>


              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Guru</th>
                    <th>Pelajaran</th>
                    <th>Administrasi Menagajar</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php 
                        $no=1;
                    foreach($GetDataMengajarTerbaru as $gdm):?>

                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$gdm->nik_tampil?></td>
                        <td><?=$gdm->username?></td>
                        <td><?=$gdm->study?></td>
                        <td><?php if($gdm->st_doc==""){
                                    echo "Dokumen Kosong";
                                }elseif($gdm->st_doc==0){
                                    echo "Sedang di review";
                                }elseif($gdm->st_doc==1){
                                    echo "Sudah di ACC";
                                }elseif($gdm->st_doc==2){
                                    echo "Dalam Perbaikan";
                                }
                                elseif($gdm->st_doc==22){
                                    echo "Sedang di review ulang";
                                }
                        
                        
                            ?></td>


                    </tr>
                    <?php endforeach;?>

                  
                  	
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
          