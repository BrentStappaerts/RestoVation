<!--Pas deze pagina aan wanneer je wil, als er extra links nodig zijn. 
Gewoon binnen de site_url() verwijzen naar "controller/functie"-->

<?php  
$this->load->helper('url');
?>
<div class="row">
    <div class="span12">
     <ul class="nav nav-tabs"> 

          	<li> <a id="firstAnch" href="<?php echo site_url("fb_login/login");?>">Home</a></li>
            <li> <a href="<?php echo site_url("user_authentication/user_login_show");?>">Log in als restauranthouder</a></li>

 </div>
    </div>