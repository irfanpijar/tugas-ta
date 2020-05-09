<!DOCTYPE html>
<html>
<head>
	<title> WORKING </title>
</head>
<style>
	body{
	 background-image: url(a.jpeg);
	 background-repeat: no-repeat;
	 background-size: cover;
	margin: 0;
}
.utama{
	height: 350px;
	width: 330px;
	background-color: white;
    margin-left: 530px;
    margin-top: 205px;
    opacity: 0.65;
    font-size: 27px;
    text-align: center;
}

.ok {
    background-color: salmon;
    width: 190px;
    height: 37px;
    margin-top: 30px;
    cursor: pointer;
    text-align: center;
    font-size: 20px;
    position: relative;
}

.ok:hover{
	color: white;
	border: 1px solid pink;
}


</style>
<body>
<body>
	<div class="utama">
	<p><b>Login</b></p>
<form action="login-system.php" method="post">
	<input type="text" name="email" placeholder="email" style="padding: 8px 10px"class="per">
	<input type="Password" name="password" placeholder="password" style="padding: 8px 10px; margin-top: 10px;" class="dua">
	<input type="submit" name="login" value="Login" style="padding: 8px 10px; margin-top: 10px" class="ok">
</form>
<p>Dont Have Account ? <a href="signup.php">Sign Up Now</a></p>
<?php 
// if(isset($_POST['login'])){
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];
// 	$data_user = mysqli_query($conn, "SELECT * FROM login WHERE Email = '$email' AND Password = '$password'");
// 	$r = mysqli_fetch_array($data_user);
// 	$Email =$r['Email'];
// 	$Password =$r['Password'];
// 	$level = $r['level'];
// 	if($email == $Email && $password == $Password){
// 		$_SESSION['level'] = $level;
// 		// header('location: ');
// 		echo "<script>alert('berhasil')</script>";
// 	}else{
// 		echo "<script>alert('Sorry Email and Password Faild')</script>";
// 	}
// }
 ?>
</div>
	
</body>
</html>