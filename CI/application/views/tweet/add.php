<!DOCTYPE html>
<html>
<head>
	<title>Add new tweet</title>
</head>
<body>
	<form action"" method="post">
	<input type="text" name="tweet" placeholder="new tweet" />
	<button type="submit">Save tweet</button>
	</form>


<!-- list met tweets -->
<?php foreach($tweets as $t):?>

<?php echo "<p>" . $t['text'] . "</p>" ;?>

 <?php endforeach; ?>

</body>
</html>