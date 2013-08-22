<?php 
  include './master.inc.php'; 

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
  <li><a href="day1">Day 1: Introduction and Inspiration</a></li>
  <li><a href="day2">Day 2: Product Paradoxes and the Origin of the Boiler
  <li><a href="day3">Day 3: You Can't Burn Water</a></li>
  <li><a href="day4">Day 4: Build It Now</a></li>
  <li><a href="day5">Day 5: Rest, says William James</a></li>
  <li><a href="day6">Day 6: Three Dimensional Scaling Factors</a></li>
  <li><a href="day7">Day 7: Proxy Fuels for Prototyping</a></li>
  <li><a href="day8">Day 8: Safety Third</a></li>
</ul>

<?php 
  center_end();
  right_bar();
  content_end();
  foot();
?>