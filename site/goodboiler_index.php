<?php 
  include './master.inc.php'; 
  include './goodboiler/data.inc.php'; 

  head();
  content_start();  
  left_bar();  
  center_start();
  
?>

<div style="float:right; margin-left: 20px">
<img width="250" src="<?=route_img("kentandme.jpg")?>"></img>
<br>
<img width="250" src="<?=route_img("welding.jpg")?>"></img>
</div>

<h1><span class="good-boiler-logo">Good Boiler</span> Design Log</h1>    

<p>In December 2012, I visited Battambang Cambodia and encountered a vexing design problem. Here is my attempt to solve it.</p>

<p>This is a 30-day design project with no guarantee of success. Even if it fails, I hope the documentation and approach will be useful for others engaged in the design of technology for the developing world.</p>

<p>Everything here is Open Source and copying is highly encouraged. Please do contact me if you're interested. I would like to hear your thoughts and ideas. If this work inspires you to build something, send me a picture.</p>

<ul>
  <?php
  for($i=0; $i < count($titles); $i++){
    $day_index = $i+1;
    $title = 'Day '.$day_index.': '.$titles[$i];
    echo "<li><a href=\"day{$day_index}\">{$title}</a></li>";
  }
  ?>  
</ul>

<?php 
  center_end();
  content_end();
  foot();
?>