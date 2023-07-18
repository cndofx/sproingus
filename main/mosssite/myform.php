<?php
session_name('sesh');
session_set_cookie_params(0,'/', 'sproingus.com');
session_start();
$password=$_POST['password'];
$username=$_POST['username'];
$dbhost_name = 'db5013773760.hosting-data.io';
$database = 'dbs11528972';
$dbuser_name = 'dbu1311756';
$dbpassword = '7UfKsp5cJnWhKJ';
$hashedpass = password_hash($password, PASSWORD_DEFAULT);
$conn = mysqli_connect($dbhost_name, $dbuser_name,$dbpassword, $database);
$sql = "SELECT password FROM users WHERE username='$username'";
$result = $conn->query($sql);
$row = $result -> fetch_array(MYSQLI_NUM);
if(password_verify($password,$row[0])){
   session_regenerate_id(); 
	$_SESSION['loggedin'] = 'TRUE';
	header('Location: http://secret.sproingus.com/index.php');
    exit;
}
?>
