<?php
$email = $_POST['email'];
$password = $_POST['password'];
$redirect_to = $_POST['redirect_to'];

$conn = mysqli_connect("localhost","root","","ta");

$result = mysqli_query($conn,"SELECT * FROM login WHERE Email ='$email' AND Password ='$password'")
        or die ('failed');
$row = mysqli_fetch_array($result);
if($row['Email'] == $email && $row['Password'] == $password){
    if($redirect_to != '')
        header('Location: '.$redirect_to);
    else
        header('Location: index.php');
}
else{
    header('Location: login.php');
    echo "<script>alert('fail')</script>";
}
?>

