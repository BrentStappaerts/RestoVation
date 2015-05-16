<!DOCTYPE html>
<html>
<head>
    <title>Tafels</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
<style type="text/css">
#infoMessage p{
	padding: .8em;
	margin-bottom: 1em;
	border: 2px solid #ddd;
	background: #FFF6BF;
	color: #817134;
	border-color: #FFD324;
}
</style>
</head>

<body>
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
