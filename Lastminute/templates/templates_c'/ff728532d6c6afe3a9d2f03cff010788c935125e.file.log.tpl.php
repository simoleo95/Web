<?php /* Smarty version Smarty-3.1.13, created on 2017-08-05 12:00:48
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20125598597507c2262-51237155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff728532d6c6afe3a9d2f03cff010788c935125e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\log.tpl',
      1 => 1501927193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20125598597507c2262-51237155',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598597507e7877_87020870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598597507e7877_87020870')) {function content_598597507e7877_87020870($_smarty_tpl) {?>
<div style="padding: 100px 0 0 250px;">
	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="login-box.css" rel="stylesheet" type="text/css" />

   
<form method="post" action=index.php>

     <div id="login-box">

       <H2>Login</H2>


       <div id="login-box-name" style="margin-top:20px;">Username:</div><div id="login-box-field" style="margin-top:20px;">
		 <input name="q" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
        <div id="login-box-name">Password:</div><div id="login-box-field">
		 <input name="q" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
          <br />
         <span class="login-box-options">			   
        <p><input type="hidden" name="controller" value="registrazione" /></p>
          <a href="#"><img src="images/login-btn.png" width="103" height="42" style="margin-left:90px;" /></a>
		 

</div>
		 </form>

</div>













<?php }} ?>