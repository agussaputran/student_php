<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Add Student Data</h3>
<hr/>
<form method="post" action="process.php?action=add">
<table>
	<tr>
		<td>Name</td>
		<td>:</td>
		<td><input type="text" name="name"/></td>
	</tr>
	<tr>
		<td>Majors</td>
		<td>:</td>
		<td><input type="text" name="major"/></td>
	</tr>
	<tr>
		<td>University</td>
		<td>:</td>
		<td><input type="text" name="university"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="button" value="Save"/></td>
	</tr>
</table>
</form>
</body>
</html>