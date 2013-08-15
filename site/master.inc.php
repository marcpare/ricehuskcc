<?php

require 'ui.inc.php';
require 'routes.inc.php';
require 'class.config.php';

$config = Config::getConfig();

define('URL_ROOT', $_SERVER['HTTP_HOST'] . WEB_ROOT);
define('URL_IMG_ROOT', 'http://localhost:8888/ricehuskcc/img/');
define('URL_CSS_ROOT', 'http://localhost:8888/ricehuskcc/css/');

?>