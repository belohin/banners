<?php
define('SITE_ROOT', dirname(__FILE__) . '/');
define('SMARTY_DIR', SITE_ROOT . 'smarty/');
define('TEMPLATE_DIR', SITE_ROOT . 'templates');
define('COMPILE_DIR', SITE_ROOT . 'templates_c');
define('CACHE_DIR', SITE_ROOT . 'cache');
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'host');       // aktualizálandó
define('DB_USERNAME', 'username'); // aktualizálandó
define('DB_PASSWORD', 'password'); // aktualizálandó
define('DB_DATABASE', 'database'); // aktualizálandó
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE . ';charset=utf8');
?>