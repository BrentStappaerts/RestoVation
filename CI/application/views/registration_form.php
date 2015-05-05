<html>
<head>
<title>Registration Form</title>


</head>
<body>
<div id="main">
<div id="login">
<h2>Registration Form</h2>
<?php

echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo form_open('user_authentication/new_user_registration');
echo form_label('Naam : ');
echo form_input('naam');
echo form_label('Voornaam : ');
echo form_input('voornaam');
echo form_label('Kies restaurantnaam : ');
echo form_input('gebruikersnaam');

echo form_label('Straat: ');
echo form_input('straat');

echo form_label('Huisnummer : ');
echo form_input('huisnummer');

echo form_label('Gemeente : ');
echo form_input('gemeente');

echo form_label('Telefoonnummer: ');
echo form_input('telefoonnummer');

echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
echo form_label('Email : ');
$data = array(
'type' => 'email',
'name' => 'email_value'
);
echo form_input($data);
echo form_label('Passwoord : ');
echo form_password('passwoord');
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
</div>
</div>
</body>
</html>