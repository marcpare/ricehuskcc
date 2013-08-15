<?php
function head(){?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Open Source design tools for rice husk gasification and combustion </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.1.0/pure-min.css">
      <link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="<?=route_css("main.css")?>">
      
  </head>

  <body>
  <?php include './analytics.php '; ?>
    
<?php
}

function content_start(){?>
  <div class="container">
    <div class="pure-g">
<?php
}

function content_end(){?>
 </div>
 </div> 
<?php
}

function left_bar(){?>
  <div class="pure-u-1-6">
    <div class="col">
    
    <h1>ricehusk.cc</h1>
    <img src="<?=route_img("rh.png")?>"></img>
    
    <p>Open Source design of clean energy from rice husk</p>
    
    <p class="callout">Currently running a 30-day design project for a new class of rice husk device.</p>
    
    <ul>
      <li><a href="">home</a></li>
      <li><a href=""><span class="good-boiler-logo">Good Boiler</span>  design</a></li>
      <!--
      <li><a href="">gasifier design tables</a></li>
      <li><a href="">physical properties</a></li>
      -->
    </ul>
    
    <h2>contributing</h2>
    
    <p>Contact me via email if you would like to contribute</p>
    
    <p><a href="mailto:marc@smallredtile.com">marc@smallredtile.com</a></p>
    
    <p>You can send pull requests for this site on Github</p>
    
    <p><img src="<?=route_img("octocat.png")?>"></img> <a href="https://github.com/marcpare/ricehuskcc">source code</a></p>
    
  </div>
  </div>
<?php
}

function right_bar(){?>
  <div class="pure-u-1-6">
    <div class="col">
    <h1>About</h1>
    <p>Rice husk, the outer shell of a grain of rice, is produced worldwide and generally considered a waste material. The particular physical properties of rice husk do not lend it to many applications. It is too fluffy to transport, is too widespread to charge for, and makes a poor fuel source.</p>
    <p>As a result, there are large, nearly free sources of rice husk is almost every country in the world. With appropriate devices, this resource could be used for clean cooking, cheap fuel, or electricity generation. The peculiar traits of rice husk also make it an interesting filtration medium and soil amendment.</p>
    <p>The knowledge for this sort of design is nearly lost. This site hopes to reclaim some of the knowledge before it disappears, as well as serve as a new hub for designers, tinkerers, and implementors.</p>
    </div>
  </div>
<?php
}

function center_start(){?>
  <div class="pure-u-2-3">
    <div class="col">
<?php
}

function center_end(){?>
   </div>
  </div>
<?php
}

function foot(){?>
  </body>
  </html>
<?php
}



?>