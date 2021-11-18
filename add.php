<html>

<head>
	<title>ADD</title>
</head>

<body>
	<?php
	include_once("config.php");

	if (isset($_POST['Submit'])) {
		$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
		$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
		$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
		if (empty($nama) || empty($umur) || empty($email)) {

			if (empty($nama)) {
				echo "<font color='red'>NAME NOT RECEIVE!.</font><br/>";
			}

			if (empty($umur)) {
				echo "<font color='red'>AGE NOT RECEIVE!.</font><br/>";
			}

			if (empty($email)) {
				echo "<font color='red'>EMAIL NOT RECEIVE!.</font><br/>";
			}
			echo "<br/><a href='javascript:self.history.back();'>HOME</a>";
		} else {
			
			
			$result = mysqli_query($mysqli, "INSERT INTO users(nama,umur,email) VALUES('$nama', '$umur', '$email')");

			echo "<br/><a href='index.php'>HOME</a>";
		}
	}
	?>
</body>

</html>
