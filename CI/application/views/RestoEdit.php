<!DOCTYPE html>
<html>
<head>
    <title>Tafels</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/styles.css" type="text/css">
<style>
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
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
		<h2>Mijn Restaurants</h2><br/>

		
       
 <a href="<?php echo site_url("restaurant_toevoegen_controller/voeg_toe");?>">Nog een restaurant toevoegen.</a>

<form name="frmproduct" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table>
		<tr>
		<th><strong>ID</strong></th>
			<th><strong>Naam</strong></th>
			<th><strong>Adres</strong></th>
			<th><strong>Gemeente</strong></th>
			<th><strong>Postcode</strong></th>
			<th><strong>Telefoonnummer</strong></th>
			
		
		</tr>
		<?php
		foreach ($restos as $resto){
			
		?>
			<tr>
				<td><?php echo $resto['resto_id'] ?></td>
				<td><?php echo $resto['restaurantnaam'] ?></td>
				<td><?php echo $resto['adres'] ?></td>
				<td><?php echo $resto['gemeente'] ?></td>
				<td><?php echo $resto['postcode'] ?></td>
				<td><?php echo $resto['telefoonnummer'] ?></td>
				
			</tr>

		<?php
		//$this->db->select('resto_id, restaurantnaam, adres, gemeente, postcode, telefoonnummer');
		}
		?>
	</table>
</form>
</body>
</html>
