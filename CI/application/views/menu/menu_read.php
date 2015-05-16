<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
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
 
    <table>
    <tr>
        <th>Naam</th>
        <th>Type</th>
        <th>Prijs in €</th>
    </tr>
    
    <?php foreach($records as $row):?>
        <tr>
            <td><?=$row->gerechtnaam?></td>
            <td><?=$row->gerechttype?></td>
            <td><?=$row->gerechtprijs?></td>
        </tr>
    <?php endforeach;?>
    </table>
    <input type="button" name="btnAdd" id="btnAdd" value="Gerecht toevoegen" onclick="window.location.href='<?php echo base_url() ?>index.php/menu/adddish'"/>
 
</body>
</html>
