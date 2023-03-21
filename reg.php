<?php
include ('connect.php');
$login = $_POST['log'];
$password = $_POST['pass'];

echo $login;
echo '<hr/>';
echo $password;

SELECT ID FROM user
Where login LIKE "$login"

$ins = mysqli_query($connect, 
"INSERT INTO user (login, password) VALUES ('".$login."','".$password."')");
if ($ins === False){
echo "bad!";
exit();
};

?>