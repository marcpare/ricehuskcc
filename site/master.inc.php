<?php

require 'ui.inc.php';
require 'routes.inc.php';
require 'class.config.php';

$config = Config::getConfig();

define('WEB_ROOT', $config->web_root);
define('URL_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/' . WEB_ROOT);
define('URL_IMG_ROOT', URL_ROOT . 'img/');
define('URL_CSS_ROOT', URL_ROOT . 'css/');

?>