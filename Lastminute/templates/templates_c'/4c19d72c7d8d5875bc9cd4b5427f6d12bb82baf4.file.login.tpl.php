<?php /* Smarty version Smarty-3.1.13, created on 2017-08-10 17:19:20
         compiled from "C:\Users\andre\Documents\GitHub\Web\Lastminute\templates\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2475598c64ea459331-04191148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c19d72c7d8d5875bc9cd4b5427f6d12bb82baf4' => 
    array (
      0 => 'C:\\Users\\andre\\Documents\\GitHub\\Web\\Lastminute\\templates\\templates\\login.tpl',
      1 => 1502378353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2475598c64ea459331-04191148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598c64eae7fa91_85604479',
  'variables' => 
  array (
    'errore' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598c64eae7fa91_85604479')) {function content_598c64eae7fa91_85604479($_smarty_tpl) {?><form method="post" action="index.php">
    <p class="lead">Login</p>

    <!--Gestione errori-->
    <input type="hidden" name="controller" value="log" />
    <p id="error"><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</p>

    <div class="list-group">
        <input style="width:100%;" class="list-group-item" type="text" placeholder="Username" name="username"/>
        <input style="width:100%;" class="list-group-item" type="password" placeholder="Password" name="password"/>
        <br>
        <input style="width:100%;background:#ddd;" class="list-group-item" type="submit" value="Login" />
        <p style="text-align: center; margin-top: 10px;">Non hai un account? <a href="index.php?controller=registra">Registrati</a></p>
    </div>
</form><?php }} ?>