<!DOCTYPE html>
<html>
<head>
    <title>Tafels toevoegen</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>

<h2>Tafels toevoegen</h2>
<div id="infoMessage"><?php echo $message;?></div>
<?php echo form_open("tables/addtable");?>
	<table>
		<tr>
			<td>Nummer tafel</td>
			<td><?php echo form_input($number);?></td>
		</tr>
		<tr>
			<td>Aantal personen</td>
			<td><?php echo form_input($amount); ?></td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td><?php echo form_submit('submit', 'Voeg toe');?><br/>
				<input type="button" name="btnBack" id="btnBack" value="Terug" onclick="window.location.href='<?php echo base_url() ?>index.php/tables/index'" /></td>
		</tr>
	</table>
<?php echo form_close(); ?>

</body>
</html>
