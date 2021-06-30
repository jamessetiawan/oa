
<ul class="nav nav-tabs" id="myTab" role="tablist">

<?php
  $no=1;
  foreach($StudentClass as $sc):?>
  <li class="nav-item" role="presentation">
    <a class="nav-link " data-toggle="tab" href="#tab<?=$sc->class_id?>" role="tab" aria-selected="true"><?=$sc->class_name?></a>
  </li>
  <?php 
  $no++;
  endforeach;?>
</ul>
<div class="tab-content" id="myTabContent">
<?php
  $no=1;
foreach($StudentClass as $sc):?>
  <div class="tab-pane fade" id="tab<?=$sc->class_id?>" role="tabpanel">

      <div class="table-responsive mt-3">
      <button class="btn btn-sm btn-primary float-right ml-2" data-tab="tab<?=$sc->class_id?>"><i class="fas fa-plus-circle"></i> Baru</button>

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
                  
                          $ns=1;
                        foreach($Student as $std):
                          if($sc->class_id==$std->class_id): 
                    ?>
                          <tr>
                            <td><?=$ns++; ?></td>
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
                          
                        endif;
                        endforeach;
                      
                  ?>
                  
                    
                  </tbody>
                </table>
              </div>


  </div>
  <?php 
  $no++;
  endforeach;?>
</div>


