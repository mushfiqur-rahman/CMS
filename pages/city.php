<a href="?p=city_new">New City</a><br><hr><br>
<?php
$sql = "select id, name from city";

$table = mysqli_query($cn, $sql);

print '<table>';
print '<tr><th>Id</th><th>Name</th><th>#</th></tr>';
while($row = mysqli_fetch_assoc($table))
{
	print '<tr>';
	print '<td>'.$row["id"].'</td>';
	print '<td>'.$row["name"].'</td>';
	print '<td> Edit | Delete </td>';
	print '</tr>';
}
print '</table>';
?>