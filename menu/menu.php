<?php include 'header.php'; ?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<?php 
		if (isset($_GET['halaman'])) {
			if ($_GET['halaman'] == "anggota") {
				include 'anggota/anggota.php';
			} elseif ($_GET['halaman'] == "buku") {
				include 'buku/buku.php';
			} elseif ($_GET['halaman'] == "dashboard") {
				include 'dashboard.php';
			} elseif ($_GET['halaman'] == "delete") {
				include 'anggota/delete.php';
			} elseif ($_GET['halaman'] == "edit") {
				include 'anggota/edit.php';			
			}
		} else {
			include 'dashboard.php';
		}
		?>
	</section>
</div>
