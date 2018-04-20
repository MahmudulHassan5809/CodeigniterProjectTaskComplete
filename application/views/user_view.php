<!DOCTYPE html>
<html>
<head>
	<title>User View</title>
</head>
<body>
 <?php
 foreach ($users as $user) {
 	echo $user->username.'<br>';
 }

 ?>
</body>
</html>