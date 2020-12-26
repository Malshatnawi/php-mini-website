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
//echo '<pre>';
//print_r($_SESSION);
$error = "";
if(isset($_POST['save'])){
 	$username = $_POST['username'];
	$password = $_POST['password'];	
	foreach ($_SESSION['admin'] as $key => $value) {
		if($username == $value['username'] && $password == $value['password']){
			if($value['role'] == 'admin'){
				header("location:admin.php");
			}else{
				header("location:user.php");
			}
		}else{
			$error =  "<h1 style='color:red'>user not Found</h1>";			
		}
	}
}
?>
<h1>Login</h1>
<?php echo $error; ?>
<form method="post">
	Username:<input type="text" name="username">
	Password:<input type="password" name="password">	
	<input type="submit" value="login" name="save">
</form>