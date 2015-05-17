<!DOCTYPE html>
<html>
<head>
    <title>Menu insert</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
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
 <div id="dashContainer6" class="dashContainer">
    <?php echo form_open('menu/adddish'); ?>
    <h2>Voeg een gerecht toe</h1>
    <br>
    <?php echo form_label('Naam gerecht'); ?> <?php echo form_error('db_naam_gerecht'); ?>
    <?php echo form_input(array('id' => 'db_naam_gerecht', 'name' => 'db_naam_gerecht')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo form_label('Type gerecht'); ?> <?php echo form_error('db_type_gerecht'); ?>
    <?php echo form_input(array('id' => 'db_type_gerecht', 'name' => 'db_type_gerecht')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo form_label('Prijs'); ?> <?php echo form_error('db_prijs'); ?>
    <?php echo form_input(array('id' => 'db_prijs', 'name' => 'db_prijs')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo form_button(array('id' => 'submit', 'value' => 'Toevoegen', 'type'=>'submit', 'content'=>'Gerecht toevoegen'));?>
    <?php echo form_close(); ?> 
    <button type="button" name="btnBack" id="btnBack" value="Terug" onclick="window.location.href='<?php echo base_url() ?>index.php/menu/index'">Terug</button> 
	</div>
</body>

</html>