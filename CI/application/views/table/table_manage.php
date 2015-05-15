<!DOCTYPE html>
<html>
<head>
    <title>Tafels</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
		<h2>Tafels</h2><br/>

		<div id="infoMessage"><?php echo $message;?></div>
       
        <input name="New" type="button" value="Tafel toevoegen" onclick="window.location='addtable'" />

<form name="frmproduct" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table>
		<tr>
			<th><strong>Tafel ID</strong></th>
			<th><strong>Nummer tafel</strong></th>
			<th><strong>Aantal tafels</strong></th>
			<th><strong>Bewerk</strong></th>
			<th><strong>Verwijder</strong></th>
		</tr>
		<?php
		foreach ($tables as $table){
			$id = $table['tafelid'];
		?>
			<tr>
				<td><?php echo $table['tafelid'] ?></td>
				<td><?php echo $table['tafelnr'] ?></td>
				<td><?php echo $table['aantal'] ?></td>
				<td><a href='edittable/<?php echo $id ?>'>Bewerk</a></td>
				<td>
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
</body>
</html>
