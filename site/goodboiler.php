<?php 
  include './master.inc.php'; 
  include './goodboiler/data.inc.php'; 

  $day = $_GET['day'];  
  $day_index = intval(substr($day, 3));
  
  if(!($day_index >= 1 && $day_index <= 30)){
    die('bad index');
  }
    
  $has_next = ($day_index < count($titles) );
  $has_prev = $day_index > 1;
  
  $next_link = "<span class=\"next\">&rarr; Next: Coming Soon</span>";
  if($has_next){
    $next_url = "day".($day_index+1);
    $next_title = $titles[$day_index];
    $next_link = "<a class=\"next\" href=\"{$next_url}\">&rarr; Next: {$next_title}</a>";
  }
  
  $prev_link = "<a class=\"prev\"></a>";
  if($has_prev){
    $prev_url = "day".($day_index-1);
    $prev_title = $titles[$day_index-2];
    $prev_link = "<a class=\"prev\" href=\"{$prev_url}\">&larr; Previous: {$prev_title}</a>";
  }
  
  head();
  content_start();  
  //left_bar();  
  
  center_start();

?>  
  
  <!-- entry header -->
  <h1><span class="good-boiler-logo">Good Boiler</span> Design Log</h1>    
  
  <div class="days">
  <p><span class="days-day">DAY</span> <?=$day_index?> ∙ <?=$dates[$day_index-1]?>, 2013</p>
  </div>

  <h2><?=$titles[$day_index-1]?></h2>

  <?= img_stretched("day".($day_index)."/header.jpg") ?>

  <p class="caption"><?= $captions[$day_index-1] ?></p>
  
  <!-- entry content -->
  <?php include "./goodboiler/{$day}.php"; ?>
  
  
  <!-- entry footer -->
  
  <div class="nextprev">
    <?php echo $prev_link?>
    <?php echo $next_link?>
<!--
  <a class="prev" href="day5">&larr; Previous: Rest, Says William James</a>
  <a class="next" href="day6">&rarr; Next: Coming Soon</a>
-->

  </div>
  
  <!-- clear fix hack -->
  <div style="clear:both"></div>
  
  <p>The <span class="good-boiler-logo">Good Boiler</span> design log is a real time document about things I find interesting as I undertake a real-life design project. I want it to be useful to others. So, please share, copy, and steal parts of it. Send me your feedback about the notes. Get in touch at <a href="mailto:marc@smallredtile.com">marc@smallredtile.com</a>.</p>

<?php 
  center_end();
  right_bar_start();

?>

  <!-- right bar content -->
  <h4>NAVIGATION</h4>
  <a href="<?=URL_ROOT?>goodboiler">Design Log Index</a>
  <br>
  <?php echo $next_link?>
  <br>
  <?php echo $prev_link?>
<!--
  <a class="next" href="day6">&rarr; Next: Coming Soon</a>
  <br>
  <a class="prev" href="day5">&larr; Previous: Rest, Says William James</a>
-->
<?php

  right_bar_end();

  content_end();
  foot();
?>