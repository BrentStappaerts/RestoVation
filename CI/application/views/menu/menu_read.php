<!DOCTYPE html>
<html>
<head>
    <title>Menu Uitlezen</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>
<!-- Deze code bovenaan body plakken. Zie dat bootstrap gelinked is in de view -->
<?php 
 if($this->session->userdata('logged_in'))
   {
     
     include_once('MainNav.php');//Als admin ingelogged is deze menu tonen.
   
   }
   else
   {
     include_once('MainNav.php');//als niet ingelogged zijn inlog navigatie tonen.
     
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
 
</body>
</html>
