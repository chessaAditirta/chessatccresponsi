<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$sekolah = mysqli_real_escape_string($mysqli, $_POST['sekolah']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	
	// checking empty fields
	if(empty($nama) || empty($sekolah) || empty($umur) || empty($email) || empty($alamat)) {	
			
		if(empty($nama)) {
			echo "<font color='red'>Nama Wajib diisi.</font><br/>";
		}
		if(empty($sekolah)) {
			echo "<font color='red'>Sekolah Wajib diisi.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Umur Wajib diisi.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email Wajib diisi.</font><br/>";
		}	
		if(empty($alamat)) {
			echo "<font color='red'>Alamat Wajib diisi.</font><br/>";
		}	
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE pendaftar SET nama='$nama',sekolah='$sekolah',umur='$umur',email='$email',alamat='$alamat' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM pendaftar WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nama = $res['nama'];
	$sekolah = $res['sekolah'];
	$umur = $res['umur'];
	$email = $res['email'];
	$alamat = $res['alamat'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Sekolah</td>
				<td><input type="text" name="sekolah" value="<?php echo $sekolah;?>"></td>
			</tr>
			<tr> 
				<td>Umur</td>
				<td><input type="text" name="umur" value="<?php echo $umur;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

