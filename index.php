<?php 
include 'src/config/koneksi.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="src/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="src/css/login.css">
<script src="src/js/bootstrap.min.js"></script>
<script src="src/js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2>
    	Selamat Datang
    </h2>

    <!-- Icon -->
    <div class="fadeIn first">
    	<h1>
    		Tempat Logo Disini
    	</h1>
<!--       <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
     -->    </div>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
	  <input type="submit" class="fadeIn fourth" value="Log In" name="masuk">
    </form>

  </div>
</div>
<?php if (isset($_POST['masuk'])){
	include 'src/config/koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
$ambil = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cocok = mysqli_num_rows($ambil);

if($cocok > 0){
	$_SESSION['username'] = $username;


	  	echo "<div class='col-md-3 col-md-offset-3 mx-auto'>";
	 	echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
	 	echo "<meta http-equiv='refresh' content='1;url=menu/menu.php'>";
	 	echo " </div>";
	 	}
	 	else {
	  	echo "<div class='col-md-3 col-md-offset-3 mx-auto'>";
	 	echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	 	echo " </div>";
	 	}
    }
	
?>
</body>
</html>