<?php 

	include "connect.php";

	if (isset($_POST['simpan'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$login = mysqli_query($connect, "SELECT * FROM login WHERE username ='$user' and password='$pass'");
		$cek = mysqli_num_rows($login);
		if ($cek > 0){
			header("Location:index.php");
		}else{
			echo "<script>alert('Periksa Username dan Password')</script>";		}
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style>
 		.container{
 			width: 400px;
 			box-shadow: 1px 2px 4px rgba(0,0,0, .5);
 			margin: 10% auto;
 			padding: 40px;
 		}

 		form input{
 			width: 100%;
 			height: 40px;
 			border: 1px solid black;
 			padding: 5px;
 			font-family: Verdana;
 		}
 	</style>
 </head>
 <body>

 	<div class="container">
 		<h1 style="text-align: center;">Login <b style="color: red">SI Sekolahku</b></h1>
 		<form method="POST">
 			<p>
 			<input type="text" name="user" placeholder="Masukan Username.."><br>
 			</p>
 			<p>
 			<input type="password" name="pass" placeholder="Masukan Password.."><br>
 			</p>
 			<p>
 			<input style="background-color: blue; color: white" type="submit" name="simpan" value="Login">
 			</p>
 		</form>
 	</div>
 
 </body>
 </html>