<?php 
  include './master.inc.php'; 

  $day = $_GET['day'];

  head();
  content_start();  
  left_bar();  
  center_start();

function entry_start($index){

  $titles = array(
    "Introduction and Inspiration",
    "Product Paradoxes and the Origin of the Boiler Concept",
    "You Can't Burn Water",
    "Build It Now",
    "Rest, says William James",
    "Three Dimensional Scaling Factors",
    "Proxy Fuels for Prototyping",
    "Safety Third",
  );

  $captions = array(
    "Sunrise from my room in Battambang. December 2012",
    "Examples of the corrosion that brought me to Cambodia.",
    "Dr. Alexis Belonio, the inventor of the cylindrical rice husk gasifier",
    "Prototypes made at Georgia Tech from aluminum flashing and coffee cans. They melted after a few runs but taught us what we needed to know.",
    "William James just sitting and listening.",
    "Left: Increased diameter Cylindrical Gasifier made in Cambodia. Right: Normal diameter Gasifier made by Dr. Belonio",
    "It's easy to find testing fuel in the Mekong Delta",
    "Knock knock"
  );
  
  $dates = array(
    "August 14",
    "August 15",
    "August 16",
    "August 17",
    "August 18",
    "August 19",
    "August 20",
    "August 21"
  );
  
?>  

<div class="days">
<p><span class="days-day">DAY</span> <?=$index?> ∙ <?=$dates[$index-1]?>, 2013</p>
</div>

<h2><?=$titles[$index-1]?></h2>

<?= img_stretched("day".($index)."/header.jpg") ?>

<p class="caption"><?= $captions[$index-1] ?></p>

<?php    
}
  
?>

  <h1><span class="good-boiler-logo">Good Boiler</span> Design Log</h1>    
  
  <?php include "./goodboiler/{$day}.php"; ?>

<?php 
  center_end();
  right_bar();
  content_end();
  foot();
?>