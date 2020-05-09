<?php 
	$Email = $_POST['Email'];
	$Password =$_POST['Password'];

	$Password = stripcslashes($Password);
	$Email = stripcslashes($Email);
	$Password = mysql_real_escape_string($Password);
	$Email = mysql_real_escape_string($Email);



	mysql_connect("localhost","root","");
	mysql_select_db(ta);

	$result = mysql_query("select * from login where Email = '$Email' and Password = '$Password'")
	or die("Failed to query fbsql_database" .mysql_error());

	$row = mysql_fetch_array($result);
	if($row['Email']==$Email && $row['Password']==$Password){
		echo "Login success!!! Welcom ".$row['Email'];
	}else{
		echo "Failed to login!";
	}
 ?>