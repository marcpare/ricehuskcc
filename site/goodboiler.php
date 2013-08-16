<?php 
  include './master.inc.php'; 

  $day = $_GET['day'];

  head();
  content_start();  
  left_bar();  
  center_start();
?>

  <h1><span class="good-boiler-logo">Good Boiler</span> Design Log</h1>    
  <?php include "./goodboiler/{$day}.php"; ?>

<?php 
  center_end();
  right_bar();
  content_end();
  foot();
?>