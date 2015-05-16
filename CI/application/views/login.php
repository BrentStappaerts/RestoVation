<html>

<head>
<title>Facebook login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
  body {background-color:lightgray}

  #reserveren {background-color: #808080;
                padding: 10px;}

  #reserveren a {color: white;
                 font-weight: bold;
                 text-decoration: none;
                 padding-left: 20px;}

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

<div class="container">
    <form>
        <?php if (@$user_profile): ?>
         <nav class="navbar navbar-default">
             <div class="container-fluid">
                <div class="navbar-header">
                     <a class="navbar-brand" href="#">RestoVation</a>
                </div>
                          <ul class="nav navbar-nav navbar-right">
                             <li>  <a href="<?=$user_profile['link']?>"><?=$user_profile['name']?></a></br></li>
                             <li><a href="<?= $logout_url ?>">Logout</a> </li>
                          </ul>
             </div>


            <div id="reserveren">
                <a href="<?= $reserveer_url ?>">Reserveren</a>
                <a href="http://www.igenerate.be">Reservatie bekijken</a>
            </div>
         </nav>
            <form action="" method="post" id="form_reserveren">
                <div class="padding">
                <label for="date">Datum</label>
                <input type="text" placeholder="dd-mm-jjjj" id="date" name="date">
            
                <label for="amountOfPeople">Aantal personen</label>
                <select name="amountOfPeople" id="amountOfPeople">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <button type="submit" id="controleer_btn">Controleren</button>
                 </div><!-- end padding -->
            </form>

        <?php else: ?>
        <h2>Reserveer een tafel of 2.</h2>hh
        <h3>Login met Facebook</h3>
        <a href="<?= $login_url ?>">Login</a> 
        <?php endif; ?>
    </form>
</div>


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</body>

</html>
