<!--Pas deze pagina aan wanneer je wil, als er extra links nodig zijn. 
Gewoon binnen de site_url() verwijzen naar "controller/functie"-->

<?php  
$this->load->helper('url');
?>
<div class="row">
    <div class="span12">
     <ul class="nav nav-tabs"> 

       
          	<li> <a href="<?php echo site_url("fb_login/login");?>">home</a></li>
            <li> <a href="<?php echo site_url("fb_login/login");?>">Klant login</a></li>
            <li> <a href="<?php echo site_url("user_authentication/user_login_show");?>">Restaurant login</a></li>

 </div>
    </div>