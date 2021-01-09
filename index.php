<?php 	
include 'Model.php';
$db = new Model();
$studentData = $db->get();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="add.php">Add Student Data</a>
<table border="1">
		<tr>
			<th>Name</th>
			<th>Majors</th>
			<th>University</th>
			<th>Action</th>
		</tr>
		<?php 
		foreach($studentData as $row){
			?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['major']; ?></td>
				<td><?php echo $row['university']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
					<a href="process.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>