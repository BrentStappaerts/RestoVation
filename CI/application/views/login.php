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

#reserveer{
  padding: 10px;
}

#reservatie_name{
  margin-left: 84px;
}

#reservatie_phone{
  margin-top: 10px;
  margin-left: 10px;
}
#reservatie_datum{
  margin-top: 10px;
  margin-left: 80px;
}
#reservatie_uur{
  margin-top: 10px;
  margin-left: 76px;
}
#reservatie_aantal{
  margin-top: 10px;
  margin-left: 14px;
}
.save{
  margin-top: 10px;
}


</style>
</head>

<body id="landingBody">
<!-- Deze code bovenaan body plakken. Zie dat bootstrap gelinked is in de view -->

<?php 
if($this->session->userdata('__ci_last_regenerate'))
   {
     
     include_once(APPPATH.'/views/MainNav.php');//Als klant ingelogged is deze menu tonen.
   
   }
   else
   {
     include_once(APPPATH.'/views/MainNav.php');//als niet ingelogged zijn inlog navigatie tonen.
     
   }
 ?>
 <!-- Navigatie code tot hier -->

<div class="container" style="min-width: 560px; max-width: 560px;">
    <form>
        <?php if (@$user_profile): ?>
         <nav class="navbar navbar-default">
             <div class="container-fluid">
                <div class="navbar-header">
                     <a class="navbar-brand" href="#" style="font-family: 'Berkshire Swash', cursive; font-size: 2.3em; color: black; mùrgin-bottom: -10px;">RestoVation</a>
                </div>
                          <ul class="nav navbar-nav navbar-right">
                             <li><a href="<?= $user_profile['link']?>"><?=$user_profile['name']?></a></br></li>
                             <li><a href="<?= $logout_url ?>" id="logoutAnch">Uitloggen</a> </li>
                          </ul>

                            
</br></br>
      <div id="reserveer">
        <h1 style="font-family: 'Yanone Kaffeesatz', sans-serif; margin-top:">Tafel reserveren</h1>
          <form action="" method="post">
            <label>Naam: </label>
                <span style="float: right;"><?=$user_profile['name']?></span>
                <br>
			<label for="" style="margin-top: -5px; padding-bottom: 5px; font-size: 0.7em; color: grey;">(Reservaties gebeuren <b>altijd</b> op uw naam.)</label>
                 </br>
            <label>Telefoonnummer: </label>
                <input type="int" id="reservatie_phone" name="datum" placeholder="0497719633" style="float: right;">
                </br>
                <br>
            <label>Datum: </label>
                <input type="text" id="reservatie_datum" name="datum" placeholder="dd-mm-jjjj" style="float: right;">
                </br>
                <br>
            <label>Tijdstip: </label>   
                <input type="text" id="reservatie_uur" name="uur" placeholder="13:00" style="float: right;"></br>
                <br>
            <label>Aantal personen: </label>   
                <input type="text" id="reservatie_aantal" name="tafel" placeholder="7" style="float: right;"></br>
                <br>
          <button type="submit" class="save">Reserveren</button>
        </form>
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