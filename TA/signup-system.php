<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	$conn = mysqli_connect("localhost","root","","ta");
	mysqli_query($conn,"INSERT INTO login VALUES ('$username','$email','$password')");
	$isi = mysqli_affected_rows($conn);
	if($isi > 0){
            header('Location: ./Working/Home.php');
            }
            else{
                header('Location: ./login.php');
            }
        }
     $_SESSION['is_logged_in'] = true;
?>