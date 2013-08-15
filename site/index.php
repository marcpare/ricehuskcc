<?php 
  require './master.inc.php'; 
  
  head();
  content_start();
  
  left_bar();  
  center_start();
?>

  <h1><span class="good-boiler-logo">Good Boiler</span> Design Log</h1>    
  <?php include './goodboilerlog/day1.php'; ?>

<?php 
  center_end();
  right_bar();

  content_end();
  foot();
?>