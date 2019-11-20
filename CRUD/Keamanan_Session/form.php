<!DOCTYPE html>
<html>
<head>
	<title> Formulir </title>
</head>
<body>
<form method="POST" action="insert.php">
	<table>
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> <input type="text" name="nama"> </td>
		</tr>
		<tr>
			<td> Email </td>
			<td> : </td>
			<td> <input type="text" name="email"> </td>
		</tr>
		<tr>
			<td> Password </td>
			<td> : </td>
			<td> <input type="password" name="pass"> </td>
		</tr>
		<tr>
			<td rowspan="3"> <input type="submit" name="simpan" value="Simpan"> </td>
		</tr>
	</table>
</form>
</body>
</html>