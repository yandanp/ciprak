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
                echo form_open('prodi/create');
                //echo form_hidden('code',$biodata->id);
            ?>
            <div class="form-group">
                <span class="span2">Kode Prodi</span>
                <?php echo form_input(array('name'=>'kode','maxlength'=>5, 'class'=>'form-control', 'value'=>$prodi->kode,'placeholder'=>'Contoh : PI'));?>
                <span class="label label-important alert-danger"><?php echo form_error('kode'); ?></span>
            </div>
            <div class="form-group">
                <span class="span2">Nama Prodi</span>
                <?php echo form_input(array('name'=>'nama_prodi','maxlength'=>50, 'class'=>'form-control', 'value'=>$prodi->nama_prodi,'placeholder'=>'Contoh : Pendidikan Informatika'));?>
                <span class="label label-important alert-danger"><?php echo form_error('nama_prodi'); ?></span>
            </div>
            <div class="form-group">
            <span class="span2">&nbsp;</span>
            <?php echo form_submit(array('name'=>'submit','class'=>'btn btn-primary','id'=>'submit','value'=>'Tambah'));?>
			<!-- <?php if ($type=='update') { ?>
                        <input type="button" id="button" class="btn btn-primary" value="Cancel" onclick="window.location.href='<?=site_url('crud');?>'"/>
                        <?php } ?> -->
            </div>
            <?php echo form_close(); ?>
        </div>

    <div id="table">
        <table class="table table-bordered" align="center">
        	<tr class="info">
            	<td class="controls" id="no">No</td>
                <td class="controls" id="kode" align="center">Kode Prodi</td>
                <td class="controls" id="nama_prodi">Nama Prodi</td>
                <td class="controls" id="aksi">Aksi</td>
            </tr>
            <?php
			if ( !empty($view_prodi) ) {
				$no = 0; 
				foreach ($view_prodi as $row):
                    $no++ ?>
				<tr id="row">
					<td id="no"><?php echo $no;?></td>
					<td id="kode"><?php echo $row->kode;?></td>
					<td id="nama_prodi"><?php echo $row->nama_prodi;?></td>
					<td id="action"> <a class="btn btn-warning" href="<?php echo site_url('prodi/edit/'.$row->id	);?>">Edit</a> | 
					<a class="btn btn-danger"href="<?php echo site_url('prodi/delete/'.$row->id	);?>" onclick="return confirm('Are you sure?');">
					Delete</a></td>
				</tr>
				<?php endforeach; 
			} else { ?>
                <tr id="row">
                <td colspan="6" align="center">Data Kosong</td>
                </tr> 
            <?php
			}
			?>
        </table>
    </div>
	       <span class="label label-warning">Halaman ini dimuat selama {elapsed_time}detik</span>
		
	</div>





	<?php $this->load->view("layouts/js.php") ?>

   

</body>

</html>