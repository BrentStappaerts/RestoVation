<!DOCTYPE html>
<html>
<head>
    <title>Menu page</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>
    <?php echo form_open('menu_beheren/add_dish'); ?>
    <h1>Voeg een gerecht toe</h1>
    <?php echo form_label('Naam gerecht'); ?> <?php echo form_error('db_naam_gerecht'); ?>
    <?php echo form_input(array('id' => 'db_naam_gerecht', 'name' => 'db_naam_gerecht')); ?>
    
    <?php echo form_label('Type gerecht'); ?> <?php echo form_error('db_type_gerecht'); ?>
    <?php echo form_input(array('id' => 'db_type_gerecht', 'name' => 'db_type_gerecht')); ?>
    
    <?php echo form_label('Prijs'); ?> <?php echo form_error('db_prijs'); ?>
    <?php echo form_input(array('id' => 'db_prijs', 'name' => 'db_prijs')); ?>
    
    <?php echo form_submit(array('id' => 'submit', 'value' => 'Toevoegen'));?>
    <?php echo form_close(); ?>
    
    <?php foreach($query as $post):?>
     <ul>
         <li><?php echo $post->gerechtnaam; echo $post->gerechttype; echo $post->gerechtprijs;?></li>
      </ul>     
     <?php endforeach;?>  
     
</body>
</html>
