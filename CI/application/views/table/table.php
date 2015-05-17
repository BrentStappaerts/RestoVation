<!DOCTYPE html>
<html>
<head>
    <title>Tafels</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
	<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
</style>
</head>
<body id="landingBody">

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


<div>
	<h1>Tafels (<a href="<?php echo base_url().'tables/edittable' ?>">bewerken</a>)</h1>
	<div id="infoMessage"><?php echo $message;?></div>
	<table>
		<?php
			foreach ($tables as $table):
                $id = $table['tafelid'];
				$number = $table['tafelnr'];
                $amount = $table['aantal'];
		?>
    	<tr>
            <td>
               <?php echo $id; ?><br />
                <?php echo $number; ?><br />
                <?php echo $amount; ?><br /><br />
                <?php
					echo form_open('tables/index');
                    echo form_hidden('tafelid', $id);
					echo form_hidden('tafelnr', $number);
					echo form_hidden('aantal', $amount);
					echo form_submit('action', 'Voeg toe');
					echo form_close();
				?>
			</td>
		</tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
