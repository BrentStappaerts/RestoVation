<!--Pas deze pagina aan wanneer je wil, als er extra links nodig zijn. 
Gewoon binnen de site_url() verwijzen naar "controller/functie"-->
<?php 

$this->load->helper('url');
?>
<div class="row">
    <div class="span12">
     <ul class="nav nav-tabs"> 



            <li> <a id="firstAnch" href="<?php echo site_url("fb_login/login");?>">Home</a></li>
          	<li> <a href="<?php echo site_url("menu/index");?>">Menu Beheren</a></li>
          	<li> <a href="<?php echo site_url("restos/index");?>">Restaurant Beheren</a></li>
          	<li> <a href="<?php echo site_url("tables/index");?>">Tafels Beheren</a></li>
            <li id="lastAnch"> <a  href="<?php echo site_url("user_authentication/Logout");?>">Logout</a></li>
            <div id="profile">


    </ul>
    </div>
    </div>