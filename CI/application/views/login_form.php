<html>
<head>
<title>Log in</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

</head>
<body id="landingBody">

<!-- Deze code bovenaan body plakken. Zie dat bootstrap gelinked is in de view -->
<?php 
 if($this->session->userdata('logged_in'))
   {
     
     include_once('MainNav.php');//Als admin ingelogged is deze menu tonen.
   
   }
   else
   {
     include_once('MainNav.php');//als niet ingelogged zijn inlog navigatie tonen.
     
   }
 ?>
 <!-- Navigatie code tot hier -->
<?php
$this->load->helper('security');
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
echo "<br>";
echo "<br>";
}
?>
<div id="main">
<div id="login">
<h2 style="font-family: 'Berkshire Swash', cursive;">Inloggen:</h2>
<?php echo form_open('user_authentication/user_login_process'); ?>
<?php
if (isset($error_message)) {
	echo "<div class='error_msg'>";
	echo $error_message;
	echo validation_errors();
	echo "</div>";
	echo "<br>";
	echo "<br>";
}

?>
<form action="">
<label>Gebruikersnaam:</label>
<input type="text" name="username" id="name" placeholder="Gebruikersnaam" required/>
<br>
<br>
<label>Wachtwoord:</label>
<input type="password" name="password" id="password" placeholder="**********" required/>
<br>
<br>
<button type="submit" value=" Login " name="submit">Log in</button>
<span>Nog geen account? <a href="user_registration_show">Registreer</a> je hier</span>
</form>

<?php echo form_close(); ?>
</div>
</div>
</body>
</html>