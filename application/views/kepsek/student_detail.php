
<h5>Siswa</h5>
<div class="row border border-secondary" style="border-color:#ccd !important">
<div class="col-12">
<h5 class="text-center pt-2 pb-0 text-dark">Biodata Siswa</h5>
</div>
<div class="col-12 col-lg-3 pt-3 pl-5 pr-5 pb-5">
<?php if(!empty($GetDetailSiswa['image'])):?>
<img src="<?=base_url('asset/student/'.$GetDetailSiswa['image'])?>" class="w-100">
<?php else:?>
<img src="<?=base_url('asset/img/default-user.png')?>" class="w-100">
<?php endif;?></div>
<div class="col-12 col-lg-9 pt-3 pb-3">
<h6 class="text-dark">NIS</h6>
<p><?=$GetDetailSiswa['nis']?></p>
<h6 class="text-dark">Nama</h6>
<p><?=$GetDetailSiswa['name']?></p>
<h6 class="text-dark">Tempat, Tanggal Lahir</h6>
<p><?=ucfirst($GetDetailSiswa['bd_place'])?>, <?=$GetDetailSiswa['bd_date']?></p>
<h6 class="text-dark">Jenis Kelamin</h6>
<p><?=$GetDetailSiswa['gender']?></p>
<h6 class="text-dark">Kelas</h6>
<p><?=$GetDetailSiswa['class_name']?></p>
<h6 class="text-dark">Jurusan/Sekolah</h6>
<p><?=$GetDetailSiswa['major']?> / SMK Negeri 1 Cijati</p>
<h6 class="text-dark">Address</h5>
<p><?=$GetDetailSiswa['address']?></p>

</div>
</div>

<!-- /.table-responsive -->
