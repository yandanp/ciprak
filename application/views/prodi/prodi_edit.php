<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("layouts/head.php") ?>
  <title>Program Studi</title>
</head>

<body>
	<div class="container">
		<?php $this->load->view("layouts/navbar.php") ?>

		<div class="text-center mt-3 mb-5">
			<h3>Daftar Nama Prodi</h3>
		</div>

		<div class="col-md-6">
          <!-- Horizontal Form -->
          <span class="alert-success"><?php echo $this->session->flashdata('message'); ?></span>
    
            <?php
                echo form_open('prodi/update');
                echo form_hidden('id',$prodi->id);
            ?>
            <div class="form-group">
                <span class="span2">Kode Prodi</span>
                <?php echo form_input(array('name'=>'kode','maxlength'=>5, 'class'=>'form-control', 'value'=>$prodi->kode,'placeholder'=>'Contoh : PI'));?>
                <span class="label label-important"><?php echo form_error('kode'); ?></span>
            </div>
            <div class="form-group">
                <span class="span2">Nama Prodi</span>
                <?php echo form_input(array('name'=>'nama_prodi','maxlength'=>50, 'class'=>'form-control', 'value'=>$prodi->nama_prodi,'placeholder'=>'Contoh : Pendidikan Informatika'));?>
                <span class="label label-important"><?php echo form_error('nama_prodi'); ?></span>
            </div>
            <div class="form-group">
            <span class="span2">&nbsp;</span>
            <?php echo form_submit(array('name'=>'submit','class'=>'btn btn-primary','id'=>'submit','value'=>'Update'));?>
			
        </div>
            <?php echo form_close(); ?>
        </div>


	</div>





	<?php $this->load->view("layouts/js.php") ?>

   

</body>

</html>