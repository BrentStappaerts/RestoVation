<!DOCTYPE html>
<html>
<head>
    <title>Add restaurant</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>
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
</body>
</html>