<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<ul>
			<li><a href="?p=home">Home</a></li>
			<?php
			$cn = mysqli_connect("localhost", "root", "", "dbus_002");
			$sql = "select id, name from category where categoryId = 0";
			$table = mysqli_query($cn, $sql);
			while($row = mysqli_fetch_assoc($table))
			{
				print '<li><a href="?c='.$row["id"].'">'.$row["name"].'</a>';
				findChild($row["id"]);	
				print '</li>';
			}
	
			function findChild($pid)
			{
				global $cn;
				$sql = "select id, name from category where categoryId = ".$pid;
				$table = mysqli_query($cn, $sql);
				print '<ul>';
				while($row = mysqli_fetch_assoc($table))
				{
					print '<li><a href="?c='.$row["id"].'">'.$row["name"].'</a>';
					findChild($row["id"]);	
					print '</li>';
				}
				print '</ul>';
			}	
	
	
			?>
			
		</ul>	



</body>
</html>