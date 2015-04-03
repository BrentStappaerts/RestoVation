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
echo form_label('Name : ');
echo form_input('name');
echo form_label('Surname : ');
echo form_input('surname');
echo form_label('Create Username : ');
echo form_input('username');
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
echo form_label('Password : ');
echo form_password('password');
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
</div>
</div>
</body>
</html>