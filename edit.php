 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<?php 

  include 'connect.php';
 		$id = $_GET['id'];
 		$data = mysqli_query($connect, "select * from siswa where id='$id'");
 		while ($pegawai = mysqli_fetch_array($data)) {
 		
 	 ?>

 	<div class="wrapper">
 		<form method="POST">
 			<label>Nis</label><br>
 			<input type="number" name="nis" value="<?php echo $pegawai['nis']; ?>"><br><br>
 			<label>Nama</label><br>
 			<input type="text" name="nama" value="<?php echo $pegawai['nama']; ?>"><br><br>
 			<label>Tempat Lahir</label><br>
 			<input type="text" name="tempat_lahir" value="<?php echo $pegawai['tempat_lahir']; ?>"><br><br>
 			<label>Tanggal Lahir</label><br>
 			<input type="date" name="tanggal_lahir" value="<?php echo $pegawai['tanggal_lahir']; ?>"><br><br>
 			<label>Jurusan</label><br>
 			<select name="jurusan" value="<?php echo $pegawai['jurusan']; ?>">
 				<option>Pilih..</option>
 				<option>RPL</option>
 				<option>TAV</option>
 				<option>TP</option>
 				<option>TKR</option>
 			</select><br><br>
 			<label>Konsentrasi</label><br>
 			<input type="text" name="konsentrasi" value="<?php echo $pegawai['konsentrasi']; ?>"><br><br>
 			<label>Rata Rata</label><br>
 				<input type="text" name="Rata_rata" value="<?php echo $pegawai['Rata_rata']; ?>"><br><br>
 			<input type="submit" name="simpan" value="Simpan">
 			<a href="index.php"><input type="submit" name="cancel" value="Back"></a>
 		</form>
 	</div>
          <?php } ?>
 </body>
 </html>
 <?php 
	include "connect.php";

	if (isset($_POST['simpan'])){
  	$nis = $_POST['nis'];
    $nama = $_POST['nama'];
  	$tempat_lahir= $_POST['tempat_lahir'];
  	$tanggal_lahir = $_POST['tanggal_lahir'];
  	$jurusan = $_POST['jurusan'];
  	$konsentrasi = $_POST['konsentrasi'];
  	$rata = $_POST['Rata_rata'];

	$data = mysqli_query($connect, "UPDATE siswa SET nis = '$nis',nama = '$nama', tempat_lahir = '$tempat_lahir',tanggal_lahir='$tanggal_lahir' jurusan = '$jurusan', konsentrasi = '$konsentrasi',Rata_rata = '$rata' WHERE id = '$id'" );

	if($data){
		echo "Berhasil diedit";
	}else{
		echo "<div class=\"alert alert-danger\">Gagal diedit</div>";
	}
}
 ?>