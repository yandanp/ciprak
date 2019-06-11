<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("layouts/head.php") ?>
  <title>Daftar Mahasiswa</title>
</head>

<body>
	<div class="container">
		<?php $this->load->view("layouts/navbar.php") ?>

		<div class="text-center mt-3">
			<h3>Mahasiswa Baru</h3>
		</div>
        
            <div class="col-md-6 ml-auto mr-auto">
                <table class="" width="100%">
                    <tbody>
                <div class="card-body">
                    
                    <tr>
                        <td><h5 class="card-title">A. Data Pribadi</h5></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo $tempat_lahir .' / '. $tgl_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?php echo $agama ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <?php if ($jkel=="L") {
                                echo "Laki-laki";
                                }
                                else {
                                    echo "Perempuan";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Kawin</td>
                        <td>:</td>
                        <td><?php echo $status ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td><?php echo $alamat ?></td>
                    </tr>
                    <tr>
                        <td>No. Telp/Hp</td>
                        <td>:</td>
                        <td><?php echo $telp ?></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><?php echo $asal_sklh ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Lulus</td>
                        <td>:</td>
                        <td><?php echo $thn_lulus ?></td>
                    </tr>
                    <tr>
                        <td>Nilai Ijazah</td>
                        <td>:</td>
                        <td><?php echo $n_ijazah ?></td>
                    </tr>
                    <tr>
                        <td>Nilai Ujian Nasional</td>
                        <td>:</td>
                        <td><?php echo $n_un ?></td>
                    </tr>
                   
                    <tr>
                        <td><h5 class="card-title mt-4">B. Data Keluarga</h5></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td><?php echo $nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td><?php echo $nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td>:</td>
                        <td><?php echo $krj_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td>:</td>
                        <td><?php echo $krj_ibu ?></td>
                    </tr>
                    <tr>
                        <td><h5 class="card-title mt-4">C. Program Studi Yang Dipilih</h5></td>
                    </tr>
                    <tr>
                        <td>Program Studi Yang Dipilih</td>
                        <td>:</td>
                        <td><?php echo inputtext('id_prodi','prodi','nama_prodi','id',$id_prodi); ?></td>
                    </tr>
                </div>
                    </tbody>
                </table>
            </div>

                                <hr>

        <div class="col-md-4 ml-auto mt-5">
            
            <h6> .................................. 2019 </h6>
            <h6> Pemohon </h6>
            <pre>
            
            
            
            </pre>
            <h6> .................................. </h6>
           
        </div>
           
       

</body>

</html>