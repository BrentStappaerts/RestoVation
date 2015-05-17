<!DOCTYPE html>
<html>
<head>
    <title>Bewerk tafels</title>
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
<h2>Tafel bewerken</h2>
<div id="infoMessage"><?php echo $message;?></div>

    <?php $id = $table['tafelid']; ?>
    <?php echo form_open("tables/edittable/$id");?>
        <table>
            <tr>
                <td>Nummer tafel</td>
                <td><?php echo form_input($number);?></td>
            </tr>
            <tr>
                <td> Aantal personen</td>
                <td><?php echo form_input($amount);?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><?php echo form_submit('submit', 'Bewaar');?>
                    <input type="button" name="btnBack" id="btnBack" value="Terug" onclick="window.location.href='<?php echo base_url() ?>index.php/tables/index'"/>
                </td>
            </tr>
        </table>
    <?php echo form_close(); ?>
</body>
</html>
</html>
