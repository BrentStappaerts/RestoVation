<!DOCTYPE html>
<html>
<head>
    <title>Menu Uitlezen</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'/>
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
 <div id="dashContainer7" class="dashContainer">
   <h2>Jouw gerechten:</h2>
    <table>
    <tr>
        <th>Naam:</th>
        <th>Type:</th>
        <th>Prijs in €:</th>
    </tr>
    
    <?php foreach($records as $row):?>
        <tr>
            <td><?=$row->gerechtnaam?></td>
            <td><?=$row->gerechttype?></td>
            <td><?=$row->gerechtprijs?> EUR</td>
        </tr>
    <?php endforeach;?>
    </table>
    <button type="button" name="btnAdd" id="btnAdd" value="Gerecht toevoegen" onclick="window.location.href='<?php echo base_url() ?>index.php/menu/adddish'">Gerecht toevoegen</button>
	</div> 
</body>
</html>
