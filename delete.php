<?php 
	include 'connect.php';

	$id = $_GET['id'];

	$data = mysqli_query($connect,"delete from siswa where id = '$id'");

	if ($data){
		echo "<script>alert('Berhasil Dihapus'); document.location='index.php'</script>";
	}else{
		echo "<div class = \"alert alert-danger\">Gagal Dihapus</div>";
	}

 ?>