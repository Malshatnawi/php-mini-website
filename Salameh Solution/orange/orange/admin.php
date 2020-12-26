<?php
session_start();

if(!isset($_SESSION['admin'])){
	$_SESSION['admin']['a']['username'] = "salameh";
	$_SESSION['admin']['a']['password'] = "123456";
	$_SESSION['admin']['a']['role']     = "admin";
	$_SESSION['admin']['b']['username'] = "ayham";
	$_SESSION['admin']['b']['password'] = "ilovesalameh";
	$_SESSION['admin']['b']['role']     = "admin";
	$_SESSION['admin']['c']['username'] = "laith";
	$_SESSION['admin']['c']['password'] = "ilovesalameh";
	$_SESSION['admin']['c']['role']     = "user";
}
if(isset($_POST['delete2'])){
	$key = $_POST['key'];
	unset($_SESSION['admin']["$key"]);
}
if(isset($_POST['delete3'])){
	$key = $_POST['key'];
	unset($_SESSION['admin']["$key"]);
}
 ?>

<h1>Welcome To Admin</h1>

<table border="3">
	<tr>
		<th>Key</th>
		<th>Username</th>
		<th>Password</th>
		<th>Role</th>
		<th>Delete</th>
		<th>Delete2</th>
		<th>Delete3</th>
	</tr>
	<?php
	foreach ($_SESSION['admin'] as $key => $value) {		
		echo "<tr>";
		echo "<td>{$key}</td>";
		echo "<td>{$value['username']}</td>";
		echo "<td>{$value['password']}</td>";
		echo "<td>{$value['role']}</td>";
		echo "<td><a href='delete.php?key=$key'>Delete</a></td>";		
		echo "<td>
				<form method='post'>
				<input type='text' name='key'>
				<input type='submit' name='delete2' value='delete'></form>
				</td>";
				echo "<td>
				<form method='post'>
				<input type='hidden' name='key' value='$key'>
				<input type='submit' name='delete3' value='delete'></form>
				</td>";		
		echo "</tr>";
	}


	 ?>
</table>