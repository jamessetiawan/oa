

              <div class="table-responsive">
              <button class="btn btn-sm btn-primary float-right ml-2 btn-add" data-toggle="modal" data-target="#formusers"><i class="fas fa-plus-circle"></i> Baru</button>
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
              <div class="modal fade" id="formusers" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="url-save" value="<?=site_url('kepsek/users/save')?>">
            <input type="hidden" id="url-update" value="<?=site_url('kepsek/users/update')?>">

          <form id="form-set" class="form-row" method="post" enctype="multipart/form-data">
         

          <div class="form-group col-12">
            <label for="data_guru">Data Guru</label>
            <select class="form-control" id="data_guru" name="data_guru">    
              <option selected disabled value="">Pilih Data Guru</option>
              <option value="">Custom</option>
              <?php foreach($Employee as $employee):?>
              <option value="<?=$employee->nik?>"><?=$employee->nik?>/<?=$employee->name?></option>
              <?php endforeach;?>
            </select>
          </div>

          <div class="form-group col-12">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" placeholder="Masukan NIK" name="nik" id="nik" required>
          </div>
          <div class="form-group col-12">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Masukan Username" name="username" id="username" required>
          </div>
          <div class="form-group col-12">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Masukan Email" name="email" id="email" required>
          </div>
         
          <div class="form-group col-12">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Masukan Password" name="password" id="password" required>
          </div>
          <div class="form-group col-12">
            <label for="type">Tipe</label>
            <select class="form-control" id="type" name="type" required>    
              <option selected disabled value="">Pilih Tipe</option>
              <option value="admin">Admin</option>
              <option value="guru">Guru</option>
              <option value="staff">Staff TU</option>

            </select>
          </div>
        
          <div class="form-group col-12">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>    
              <option selected disabled value="">Pilih Status</option>
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
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