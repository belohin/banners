<?php
require_once 'config.php';
require_once SMARTY_DIR . 'Smarty.class.php';
require_once 'user_income.php';
$smapp = new Smarty();
$smapp->setTemplateDir(TEMPLATE_DIR);
$smapp->setCacheDir(CACHE_DIR);
$smapp->setCompileDir(COMPILE_DIR);
$presentation_object = new User_income('modulebugbear@randomthings.com');
// Bár nincs környezet, azért paraméterként használom a megadott kulcsot
$smapp->assign('user_inc', $presentation_object);
$smapp->display('page_template.tpl');
?>