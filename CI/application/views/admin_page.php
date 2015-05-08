<html>
<head>
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="profile">
<?php
echo "Hello " . $name ."<br/>";
echo "Welcome to Admin Page". "<br/>"; 
echo "Your Username is " . $username. "<br/>";
echo "Your Email is " . $email. "<br/>";
echo "Your Password is " . $password. "<br/>";
echo "Your ID is " . $id. "<br/>";
Print_r($_SESSION);
?>
<b id="logout"><a href="logout">Logout</a></b>
</div>
</body>
</html>