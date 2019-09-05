<?php 
include '../src/config/koneksi.php'; 
?>
<h2 class="text-center"> Data Buku </h2>
<table>
	<tr>
		<th> <a href="menu.php?halaman=tambah_user" class="btn btn-primary"> [+] Tambah Buku </a> </th>
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
			<th> Kode Buku </th>
			<th> Judul Buku </th>
			<th> Penulis </th>
			<th> Penerbit </th>
			<th> Tahun Terbit </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil = mysqli_query($koneksi,"SELECT * FROM user"); ?>
		<?php while ($tampil = $ambil->fetch_assoc()) {
			?>
		<tr>
			<td>x</td>
			<td>x</td>
			<td>x</td>
			<td>x</td>
			<td>x</td>
			<td> <a href="menu.php?halaman=edit_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-info"> Edit Data </a>
				<a href="menu.php?halaman=hapus_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?') "> Hapus </a></td>
		</tr>
	</tbody>
	<?php }  ?>
</table>
