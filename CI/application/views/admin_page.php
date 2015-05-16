<html>
<head>
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="../resources/css/styles.css" type="text/css">
</head>
<body>
<!-- Deze code bovenaan body plakken. Zie dat bootstrap gelinked is in de view -->

<?php 
 if(null !==($this->session->userdata('logged_in')))
   {
     
     include_once(APPPATH.'/views/AdminNav.php');//Als admin ingelogged is deze menu tonen.
   
   }
   else
   {
     include_once(APPPATH.'/views/MainNav.php');//als niet ingelogged zijn inlog navigatie tonen.
     
   }
 ?>
 <!-- Navigatie code tot hier -->
 
<div id="profile">
<?php
echo "<p>Hallo " . $name ."</p>";
echo "<p>Welkom bij restovation!". "</p>"; 
echo "<p>Gebruik bovenstaande menu om je restaurant te beheren.". "</p>"; 
echo "<p>Bewerk je menu.". "</p>"; 
echo "<p>Beheer je tafelbezetting,...". "</p>"; 

?>
<b id="logout"><a href="logout">Klik hier om uit te loggen.</a></b>
</div>
</body>
</html>