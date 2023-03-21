<?php
include ('connect.php');
$b = mysqli_query($connect, "SELECT * FROM user");
echo '<table border="2">
<tr>
<td>ID</td>
<td>Login</td>
<td>Password</td>
</tr>';
while ($c = mysqli_fetch_assoc($b)){
echo '<tr><td>';
echo $c['id'];
echo '</td><td>';
echo $c['login'];
echo '</td><td>';
echo $c['password'];
echo '</td></tr>';
};

echo '</table>';



?>