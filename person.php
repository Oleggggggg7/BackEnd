<?php
session_start();
if ($_SESSION['id']==0)
{
	echo '<center>User not found</center>';
}else{
include ('connect.php');
$familia = $_POST['familia'];
$imya = $_POST['imya'];
$sex = $_POST['sex'];
$user = $_SESSION['id'];

echo $familia;
echo '<hr/>';
echo $imya;
echo '<hr/>';
echo $sex;
echo '<hr/>';
echo $user;
echo ' <a href="pd.php"> input data</a>';

$ins = mysqli_query($connect, 
"INSERT INTO person (familia, imya, sex, user_id) VALUES ('".$familia."','".$imya."','".$sex."','".$user."')");
if ($ins === False){
echo "bad!";
exit();
}else{
	header('Location: data.php');
};
};
?>