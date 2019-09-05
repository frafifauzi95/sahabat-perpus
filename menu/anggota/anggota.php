<?php 
include '../src/config/koneksi.php'; 
?>
<h2 class="text-center"> Data Anggota </h2>
<table>
	<tr>
		<th> <a href="menu.php?halaman=tambah_user" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fas fa-male	"></i> Tambah Anggota </a> </th>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
</table>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th> No. </th>
			<th> NIS </th>
			<th> Nama Anggota </th>
			<th> Kelas </th>
			<th> No HP </th>
			<th> Email </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		$ambil = mysqli_query($koneksi, "SELECT * FROM anggota");
		while ($tampil = mysqli_fetch_array($ambil)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $tampil['nis']; ?></td>
				<td><?php echo $tampil['nama']; ?></td>
				<td><?php echo $tampil['kelas']; ?></td>
				<td><?php echo $tampil['no_hp']; ?></td>
				<td><?php echo $tampil['email']; ?></td>
				<td>
					<a href="#" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $no; ?>"><i class="fas fa-pencil-alt"></i> Edit Data</a> 
					<!-- <a class="btn btn-info" data-toggle="modal" data-target="#edit"> Edit Data </a> -->
					<!-- <a href="#" data-toggle="modal" data-target="#delete" class="btn btn-danger" > Hapus </a></td> -->
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $no; ?>"><i class="fa fa-trash"></i> Delete</a>
					<!-- Modal Hapus -->

					<div class="modal fade" id="delete<?php echo $no; ?>">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title"> Konfirmasi Hapus Data Anggota </h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<h5 align="center" >Apakah anda yakin ingin menghapus data <?php echo $tampil['nama'];?><strong><span class="grt"></span></strong> ?</h5>
								</div>

								<!-- Modal footer Hapus -->
								<div class="modal-footer">
									<a href="anggota/function_anggota.php?act=hapus&id=<?php echo $tampil['id_anggota']; ?>" class="btn btn-primary">Delete</a>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal Edit -->
					<div class="modal fade" id="edit<?php echo $no; ?>">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title"> Edit Data Anggota</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<form method="POST" enctype="multipart/form-data" action="anggota/function_anggota.php?act=edit">
										<?php 
										$id_anggota = $tampil['id_anggota'];
										$queryx = "SELECT * FROM anggota where id_anggota = '$id_anggota'";
										$get = mysqli_query($koneksi, $queryx);
										while ($show = mysqli_fetch_assoc($get)) {
											?>
											<div class="form-group col-md-12">
												<input type="hidden" name="id" value="<?php echo $show['id_anggota'] ?>"> 
												<input type="text" class="form-control" placeholder="NIS*" name="nis" required="" value="<?php echo $show['nis'] ?>">
											</div>
											<div class="form-group col-md-12">
												<input type="text" class="form-control" placeholder="Nama Anggota" name="nama" value="<?php echo $show['nama'] ?>">
											</div>
											<div class="form-group col-md-12">
												<input type="text" class="form-control" placeholder="Kelas" name="kelas" value="<?php echo $show['kelas'] ?>">
											</div>
											<div class="form-group col-md-12">
												<input type="text" class="form-control" placeholder="Nomor Handphone" name="hp" value="<?php echo $show['no_hp'] ?>">
											</div>
											<div class="form-group col-md-12">
												<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $show['email'] ?>">
											</div>



											<!-- Modal footer -->
											<div class="modal-footer">
												<button class="btn btn-primary" name="simpan"> Simpan </button>
												<button type="button" class="btn btn-danger" data-dismiss="modal"> Tutup </button>
											</div>
											<?php
										} 
										?>
									</form> 
								</div>
							</div>
						</div>
					</div>
				</td>
			</tr>	
			<?php
		} 
		?>
	</tbody>	
</table>
<!-- The Modal Tambah -->
<div class="modal fade" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title"> Tambah Data Anggota </h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data" action="anggota/function_anggota.php?act=tambah">
					<div class="form-group col-md-12">
						<input type="text" class="form-control" placeholder="NIS*" name="nis" required>
					</div>
					<div class="form-group col-md-12">
						<input type="text" class="form-control" placeholder="Nama Anggota" name="nama">
					</div>
					<div class="form-group col-md-12">
						<input type="text" class="form-control" placeholder="Kelas" name="kelas">
					</div>
					<div class="form-group col-md-12">
						<input type="text" class="form-control" placeholder="Nomor Handphone" name="hp">
					</div>
					<div class="form-group col-md-12">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>


					<!-- Modal footer -->
					<div class="modal-footer">
						<button class="btn btn-primary" name="simpan"> Simpan </button>
						<button type="button" class="btn btn-danger" data-dismiss="modal"> Tutup </button>
					</div>
				</form>  
			</div>
		</div>
	</div>
</div>