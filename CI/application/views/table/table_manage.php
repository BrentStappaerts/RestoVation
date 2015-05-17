<!DOCTYPE html>
<html>
<head>
    <title>Tafels</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
	<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<!--
<style>
table, td, th
{
border:1px solid green;
}
th
{
background-color: #16a085;
color:white;
	margin: 5px;
}

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
-->
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
 <div class="dashContainer" id="dashContainer1">
		<h2>Tafels</h2>    
		<?php
			if (isset($message)) {
			echo "<div class='message'>";
			echo $message;
			echo "</div>";
			echo "<br>";
			echo "<br>";
			}
		?>
   <button name="New" type="button" value="Tafel toevoegen" onclick="window.location='addtable'">Tafel toevoegen</button>
<form name="frmproduct" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table>
		<tr>
			<th style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size: 1.2em"><strong>Tafel ID&nbsp;</strong>
			</th>
			<th style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size: 1.2em"><strong>&nbsp;Nummer tafel&nbsp;</strong>
			</th>
			<th style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size: 1.2em"><strong>&nbsp;Aantal tafels&nbsp;</strong>
			</th>
			<th style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size: 1.2em"><strong>&nbsp;Bewerk&nbsp;</strong>
			</th>
			<th style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size: 1.2em"><strong>&nbsp;Verwijder&nbsp;</strong>
			</th>
			<hr>
		</tr>
		<?php
		foreach ($tables as $table){
			$id = $table['tafelid'];
		?>
			<tr>
				<td style="padding-left: 5px;"><?php echo $table['tafelid'] ?></td>
				<td style="padding-left: 5px;"><?php echo $table['tafelnr'] ?></td>
				<td style="padding-left: 5px;"><?php echo $table['aantal'] ?></td>
				<td style="padding-left: 5px;"><a href='edittable/<?php echo $id ?>'>Bewerk</a></td>
				<td style="padding-left: 5px;">
					<?php 
						echo anchor('tables/deletetable/'.$id, 'Verwijder', array('onClick' => "return confirm('Zeker dat u deze tafel wilt verwijderen?')"));
					?>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</form>
</div>
</body>
</html>
