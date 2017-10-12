<?php /* Smarty version Smarty-3.1.13, created on 2017-10-10 14:33:58
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\tasto_logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3429598988d8705b07-99087170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9ac539a9cea29da2afdfa2cc6a91f979a50ba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\tasto_logout.tpl',
      1 => 1507560497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3429598988d8705b07-99087170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598988d8732027_11088697',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598988d8732027_11088697')) {function content_598988d8732027_11088697($_smarty_tpl) {?><form method="post" action="index.php">
  <input type="hidden" name="controller" value="logout" />
  <input style="width:100%;background:#ddd;margin-bottom: 15px;" class="list-group-item" type="submit" value="Logout" />
</form>

<?php }} ?>