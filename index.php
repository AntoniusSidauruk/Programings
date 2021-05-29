

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		input{
 			width: 10%;
 			height: 35px;
 			margin-right: 10px;
 			font-weight: bold;
 		}
 	</style>
 </head>
 <body>
 	<div class="wrapper">
 		<h1>Sistem Informasi <b style="color: red">Sekolahku</b><hr></h1>
 		<div class="content">
 			<a href="add.php"> <input style="background-color: #00FF00	" type="submit" name="tambah" value="Add"></a>
 			<input type="search" name="cari">
 			<button style="height: 35px;" name="search">Search</button><br><br>
 			<table border="1" cellpadding="13px">
 				<th>No</th>
 				<th>Nis</th>
 				<th>Nama</th>
 				<th>Tempat Lahir</th>
 				<th>Tanggal Lahir</th>
 				<th>Jurusan</th>
 				<th>Konsentrasi</th>
 				<th>Rata-Rata</th>
 				<th>Opsi</th>
 			<?php 
 				include 'connect.php';
 				$no = 1;
 				$sql = mysqli_query($connect, "SELECT * FROM siswa");
 				while($data = mysqli_fetch_array($sql)){
 			 ?>
 			 	<tr>
 			 		<td><?php echo  $no++?></td>
 			 		<td><?php echo $data['nis']; ?></td>
 			 		<td><?php echo $data['nama']; ?></td>
 			 		<td><?php echo $data['tempat_lahir']; ?></td>
 			 		<td><?php echo $data['tanggal_lahir']; ?></td>
 			 		<td><?php echo $data['jurusan']; ?></td>
 			 		<td><?php echo $data['konsentrasi']; ?></td>
 			 		<td><?php echo $data['Rata_rata']; ?></td>
 			 		<td>
                          <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
                          <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus');">
                            <i class="fa fa-trash"> Hapus</i></a>
                        </td>
 			 	</tr> 
 			 	<?php } ?>
 			 </table>
 		</div>


 	</div>
 </body>
 </html>