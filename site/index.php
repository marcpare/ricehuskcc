<?php 
  require './master.inc.php'; 
  
  head();
  content_start();
  
  left_bar();  
  center_start();
?>

  <p>
  <img width="770" src="<?=route_img("ricehuskbag.jpg")?>"></img>
  </p>

  <p class="callout">Currently running a 30-day design project for the <a href="goodboiler"><span class="good-boiler-logo">good boiler</span></a></p>
  
  <h2>About</h2>
  <p>Rice husk, the outer shell of a grain of rice, is produced worldwide and generally considered a waste material. The particular physical properties of rice husk do not lend it to many applications.</p>
  
  <p>As a result, there are large, nearly free sources of rice husk is almost every country in the world. With appropriate devices, this resource could be used for clean cooking, cheap fuel, or electricity generation. The peculiar traits of rice husk also make it a unique filtration medium and soil amendment.</p>
  <p>The knowledge for this sort of design is nearly lost. This site hopes to reclaim some of the knowledge before it disappears, as well as serve as a new hub for designers, tinkerers, and implementors.</p>
  
  <p class="centered">
  <img src="<?=route_img("gabrino.png")?>"></img>
  </p>
  
  <h2>Open Source</h2>
  <p>You can send pull requests for this site on Github</p>

   <p><img src="<?=route_img("octocat.png")?>"></img> <a href="https://github.com/marcpare/ricehuskcc">source code</a></p>

<?php 
  center_end();
  right_bar();

  content_end();
  foot();
?>