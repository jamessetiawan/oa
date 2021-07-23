<?php if($this->session->userdata('type')!='kepsek'):?>
<button class="btn btn-sm btn-primary float-right mb-3 btn-add" data-toggle="modal" data-target="#formstudent"><i class="fas fa-plus-circle"></i> Baru</button>
<?php endif;?>
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
                    <td><a href="<?=base_url('kepsek/students/detail/'.$std->nis)?>"><b><?=$std->student_name; ?></b></a></td>
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

<!-- Modal -->
<div class="modal fade" id="formstudent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="url-save" value="<?=site_url('kepsek/students/save')?>">
            <input type="hidden" id="url-update" value="<?=site_url('kepsek/students/update')?>">

          <form id="form-set" class="form-row" method="post" enctype="multipart/form-data">
          <div class="form-group col-12 col-lg-6">
            <label for="class">Kelas</label>
            <select class="form-control" id="class" name="class" required>    
              <option selected disabled value="">Pilih Kelas</option>
              <?php foreach($Class as $cs):?>
              <option value="<?=$cs->class_id?>"><?=$cs->class_name?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" placeholder="Masukan NIS" name="nis" id="nis" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="name">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan Nama" name="name" id="name" required>
          </div>
         
          <div class="form-group col-12 col-lg-6">
            <label for="bd_place">Tempat Lahir</label>
            <input type="text" class="form-control" placeholder="Masukan Tempat Lahir" name="bd_place" id="bd_place" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="bd_date">Tanggal Lahir</label>
            <input type="date" class="form-control" placeholder="Masukan Tanggal Lahir" name="bd_date" id="bd_date" required>
          </div>

          <div class="form-group col-12 col-lg-6">
            <label for="gender">Jenis Kelamin</label>
            <select class="form-control" id="gender" name="gender" required>    
              <option selected disabled value="">Pilih Jenis Kelamin</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group col-12">
            <label for="major">Jurusan</label>
            <select class="form-control" id="major" name="major">    
              <option selected disabled value="">Pilih Jurusan</option>
              <option value="Rekayasa Perangkat Lunak">Rekaya Perangkat Lunak</option>
              <option value="Agribisnis Pengolahan Hasil Pertanian">Agribisnis Pengolahan Hasil Pertanian</option>
              <option value="Bisnis Daring Pemasaran">Bisnis Daring Pemasaran</option>
              <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>

            </select>
          </div>
        
          <div class="form-group col-12">
            <label for="address">Alamat</label>
            <textarea class="form-control" id="address" rows="1" name="address" placeholder="Masukan Alamat" required></textarea>
          </div>
          
          <div class="form-group col-12">
            <label for="image">Gambar</label>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image" accept="image/jpeg,image/png">
            <label class="custom-file-label" for="image">Pilih File</label>
          </div>
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
