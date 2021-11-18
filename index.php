<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
	<title>CRUD</title>
</head>

<body>
	<center>
		<a href="add.html">ADD NEW DATA</a><br /><br />

		<table width='80%' border=0>

			<tr bgcolor='#CCCCCC'>
				<td>NAME</td>
				<td>AGE</td>
				<td>EMAIL</td>
				<td>UPDATE</td>
			</tr>
			<?php

			while ($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $res['nama'] . "</td>";
				echo "<td>" . $res['umur'] . "</td>";
				echo "<td>" . $res['email'] . "</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('ARE YOU SURE WANT TO DELETE?')\">Delete</a></td>";
			}
			?>
		</table>
	</center>
</body>

</html>
