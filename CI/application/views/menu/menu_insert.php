<!DOCTYPE html>
<html>
<head>
    <title>Menu insert</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
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
 
    <?php echo form_open('menu/adddish'); ?>
    <h1>Voeg een gerecht toe</h1>
    <?php echo form_label('Naam gerecht'); ?> <?php echo form_error('db_naam_gerecht'); ?>
    <?php echo form_input(array('id' => 'db_naam_gerecht', 'name' => 'db_naam_gerecht')); ?>
    
    <?php echo form_label('Type gerecht'); ?> <?php echo form_error('db_type_gerecht'); ?>
    <?php echo form_input(array('id' => 'db_type_gerecht', 'name' => 'db_type_gerecht')); ?>
    
    <?php echo form_label('Prijs'); ?> <?php echo form_error('db_prijs'); ?>
    <?php echo form_input(array('id' => 'db_prijs', 'name' => 'db_prijs')); ?>
    
    <?php echo form_submit(array('id' => 'submit', 'value' => 'Toevoegen'));?>
    <?php echo form_close(); ?>  
</body>
</html>