<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("layouts/head.php") ?>
  <title>Daftar Mahasiswa</title>
</head>

<body>
	<div class="container">
		<?php $this->load->view("layouts/navbar.php") ?>

		<div class="text-center mt-3 mb-5">
			<h3>List Mahasiswa Baru</h3>
		</div>

		<div class="col">
          <!-- Horizontal Form -->
          <div class="box box-info">
          <div class="table-responsive">
				<table class="table table-hover" id="dataTables">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th width="150px">Tempat/Tanggal Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Telp</th>
							<th>Asal Sekolah</th>
							<th>Prodi dipilih</th>
							<th width="100px" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ( !empty($view_biodata) ) {
							$no = 0; 
							foreach ($view_biodata as $row):
								$no++ ?>
							<tr id="row">
								<td><?php echo $no;?></td>
								<td><?php echo $row->nama_lengkap;?></td>
								<td><?php echo $row->tempat_lahir. '/', $row->tgl_lahir ;?></td>
								<td><?php echo $row->jkel;?></td>
								<td><?php echo $row->alamat;?></td>
								<td><?php echo $row->telp;?></td>
								<td><?php echo $row->asal_sklh;?></td>
								<td><?php echo $row->nama_prodi;?></td>
								<td> 
									<a class="btn btn-primary btn-sm" href="<?php echo site_url('mahasiswa/read/'.$row->id	);?>"><i class="fa fa-eye"></i></a>
									<a class="btn btn-warning btn-sm" href="<?php echo site_url('mahasiswa/edit/'.$row->id	);?>"><i class="fa fa-edit"></i></a>
									<a class="btn btn-danger btn-sm"href="<?php echo site_url('mahasiswa/delete/'.$row->id	);?>" onclick="return confirm('Are you sure?');"><i class="fa fa-backspace"></i></a>
								</td>
							</tr>
							<?php endforeach; 
						} else { ?>
							<tr id="row">
							<td colspan="10" align="center">Data Kosong</td>
							</tr> 
						<?php
						}
						?>

					</tbody>
				</table>
			</div>
          </div>
			
		
	</div>





	<?php $this->load->view("layouts/js.php") ?>
	<script>
    $(function() {
        $('#dataTables').dataTable();
    });
	</script>
   

</body>

</html>