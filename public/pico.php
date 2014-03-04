<?php

date_default_timezone_set('Europe/Paris');

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR );
define('CONTENT_EXT', '.md');
define('LIB_DIR', ROOT_DIR .'../pico/lib/');
define('PLUGINS_DIR', ROOT_DIR .'plugins/');
define('THEMES_DIR', ROOT_DIR .'themes/');
define('CACHE_DIR', ROOT_DIR .'../cache/');

require(ROOT_DIR .'../pico/vendor/autoload.php');
require(LIB_DIR .'pico.php');
$pico = new Pico();
