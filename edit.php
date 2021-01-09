<?php 	
include 'Model.php';
$db = new Model();
$id = $_GET['id'];
if(! is_null($id))
{
	$studentData = $db->getById($id);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Student Data</h3>
<hr/>
<form method="post" action="process.php?action=update">
<input type="hidden" name="id" value="<?php echo $studentData['id']; ?>"/>
<table>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="name" value="<?php echo $studentData['name']; ?>"/></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>:</td>
		<td><input type="text" name="major" value="<?php echo $studentData['major']; ?>"/></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td>:</td>
		<td><input type="text" name="university" value="<?php echo $studentData['university']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="button" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>