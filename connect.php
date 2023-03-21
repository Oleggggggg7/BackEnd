<?php
include ('config.php');
$db = @mysql_connect($db_loc, $db_user, $db_pass);
if(!$db)
{
echo( '<center><p><b>No connect!</b></p></center>');
exit();
}
if(!@mysql_select_db($db_name, $db))
{
echo( '<center><p><b>BD'.$db_name.' invirse!</b></p></center>');
exit();
}
echo( '<center><p><b>yesa</b></p></center>');
$connect = mysqli_connect($db_loc, $db_user, $db_pass, $db_name);

?>