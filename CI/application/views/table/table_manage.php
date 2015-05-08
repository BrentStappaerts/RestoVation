<!DOCTYPE html>
<html>
<head>
    <title>Tafels</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
<style>
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}

#infoMessage p{
	padding: .8em;
	margin-bottom: 1em;
	border: 2px solid #ddd;
	background: #FFF6BF;
	color: #817134;
	border-color: #FFD324;
	text-align: center;
}
</style>
</head>
<body>

<table>
	<tr>
		<td><h2>Tafels (<a href="<?php echo base_url().'tables/index' ?>">Bekijk tafels</a>)</h2></td>
	</tr>
	<tr>
		<td><div id="infoMessage"><?php echo $message;?></div></td>
	</tr>
	<tr>
		<td><input name="New" type="button" value="Voeg toe" onclick="window.location='tables/index'" /></td>
	</tr>
</table>

<form name="frmproduct" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table>
		<tr>
			<th><strong>Tafel ID</strong></th>
			<th><strong>Nummer tafel</strong></th>
			<th><strong>Aantal tafels</strong></th>
			<th><strong>Bewerk</strong></th>
			<th><strong>Verwijder</strong></th>
		</tr>
		<?php
		foreach ($tables as $table){
			$id = $table['tafelid'];
		?>
			<tr>
				<td><?php echo $table['tafelid'] ?></td>
				<td><?php echo $table['tafelnummer'] ?></td>
				<td><?php echo $table['aantal'] ?></td>
				<td><a href='tables/edittable/<?php echo $id ?>'>Bewerk</a></td>
				<td>
					<?php 
						echo anchor('tables/deletetable'.$id, 'Verwijder', array('onClick' => "return confirm('Zeker dat u deze tafel wilt verwijderen?')"));
					?>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</form>
</body>
</html>
