<?php
include ('connect.php');
$b = mysqli_query($connect, "SELECT * FROM user, person WHERE user.id = person.user_id");
echo '<table border="2">
<tr>
<td>ID</td>
<td>Login</td>
<td>Password</td>
<td>Second Name</td>
<td>Name</td>
<td>Sex</td>
</tr>';
while ($c = mysqli_fetch_assoc($b)){
echo '<tr><td>';
echo $c['id'];
echo '</td><td>';
echo $c['login'];
echo '</td><td>';
echo $c['password'];
echo '</td><td>';
echo $c['familia'];
echo '</td><td>';
echo $c['imya'];
echo '</td><td>';
echo $c['sex'];
echo '</td></tr>';
};

echo '</table>';



?>