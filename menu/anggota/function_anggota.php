<?php
include '../../src/config/koneksi.php';

if($_GET['act']== 'tambah'){
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$no_hp = $_POST['hp'];
	$email = $_POST['email'];
	$id = time();

    //query
	$querytambah =  mysqli_query($koneksi, "INSERT INTO anggota VALUES('$id' , '$nis' , '$nama' , '$kelas' , '$no_hp' ,'$email')");

	if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:../menu.php?halaman=anggota"); 
   }
else{
	echo "ERROR, tidak berhasil". mysqli_error($koneksi);
}
}
elseif($_GET['act']=='edit'){
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$no_hp = $_POST['hp'];
	$email = $_POST['email'];
	$id_anggota = $_POST['id'];

    //query update
	$queryupdate = mysqli_query($koneksi, "UPDATE anggota SET nis='$nis' , nama='$nama' , kelas='$kelas' , no_hp = '$no_hp' , email = '$email' WHERE id_anggota='$id_anggota' ");

	if ($queryupdate) {
        # credirect ke page index
        header("location:../menu.php?halaman=anggota");    
    }
else{
	echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}
}
elseif ($_GET['act'] == 'hapus'){
	$id_anggota = $_GET['id'];

    //query hapus
	$querydelete = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota = '$id_anggota'");

	if ($querydelete) {
        # redirect ke index.php
        header("location:../menu.php?halaman=anggota"); 
   }
else{
	echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
}

mysqli_close($koneksi);
}
?>