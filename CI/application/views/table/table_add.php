<!DOCTYPE html>
<html>
<head>
    <title>Tafels toevoegen</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
</head>
<body id="landingBody">
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
 <div id="dashContainer1" class="dashCont">
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
	<span class="fillerPadding"></span>
<?php echo form_close(); ?>
</div>

</body>
</html>
