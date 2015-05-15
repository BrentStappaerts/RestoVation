<!DOCTYPE html>
<html>
<head>
    <title>Tafels toevoegen</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
