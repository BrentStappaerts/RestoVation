<!DOCTYPE html>
<html>
<head>
    <title>Bewerk restaurants</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
	<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<style type="text/css">
#infoMessage p{
	padding: .8em;
	margin-bottom: 1em;
	border: 2px solid #ddd;
	background: #FFF6BF;
	color: #817134;
	border-color: #FFD324;
	text-align: center;
}
</style>
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
 <div id="dashContainer3" class="dashContainer">
<h2>Restaurant bewerken</h2>
<button style="display: inline-block; margin-right: 15px; width: 70px; margin-bottom: 15px;" type="button" name="btnBack" id="btnBack" value="Terug" onclick="window.location.href='<?php echo base_url() ?>index.php/restos/index'">Terug</button>

<?php
			if (isset($message)) {
			echo "<div class='message'>";
			echo $message;
			echo "</div>";
			echo "<br>";
			echo "<br>";
			}
		?>

    <?php $id = $resto['resto_id']; ?>
    <?php echo form_open("restos/editresto/$id");?>
        <table>
            <tr>
                <td>Naam restaurant</td>
                <td><?php echo form_input($name);?></td>
            </tr>
            <tr>
                <td>Adres</td>
                <td><?php echo form_input($adress);?></td>
            </tr>
            <tr>
                <td>Gemeente</td>
                <td><?php echo form_input($city);?></td>
            </tr>
            <tr>
                <td>Postcode</td>
                <td><?php echo form_input($area);?></td>
            </tr>
            <tr>
                <td>Telefoonnummer</td>
                <td><?php echo form_input($telephone);?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><?php echo form_submit('submit', 'Bewaar');?>
                </td>
            </tr>
        </table>
    <?php echo form_close(); ?>
    </div>
</body>
</html>
</html>
