<?php /* Smarty version 3.1.24, created on 2016-01-13 20:08:51
         compiled from "/var/www/html/banners/templates/page_template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3854622205696a0c33e8664_73626720%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa414e044cb4f5dcea6ffe8c093c65a6bac745c' => 
    array (
      0 => '/var/www/html/banners/templates/page_template.tpl',
      1 => 1452712114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3854622205696a0c33e8664_73626720',
  'variables' => 
  array (
    'user_inc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5696a0c340f9b2_00336290',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696a0c340f9b2_00336290')) {
function content_5696a0c340f9b2_00336290 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/banners/smarty/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '3854622205696a0c33e8664_73626720';
?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="banners.css" rel="stylesheet" />
    <title>Kereset-megjelenítő</title>
  </head>
  <body>
    <table class="container">
      <caption>
        <?php echo $_smarty_tpl->tpl_vars['user_inc']->value->username;?>
 bevételei bannerekből
      </caption>
      <tr>
        <td>
          <table class="cols">
            <tr>
              <th>napon</th>
              <th>bevétel</th>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <div class="scrollable">
            <table class="cols">
              <tfoot>
                <tr>
                  <td>Összesen</td>
                  <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['user_inc']->value->incomes[0]['kereset']);?>

                </tr>
              </tfoot>
              <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_inc']->value->incomes) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                  <tr class="<?php echo smarty_function_cycle(array('values'=>"odd, even"),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['user_inc']->value->incomes[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['napon'];?>
</td>
                    <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['user_inc']->value->incomes[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kereset']);?>
</td>
                  </tr>
                <?php endfor; endif; ?>
              </tbody>
            </table>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html><?php }
}
?>