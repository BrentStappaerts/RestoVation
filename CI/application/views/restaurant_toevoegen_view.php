<!DOCTYPE html>
<html>
<head>
    <title>Add restaurant</title>
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
   <div id="dashContainer4" class="dashContainer">
    <?php echo form_open('restaurant_toevoegen_controller/voeg_toe'); ?>
    <h2>Crëeer een nieuw restaurant.</h1>
    <br>
    <?php echo form_label('Naam restaurant: '); ?> <?php echo form_error('db_restaurantnaam'); ?>
    <?php echo form_input(array('id' => 'db_restaurantnaam', 'name' => 'db_restaurantnaam')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo form_label('Adres: '); ?> <?php echo form_error('db_adres'); ?>
    <?php echo form_input(array('id' => 'db_adres', 'name' => 'db_adres')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo form_label('Gemeente: '); ?>
    <?php echo form_error('db_gemeente'); ?>
    <?php echo form_input(array('id' => 'db_gemeente', 'name' => 'db_gemeente')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo form_label('Postcode: '); ?> <?php echo form_error('db_postcode'); ?>
    <?php echo form_input(array('id' => 'db_postcode', 'name' => 'db_postcode')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo form_label('Telefoonnummer: '); ?> <?php echo form_error('db_telefoonnummer'); ?>
    <?php echo form_input(array('id' => 'db_telefoonnummer', 'name' => 'db_telefoonnummer')); ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>    
    <?php echo form_button(array('id' => 'submit', 'value' => 'Toevoegen', 'content' => 'Restaurant toevoegen', 'type' => 'submit'));?>
    <?php echo form_close(); ?>  

 
   <a href="<?php echo site_url("restaurant_toevoegen_controller/index");?>">Restaurants Bekijken</a>
	</div>

</body>
</html>