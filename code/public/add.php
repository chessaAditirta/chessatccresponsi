<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$sekolah = mysqli_real_escape_string($mysqli, $_POST['sekolah']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
		
	// checking empty fields
	if(empty($nama) || empty($sekolah) || empty($umur) || empty($email) || empty($alamat)) {
				
		if(empty($nama)) {
			echo "<font color='red'>Nama tidak boleh kosong.</font><br/>";
		}
		
		if(empty($sekolah)) {
			echo "<font color='red'>Sekolah tidak boleh kosong.</font><br/>";
		}
		if(empty($umur)) {
			echo "<font color='red'>Umur tidak boleh kosong.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>email tidak boleh kosong.</font><br/>";
		}
		if(empty($alamat)) {
			echo "<font color='red'>Alamat tidak boleh kosong.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO pendaftar(nama,sekolah,umur,email,alamat) VALUES('$nama','$sekolah','$umur','$email','$alamat')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
