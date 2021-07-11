<form action="<?php echo site_url('Guru/SimpanAbsensi'); ?>" method="post">
  <div class="table-responsive">
    <table class="table table-hover datatable no-margin">
      <thead>
        <tr>
          <td colspan="4">
            <select name="pert" class="form-control" required>
              <option value="">Pilih pertemuan</option>
              <?php
              $awal = 1;
              if (!empty($GetCekPertemuan)) {
                $awal = 1;
                foreach ($GetCekPertemuan as $GetCekPertemuan_read) {
                  $awal = $awal + 1;
                }
              }
              ?>
              <?php

              $no = 1;
              for ($i = $awal; $i <= 16; $i++) {
              ?>
                <option value="<?php echo $i; ?>">Pertemuan <?php echo $i; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="hidden" name="subject_teacher_id" class="form-control" value="<?php echo $this->uri->segment(3); ?>">
            <input type="hidden" name="class_room_id" class="form-control" value="<?php echo $this->uri->segment(4); ?>">
          </td>
        </tr>
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama Siswa</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>

        <?php
        if (!empty($GetDaftarSiswa)) {
          $no = 1;
          foreach ($GetDaftarSiswa as $GetDaftarSiswa_read) {
        ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $GetDaftarSiswa_read->nis; ?>
                <input type="hidden" class="form-control" value="<?php echo $GetDaftarSiswa_read->nis; ?>" name="nis<?php echo $no - 1; ?>">
              </td>
              <td><?php echo $GetDaftarSiswa_read->name; ?></td>
              <td>
                <select name="attendence<?php echo $no - 1; ?>" class="form-control">
                  <option value="1">Masuk</option>
                  <option value="2">Izin/Sakit</option>
                  <option value="0">Tidak Masuk</option>
                </select>
              </td>
            </tr>
        <?php

          }
        }
        ?>
        <tr>
          <td colspan="4">
            <input type="hidden" name="jumlah" value="<?php echo $no - 1; ?>">
            <button type="submit" name="simpan" class="form-control btn btn-primary">Simpan</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.table-responsive -->

</form>