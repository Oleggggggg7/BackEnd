<?php
session_start();
include ('connect.php');
$login = $_POST['log'];
$pass = $_POST['pass'];

echo $login;
echo '<hr/>';
echo $pass;

$b = mysqli_query($connect, "SELECT * FROM user WHERE login like '".$login."' and password like '".$pass."'");

if ( mysqli_num_rows($b) == 0)
{

$ins = mysqli_query($connect, 
"INSERT INTO user (login, password) VALUES ('".$login."','".$pass."')");
if ($ins === False){
echo "bad!";
exit();
};
}ELSE{
	$c = mysqli_fetch_assoc($b);
	echo '<br/><br/>';
	echo 'USER IS FOUND';
	echo '<br/>';
	echo $c['id'];
	echo '<br/>';
	echo $c['login'];
	echo '<br/>';
	echo $c['password'];
	echo '<br/>';
	$_SESSION['id'] = $c['id'];
	echo ' <a href="person.html"> input data</a>';
};
?>