

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
              <button class="btn btn-sm btn-primary float-right ml-2 btn-add" data-toggle="modal" data-target="#formemployee" ><i class="fas fa-plus-circle"></i> Baru</button>
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



<!-- Modal -->
<div class="modal fade" id="formemployee" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="url-save" value="<?=site_url('kepsek/employee/save')?>">
            <input type="hidden" id="url-update" value="<?=site_url('kepsek/employee/update')?>">

          <form id="form-set" class="form-row" method="post" enctype="multipart/form-data">
          <div class="col-12 mb-2 card border-primary">
          <small><span class="text-primary">Perhatian:</span><br>User akan dibuatkan otomatis sesuai data employee dibawah dengan tipe user guru & password default <span class="text-danger">'smkcjt2021'</span>, data bisa diubah di menu users setalah form ini disimpan.</small>

          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="nik">NIK/NIP/NUPTK</label>
            <input type="text" class="form-control" placeholder="Masukan nik/nip/nuptk" name="nik" id="nik" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="name">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan Nama" name="name" id="name" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Masukan alamat email" name="email" id="email" required>
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

          <div class="form-group col-12 col-lg-6">
            <label for="education">Bidang Studi</label>
            <input type="text" class="form-control" placeholder="Masukan Bidang Studi" name="education" id="education" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="degree">Jenjang</label>
            <select class="form-control" id="degree" name="degree" required>    
              <option selected disabled value="">Pilih Jenjang</option>
              <option value="SMP/Sederajat">SMP/Sederajat</option>
              <option value="SMA/Sederajat">SMA/Sederajat</option>
              <option value="D3">D3</option>
              <option value="D4/S1">D4/S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
            </select>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="faculty">Fakultas</label>
            <input type="text" class="form-control" placeholder="Masukan Nama Fakultas" name="faculty" id="faculty" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="university">Universitas/Perguruan Tinggi</label>
            <input type="text" class="form-control" placeholder="Masukan Nama Universitas/Perguruan Tinggi" name="university" id="university" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="study">Bidang Mengajar</label>
            <input type="text" class="form-control" placeholder="Masukan Nama Bidang Mengajar" name="study" id="study" required>
          </div>

          <div class="form-group col-12 col-lg-6">
            <label for="marital_status">Status Menikah</label>
            <select class="form-control" id="marital_status" name="marital_status" required>    
              <option selected disabled value="">Pilih Status Menikah</option>
              <option value="Belum Menikah">Belum Menikah</option>
              <option value="Bertunangan">Bertunangan</option>
              <option value="Sudah Menikah">Sudah Menikah</option>
              <option value="Duda/Janda">Duda/Janda</option>
              <option value="Hubungan Tanpa Status">Hubungan Tanpa Status</option>
            </select>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="phone">Nomor Ponsel</label>
            <input type="text" class="form-control" placeholder="Masukan Nomor Ponsel" name="phone" id="phone" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="position">Jabatan</label>
            <input type="text" class="form-control" placeholder="Masukan Jabatan" name="position" id="position" required>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="status_pendidik">Status Pendidik</label>
            <select class="form-control" id="status_pendidik" name="status_pendidik" required>    
              <option selected disabled value="">Pilih Status Pendidik</option>
              <option value="1">Pendidik</option>
              <option value="2">Kependidikan</option>
            </select>
          </div>
          <div class="form-group col-12 col-lg-6">
            <label for="status_pns">Status Pekerjaan</label>
            <select class="form-control" id="status_pns" name="status_pns" required>    
              <option selected disabled value="">Pilih Status Pekerjaan</option>
              <option value="1">PNS</option>
              <option value="2">Honorer</option>
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
