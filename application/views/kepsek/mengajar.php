

              <div class="table-responsive">
              <button class="btn btn-sm btn-primary float-right ml-2 btn-add" data-toggle="modal" data-target="#formsubject"><i class="fas fa-plus-circle"></i> Baru</button>
                <table class="table no-margin datatable">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP/NUPTK</th>
                    <th>Nama</th>
                    <th>Data Mengajar</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     if(!empty($Subject))
                     {
                          $no=1;
                        foreach($Subject as $sbj) 
                        { 
                          
                            
                    ?>
                          <tr>
                            <td><?=$no++; ?></td>
                            <td><?=$sbj->nik; ?></td>
                            <td><?=$sbj->username; ?></td>
                             
                            <td>
                            Mapel :  <?=$sbj->name; ?> /
                            Waktu :  <?=$jumlah=$sbj->time; ?> Jam

                            <button class="float-right btn btn-sm btn-link add-detail" data-id="<?=$sbj->subject_id; ?>" data-toggle="modal" data-target="#formteaching" style="text-docoration:none"><i class="fas fa-plus-square"></i></button>
                              <table class="table table-bordered" style="font-size:8pt">
                                <tr>
                                  <th>Kelas</th>
                                  <th>Hari</th>
                                  <th>Jam Awal</th>
                                  <th>Jam Akhir</th>
                                  <th>Action </th>
                                </tr>
                                <?php
                                $CI->load->library('day');
                                  $no=0;
                                  foreach($sbj->detail as $detail):
                                    $no++;
                                ?>
                                <tr>
                                  <td><?=$detail->name?></td>
                                  <td><?=$CI->day->to_text($detail->day);?></td>
                                  <td><?=date('H:i',strtotime($detail->time_start))?></td>
                                  <td><?=date('H:i',strtotime($detail->time_end))?></td>
                                  <td><button onclick="location.href='<?=site_url('kepsek/board/remove_detail/'.$detail->cs_id)?>'" class="btn btn-sm btn-link" ><i class="fas fa-trash-alt"></i></button></td>
                                </tr>

                                <?php 
                                endforeach;?>
                                <tr>
                                <td colspan="4" class="text-right">Jumlah Mengajar </td>
                                <td><?=$jumlah*$no?> Jam</td>
                                </tr>
                              </table>
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
<div class="modal fade" id="formsubject" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Mengajar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="url-save" value="<?=site_url('kepsek/board/save')?>">
            <input type="hidden" id="url-update" value="<?=site_url('kepsek/board/update')?>">

          <form id="form-set" class="form-row" method="post" enctype="multipart/form-data">
         

          <div class="form-group col-12">
            <label for="user_id">Data Guru</label>
            <select class="form-control" id="user_id" name="user_id" required>    
              <option selected disabled value="">Pilih Data Guru</option>
              <?php foreach($Users as $usr):?>
                <?php if($usr->type!="admin"):?>
                   <option value="<?=$usr->id?>"><?=$usr->nik?> - <?=$usr->name?> - <?=$usr->study?></option>
                <?php endif;?>
              <?php endforeach;?>
            </select>
          </div>
          
          <div class="form-group col-12">
            <label for="lesson_id">Data Pelajaran</label>
            <select class="form-control" id="lesson_id" name="lesson_id" required>    
              <option selected disabled value="">Pilih Data Pelajaran</option>
              <?php foreach($Lessons as $lsn):?>
                   <option value="<?=$lsn->id?>"><?=$lsn->name?> - <?=$lsn->time?> Jam</option>
              <?php endforeach;?>
            </select>
          </div>
          

          <div class="form-group col-12">
            <button type="button" class="float-right btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="float-right btn btn-primary mr-2">Simpan</button>
          </div>
          

        

        </form>
      </div>
     
    </div>
  </div>
</div>


<div class="modal fade" id="formteaching" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Kelas Mengajar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          

          <form id="form-set" class="form-row" action="<?=site_url('kepsek/board/save_detail')?>" method="post" enctype="multipart/form-data">
         
          <input type="hidden" name="subject_teacher_id" id="subject_teacher_id" required>
          <div class="form-group col-12">
            <label for="class_room_id">Data Kelas</label>
            <select class="form-control" id="class_room_id" name="class_room_id" required>    
              <option selected disabled value="">Pilih Data Kelas</option>
              <?php foreach($Class as $cls):?>
                   <option value="<?=$cls->id?>"><?=$cls->name?></option>
              <?php endforeach;?>
            </select>
          </div>
          
          <div class="form-group col-12">
            <label for="day">Hari</label>
            <select class="form-control" id="day" name="day" required>    
              <option selected disabled value="">Pilih Hari</option>
              <?php for($n=1;$n<=5;$n++):?>
                   <option value="<?=$n?>"><?=ucfirst($CI->day->to_text($n));?></option>
              <?php endfor;?>
            </select>
          </div>

          <div class="form-group col-6">
          <label for="time_start">Waktu Mulai</label>
          <input type="time" class="form-control" id="time_start" name="time_start" placeholder="00:00" required>
          </div>     
          <div class="form-group col-6">
          <label for="time_end">Waktu Akhir</label>
          <input type="time" class="form-control" id="time_end" name="time_end" placeholder="00:00" required>
          </div>               

          <div class="form-group col-12">
            <button type="button" class="float-right btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="float-right btn btn-primary mr-2">Simpan</button>
          </div>
          

        

        </form>
      </div>
     
    </div>
  </div>
</div>