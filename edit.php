<?php

include_once("config.php");

if (isset($_POST['update'])) {


	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);


	if (empty($nama) || empty($umur) || empty($email)) {

		if (empty($nama)) {
			echo "<font color='red'>Kolom Nama tidak boleh kosong.</font><br/>";
		}

		if (empty($umur)) {
			echo "<font color='red'>Kolom Umur tidak boleh kosong.</font><br/>";
		}

		if (empty($email)) {
			echo "<font color='red'>Kolom Email tidak boleh kosong.</font><br/>";
		}
	} else {
	

			$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',umur='$umur',email='$email' WHERE id=$id");
		}

		$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',umur='$umur',email='$email' WHERE id=$id");


		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$name = $res['nama'];
	$age = $res['umur'];
	$email = $res['email'];
}
?>
<html>

<head>
	<title>Edit Data</title>
</head>

<body>
	<center>
		<a href="index.php">Home</a>
		<br /><br />

		<form name="form1" method="post" action="edit.php" enctype="multipart/form-data">
			<table border="0">
				<tr>
					<td>NAME</td>
					<td><input type="text" name="nama" value="<?php echo $name; ?>"></td>
				</tr>
				<tr>
					<td>AGE</td>
					<td><input type="text" name="umur" value="<?php echo $age; ?>"></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>
