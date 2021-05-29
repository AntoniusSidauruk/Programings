<?php 

error_reporting(0);
include "connect.php";

 ?>
<?php 
	if (isset($_POST['simpan'])){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$jurusan = $_POST['jurusan'];
		$konsen = $_POST['konsentrasi'];
		$rata = $_POST['Rata_rata'];
	$sql = mysqli_query($connect, "insert into siswa(nis, nama, tempat_lahir, tanggal_lahir, jurusan, konsentrasi, Rata_rata)values('$nis', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jurusan', '$konsen', '$rata')");

		if ($sql){
			echo "<script>alert('Data Berhasil Ditambahkan')</script>";
		}else{
			echo "<script>alert('Data Gagal Ditambahkan')</script>";
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.wrapper{
 			top: 50%;
 			position: absolute;
 			left: 50%;
 			transform: translate(-50%,-50%);
 		}
 		form input{
 			border: 0.5px solid black;
 		}
 	</style>
 </head>
 <body>
 	<h2>Add Student</h2><hr>

 	<div class="wrapper">
 		<form method="POST">
 			<label>Nis</label><br>
 			<input type="number" name="nis"><br><br>
 			<label>Nama</label><br>
 			<input type="text" name="nama"><br><br>
 			<label>Tempat Lahir</label><br>
 			<input type="text" name="tempat_lahir"><br><br>
 			<label>Tanggal Lahir</label><br>
 			<input type="date" name="tanggal_lahir"><br><br>
 			<label>Jurusan</label><br>
 			<select name="jurusan">
 				<option>Pilih..</option>
 				<option>RPL</option>
 				<option>TAV</option>
 				<option>TP</option>
 				<option>TKR</option>
 			</select><br><br>
 			<label>Konsentrasi</label><br>
 			<input type="text" name="konsentrasi"><br><br>
 			<label>Rata Rata</label><br>
 				<input type="text" name="Rata_rata"><br><br>
 			<input type="submit" name="simpan" value="Simpan">
 			<a href="index.php"><input type="submit" name="cancel" value="Back"></a>
 		</form>
 	</div>
 
 </body>
 </html>