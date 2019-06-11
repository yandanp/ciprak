<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("layouts/head.php") ?>
	<title>Edit Maahsiswa</title>
</head>

<body>
	<div class="container">
		<?php $this->load->view("layouts/navbar.php") ?>

		<div class="text-center mt-3 mb-5">
			<h3>Edit Data<br>Mahasiswa Baru</h3>
		</div>
		<div class="card">
			<div class="card-body bg-light">
				<h5 class="card-title">Data Pribadi</h5>
				<div class="row">
				<div class="col-md-6">
				<span class="label label-info"><?php echo $this->session->flashdata('message'); ?></span>
		
				<?php
					echo form_open('mahasiswa/update');
					echo form_hidden('id',$id);
				?>
                
				<div class="form-group">
					<span class="span2">Nama Lengkap</span>
					<?php 
					echo form_input(array('name'=>'nama_lengkap','maxlength'=>50,'placeholder'=>'Nama Lengkap', 'value'=>$nama_lengkap, 'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('nama_lengkap'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Tempat/Tanggal Lahir</span>
					<div class="row ml-1">
						
					<?php echo form_input(array('name'=>'tempat_lahir','maxlength'=>30,'placeholder'=>'Tempat', 'value'=>$tempat_lahir, 'class'=>'form-control col-md-4'));?>
					<span class="label label-important"><?php echo form_error('tempat_lahir'); ?></span>
					
					<?php echo form_input(array('name'=>'tgl_lahir','placeholder'=>'Tanggal', 'value'=>$tgl_lahir,'class'=>'form-control datepicker col-md-4'));?>
					<span class="label label-important"><?php echo form_error('tgl_lahir'); ?></span>
					</div>
				</div>
				<div class="form-group">
					<span class="span2">Agama</span>
					<?php
					$options = array(
						""			   => "---Pilih---",
						'Islam'        => 'Islam',
						'Kristen'      => 'Kristen',
						'Budha'        => 'Budha',
						'Hindu'        => 'Hindu',
					); 
					echo form_dropdown('agama', $options, $agama,  'class="form-control" id="agama"'); ?>
					<span class="label label-important"><?php echo form_error('agama'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Jenis Kelamin</span>
					<?php
					$jenis = array(
						''		 => '---Pilih---',
						'L'      => 'Laki-Laki',
						'P'      => 'Perempuan',
					); 
					echo form_dropdown('jkel', $jenis, $jkel, 'class="form-control" id="jkel"'); ?>
					<span class="label label-important"><?php echo form_error('jkel'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Status Perkawinan</span>
					<?php
					$stat = array(
						''		 => '---Pilih---',
						'Kawin'      => 'Kawin',
						'Belum'      => 'Belum',
					); 
					echo form_dropdown('status', $stat, $status, 'class="form-control" id="status"'); ?>
					<span class="label label-important"><?php echo form_error('status'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Alamat</span>
					<?php echo form_textarea(array('name'=>'alamat', 'rows' => '5', 'placeholder'=>'Alamat Lengkap', 'value'=>$alamat,  'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('alamat'); ?></span>
				</div>	
		</div> <!-- col -->
		
		<div class="col-md-6">
				<div class="form-group">
					<span class="span2">Telepon</span>
					<?php 
					echo form_input(array('name'=>'telp','maxlength'=>15,'placeholder'=>'No Telp', 'value'=>$telp,  'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('telp'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Asal Sekolah</span>
					<?php 
					echo form_input(array('name'=>'asal_sklh','maxlength'=>50,'placeholder'=>'Asal Sekolah', 'value'=>$asal_sklh,  'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('asal_sklh'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Tahun Lulus</span>
					<?php 
					echo form_input(array('name'=>'thn_lulus','maxlength'=>5,'placeholder'=>'Tahun Lulus', 'value'=>$thn_lulus,  'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('thn_lulus'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Nilai Ijazah</span>
					<?php 
					echo form_input(array('name'=>'n_ijazah','maxlength'=>5,'placeholder'=>'Nilai Ijazah', 'value'=>$n_ijazah, 'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('n_ijazah'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Nilai Ujian Nasional</span>
					<?php 
					echo form_input(array('name'=>'n_un','maxlength'=>5,'placeholder'=>'Nilai Ujian Nasional', 'value'=>$n_un,  'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('n_un'); ?></span>
				</div>
			
			</div> <!-- col -->
				
				</div>

			</div>
		</div>
		
		<div class="card mt-4">
			<div class="card-body bg-light">
				<h5 class="card-title">Data Keluarga (Sesuai Kartu Keluarga)</h5>
				<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<span class="span2">Nama Ayah</span>
					<?php 
					echo form_input(array('name'=>'nama_ayah','maxlength'=>30,'placeholder'=>'Nama Ayah', 'value'=>$nama_ayah,  'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('nama_ayah'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Nama Ibu</span>
					<?php 
					echo form_input(array('name'=>'nama_ibu','maxlength'=>30,'placeholder'=>'Nama Ibu', 'value'=>$nama_ibu, 'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('nama_ibu'); ?></span>
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<span class="span2">Pekerjaan Ayah</span>
					<?php 
					echo form_input(array('name'=>'krj_ayah','maxlength'=>30,'placeholder'=>'Pekerjaan Ayah', 'value'=>$krj_ayah, 'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('krj_ayah'); ?></span>
				</div>
				<div class="form-group">
					<span class="span2">Pekerjaan Ibu</span>
					<?php 
					echo form_input(array('name'=>'krj_ibu','maxlength'=>30,'placeholder'=>'Pekerjaan Ibu', 'value'=>$krj_ibu, 'class'=>'form-control'));?>
					<span class="label label-important"><?php echo form_error('krj_ibu'); ?></span>
				</div>	
		</div> <!-- col -->
				
				</div>

			</div>
		</div>

		<div class="form-group">
				<span class="span2">Pilih Jurusan</span>
				<?php 
						echo combobox('id_prodi','prodi','nama_prodi','id', $id_prodi);
					?>   
				<span class="label label-important"><?php echo form_error('status'); ?></span>
			</div>

			<div class="form-group">
            <span class="span2">&nbsp;</span>
            <?php echo form_submit(array('name'=>'submit','class'=>'btn btn-primary','id'=>'submit','value'=>'Submit'));?>
			</div>
			<?php echo form_close(); ?>
	





	<?php $this->load->view("layouts/js.php") ?>

   
	<script type="text/javascript">
		$(function(){
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true,
		});
		});
	</script>
</body>

</html>