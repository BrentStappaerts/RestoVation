<html>
<head>
<title>Facebook login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css"/>
<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<style>
  body {background-color: #9b59b6;}

  #reserveren {background-color: #808080;
                padding: 10px;}

  #reserveren a {color: white;
                 font-weight: bold;
                 text-decoration: none;
                 padding-left: 20px;}

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

<div class="container">
    <form>
        <?php if (@$user_profile): ?>
         <nav class="navbar navbar-default">
             <div class="container-fluid">
                <div class="navbar-header">
                     <a class="navbar-brand" href="#" style="font-family: 'Berkshire Swash', cursive; font-size: 2.3em; color: black;">RestoVation</a>
                </div>
                          <ul class="nav navbar-nav navbar-right">
                             <li><a href="<?= $user_profile['link']?>"><?=$user_profile['name']?></a></br></li>
                             <li><a href="<?= $logout_url ?>" id="logoutAnch">Uitloggen</a> </li>
                          </ul>


        <div class='alert' style="display: none;"></div>
				<tr>
					<th style="width: 20%;">Naam</th>
					<th style="width: 3%;">Personen</th>
					<th style="width: 15%;">Datum</th>
					<th style="width: 10%;">Uur</th>
					<th>Tafelnr</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				
				<tr id="inputs_toevoegen">
					<form action="" method="post">
					<td><input type="text" id="reservatie_name" name="name"></td>
					<td><input type="text" id="reservatie_personen" name="personen"></td>
					<td><input type="text" id="reservatie_datum" name="datum" placeholder="dd-mm-jjjj"></td>
					<td><input type="text" id="reservatie_uur" name="uur"></td>
					<td><input type="text" id="reservatie_tafel" name="tafel"></td>
					<th class="nopadding white"><button type="submit" class="save"></button></th>
				</form>
				</tr>
    </div>

        <?php else: ?>
        <div id="landing">
			<div id="wrapper">
			<h1>RestoVation</h1>
			</div>
			<div id="wrapper_Wrapper">
			<h2>Reserveren en dineren met enkele klikken.</h2>
				<p>U wilt lekker uit eten vanavond maar uitpluizen welk restaurant in de buurt nog beschikbare tafels of reservaties heeft vindt u maar een lastig karwei?</p>
				<p><b>RestoVation</b> is een nieuwe dienst die je gemakkelijk toelaat eetgelegenheden te zoeken, online reserveren en via je mobiele telefoon bestellingen en gerechten door te geven. Zo is alles klaar wanneer je aankomt bij je eetgelegenheid.</p>
			<ul>
				<li>Online zoeken van restaurants/tavernes in u buurt.</li>
				<li>Gemakkelijk de beschikbare tafels controleren en reserveren.</li>
				<li>Bestel uw gerecht online, kom aan wanneer het klaar is.</li>
				<li>Slaag uw favoriete restaurants op onder uw favorieten.</li>
				<li>Lees recencies, geef waarderingen en help de rest naar een lekkere hap!</li>
			</ul>			
			<p>Voor het gebruik van RestoVation heeft u een account nodig. Dat kan gemakkelijk via Facebook.</p>
			<br>
			<div id="fbLandingLogin">
			<a href="<?= $login_url ?>">Log in met Facebook</a>
			</div>
			<h2>Eet smakelijk!</h3>
			
     		<p style="font-size: 0.799em";>Voor onze diensten voor restauranthouders of om in te loggen als restauranthouder, <a href="../user_authentication/user_login_show">klik</a> hier.<p>
      </div>
       </div>
        <?php endif; ?>
    </form>
</div>


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</body>

</html>
