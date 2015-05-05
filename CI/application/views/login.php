<html>

<head>
<title>Facebook login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="container">
    <form>
        <?php if (@$user_profile): ?>
        <h2><?=$user_profile['name']?></h2>
        <a href="<?=$user_profile['link']?>">View Profile</a>
        <a href="<?= $logout_url ?>">Logout</a> 
        <?php else: ?>
        <h2>Login met Facebook</h2>
        <a href="<?= $login_url ?>">Login</a> 
        <?php endif; ?>
    </form>
</div>

</body>

</html>
