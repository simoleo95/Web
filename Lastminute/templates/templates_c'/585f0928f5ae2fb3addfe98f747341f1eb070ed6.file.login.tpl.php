<?php /* Smarty version Smarty-3.1.13, created on 2017-08-09 10:36:53
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78359848bc869a8b4-51848092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '585f0928f5ae2fb3addfe98f747341f1eb070ed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\login.tpl',
      1 => 1502267808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78359848bc869a8b4-51848092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59848bc86be951_78972865',
  'variables' => 
  array (
    'errore' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59848bc86be951_78972865')) {function content_59848bc86be951_78972865($_smarty_tpl) {?><div class="login-page" style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
 <div class="form">
   <form method="post"  action="index.php">
 <fieldset>
   <legend>Login</legend> 
	   <p><input type="hidden" name="controller" value="log" /></p>
	  <p id="error"><?php echo $_smarty_tpl->tpl_vars['errore']->value;?>
</p>
   <fieldset>
      <tr> 
        <td align="right"> username: </td>
        <td> <input type="text" name="username"/></td>
      </tr>

      <tr>
        <td align="right"> password: </td>
        <td> <input type="password" name="password"/> </td>
      </tr>
     </table>
   </fieldset>
     
     <tr>
        <td> <input type="submit" value="login" /> </td>
        
     </tr>

    </table>
 </fieldset>
  </fieldset>   
 </form> 

    </div>
                </div><?php }} ?>