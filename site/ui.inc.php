<?php

function footnote_link($index, $name){
  $labels = array(" ①", "②", "③", "④", "⑤", "⑥", "⑦", "⑧", "⑨", "⑩");
  $label = $labels[$index-1];
  echo "<a href=\"#{$name}\">{$label}</a>";
  
}

function img_fn($filename){ return fn_img($filename); }
function fn_img($filename){
  return img(route_img($filename));
}

function img($src, $class=""){
  return "<img src=\"{$src}\" class=\"{$class}\"></img>";
}

function img_caption($text){
  return "<p class=\"caption\">{$text}</p>";
}

function img_stretched($fn, $caption=false){
  echo img(route_img($fn), "stretched");
  if($caption){
    echo img_caption($caption);    
  }  
}

function head(){?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Open Source design tools for rice husk gasification and combustion </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/favicon.ico" type="image/x-icon">

      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.1.0/pure-min.css">
      <link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="<?=route_css("main.css")?>">
      
  </head>

  <body>
  <?php include './analytics.php'; ?>
  
  <div class="container">
  
  <!--<img src="<?=route_img("logo.png")?>"></img>-->
  <h1 class="logo">ricehusk.cc</h1>
  <p class="logo-text">Open Source design of clean energy from rice husk</p>
  
  <img width="140" src="<?=route_img("rh.png")?>"></img>
  
  <div class="menu">
  <ul>
    <li class="page-item current-page-parent"><a href="/<?=WEB_ROOT?>">home</a></li>
    <li class="page-item"><a href="<?=URL_ROOT?>goodboiler">design log</a></li>
    <li class="page-item"><a href="mailto:marc@smallredtile.com">contact email</a></li>
  </ul>
  </div>
    
<?php
}

function content_start(){?>
    <div class="content">
<?php
}

function content_end(){?>
 </div>
 </div> 
<?php
}

function left_bar(){?>
  <div class="left-bar">
    <div class="col">
    
    <!--
    <ul>
      <li><a href="/<?=WEB_ROOT?>">home</a></li>
      <li><a href="<?=URL_ROOT?>goodboiler"><span class="good-boiler-logo">Good Boiler</span>  design</a></li>
      <li><a href="">gasifier design tables</a></li>
      <li><a href="">physical properties</a></li>
    </ul>
    -->
    
    <!--
    <h3>contributing</h3>
    
    <p>Contact me via email if you would like to contribute</p>
    
    <p><a href="mailto:marc@smallredtile.com">marc@smallredtile.com</a></p>
    -->
    
    
    
  </div>
  </div>
<?php
}

function right_bar_start(){?>
  <div class="right-bar">
<?php
}

function right_bar_end(){?>
  </div>
<?php
}

function center_start(){?>
  <div class="center">
    <div class="">
<?php
}

function center_end(){?>
   </div>
  </div>
<?php
}

function foot(){?>
  <script type="text/x-mathjax-config">
    MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
  </script>
  <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
  </body>
  </html>
<?php
}



?>