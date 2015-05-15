<!--Pas deze pagina aan wanneer je wil, als er extra links nodig zijn. 
Gewoon binnen de site_url() verwijzen naar "controller/functie"-->
<?php 

$this->load->helper('url');
?>
<div class="row">
    <div class="span12">
     <ul class="nav nav-tabs"> 



            <li> <a href="<?php echo site_url("user_authentication/user_login_show");?>">Home</a></li>
          	<li> <a href="<?php echo site_url("menu/addDish");?>">Menu Beheren</a></li>
          	<li> <a href="<?php echo site_url("restaurant_toevoegen_controller/voeg_toe");?>">Restaurant Beheren</a></li>
          	<li> <a href="<?php echo site_url("tables/index");?>">Tafels Beheren</a></li>
            <li> <a href="<?php echo site_url("user_authentication/user_login_show");?>">Profiel</a></li>
            <li> <a href="<?php echo site_url("user_authentication/Logout");?>">Logout</a></li>
            <div id="profile">


    </ul>
    </div>
    </div>