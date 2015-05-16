<!DOCTYPE html>
<html>
<head>
    <title>Add restaurant</title>
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
    <?php echo form_open('restaurant_toevoegen_controller/voeg_toe'); ?>
    <h1>Crëeer een nieuw restaurant.</h1>
    <?php echo form_label('Naam restaurant'); ?> <?php echo form_error('db_restaurantnaam'); ?>
    <?php echo form_input(array('id' => 'db_restaurantnaam', 'name' => 'db_restaurantnaam')); ?>
    
    <?php echo form_label('Adres'); ?> <?php echo form_error('db_adres'); ?>
    <?php echo form_input(array('id' => 'db_adres', 'name' => 'db_adres')); ?>
    
    <?php echo form_label('Gemeente'); ?> <?php echo form_error('db_gemeente'); ?>
    <?php echo form_input(array('id' => 'db_gemeente', 'name' => 'db_gemeente')); ?>

    <?php echo form_label('Postcode'); ?> <?php echo form_error('db_postcode'); ?>
    <?php echo form_input(array('id' => 'db_postcode', 'name' => 'db_postcode')); ?>

    <?php echo form_label('telefoonnummer'); ?> <?php echo form_error('db_telefoonnummer'); ?>
    <?php echo form_input(array('id' => 'db_telefoonnummer', 'name' => 'db_telefoonnummer')); ?>
    
    <?php echo form_submit(array('id' => 'submit', 'value' => 'Toevoegen'));?>
    <?php echo form_close(); ?>  

 
   <a href="<?php echo site_url("restaurant_toevoegen_controller/index");?>">Restaurants Bekijken</a>

</body>
</html>