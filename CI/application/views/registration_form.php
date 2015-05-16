<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
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
<div id="main">
<div id="login">
<h2>Registration Form</h2>

<?php
if (isset($message_display)) {
echo "<div class='error_msg'>";
echo $message_display;
echo validation_errors();
echo "</div>";
};
echo form_open('user_authentication/new_user_registration');

	echo form_label('Naam: ');
	echo form_input('naam');
	echo form_label('Voornaam: ');
	echo form_input('voornaam');
	echo form_label('Gebruikersnaam: ');
	echo form_input('gebruikersnaam');
	echo form_label('Email: ');

	$data = array(
	'type' => 'email',
	'name' => 'email_value'
	);

	echo form_input($data);
	echo form_label('Passwoord: ');
	echo form_password('passwoord');
	echo form_submit('submit', 'Sign Up');
	echo form_close();
?>
</div>
</div>
</body>
</html>