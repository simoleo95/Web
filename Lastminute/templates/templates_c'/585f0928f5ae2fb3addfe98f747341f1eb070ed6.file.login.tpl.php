<?php /* Smarty version Smarty-3.1.13, created on 2017-10-23 18:22:23
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2813859eb587d618de1-83580727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '585f0928f5ae2fb3addfe98f747341f1eb070ed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\login.tpl',
      1 => 1508775443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2813859eb587d618de1-83580727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59eb587d639165_08140727',
  'variables' => 
  array (
    'errore' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb587d639165_08140727')) {function content_59eb587d639165_08140727($_smarty_tpl) {?><form method="post" action="index.php">
    <p class="lead" style="text-align: center;">Login</p>
    <!--Gestione errori-->
    <input type="hidden" name="controller" value="log" />
    <input type="hidden" name="task" value="registra" />
    <p id="error"><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</p>

    <div class="list-group">
        <input style="width:100%;" required class="field list-group-item" type="text" placeholder="Username" name="username"/>
        <input style="width:100%;" required class="field list-group-item" type="password" placeholder="Password" name="password"/>
        <br>
        <input style="width:100%;background:#ddd;" class="button list-group-item" type="submit" value="Login" />
        <p style="text-align: center; margin-top: 10px;">Non hai un account? <a href="Registrazione">Registrati</a></p>
    </div>
</form><?php }} ?>