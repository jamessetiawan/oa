<h5>Biodata Guru dan Staf</h5>
<div class="row border border-secondary" style="border-color:#ccd !important">
    <div class="col-12 col-lg-3 pt-5 pl-5 pr-5 pb-5">
        <?php if (!empty($GetDetailEmpl['image'])) : ?>
            <img src="<?= base_url('asset/user/' . $GetDetailEmpl['image']) ?>" class="w-100">
        <?php else : ?>
            <img src="<?= base_url('asset/img/default-user.png') ?>" class="w-100">
        <?php endif; ?>
        <br>
        <?= $GetDetailEmpl['nik'] ?>
    </div>
    <div class="col-12 col-lg-9 pt-5 pb-3">
        <h6 class="text-dark">Nama</h6>
        <p><?= $GetDetailEmpl['name'] ?></p>
        <h6 class="text-dark">Tempat, Tanggal Lahir</h6>
        <p><?= ucfirst($GetDetailEmpl['bd_place']) ?>, <?= $GetDetailEmpl['bd_date'] ?></p>
        <h6 class="text-dark">Pendidikan Terkahir</h6>
        <p><?= $GetDetailEmpl['degree'] ?> - <?= $GetDetailEmpl['education'] ?> - <?= $GetDetailEmpl['university'] ?></p>
        <h6 class="text-dark">Jabatan/Satuan Pendidikan</h6>
        <p><?= $GetDetailEmpl['position'] ?> / SMK Negeri 1 Cijati</p>
        <h6 class="text-dark">Nomor Ponsel</h5>
            <p><?= $GetDetailEmpl['phone'] ?></p>

    </div>
</div>
<div class="table-responsive mt-3">
    <table class="table no-margin datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Mapel</th>
                <th>Kelas</th>


            </tr>
        </thead>
        <tbody>

            <?php
            if (!empty($GetDataMengajar)) {
                $no = 1;
                foreach ($GetDataMengajar as $GetDataMengajar_read) {


            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $GetDataMengajar_read->lesson_name ?></td>
                        <td><?= $GetDataMengajar_read->class_name ?></td>
                        <!-- <td><?php //$GetDataMengajar_read->time 
                                    ?></td> -->

                    </tr>
            <?php

                }
            }
            ?>


        </tbody>
    </table>
</div>
<!-- /.table-responsive -->