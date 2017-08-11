<?php /* Smarty version Smarty-3.1.13, created on 2017-08-08 17:39:15
         compiled from "C:\xampp\htdocs\prova\Lastminute\templates\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310877675989d9e8c34eb7-39927117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc2e6a322327f20773a4d5a0194922a24be79351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prova\\Lastminute\\templates\\templates\\login.tpl',
      1 => 1502206603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310877675989d9e8c34eb7-39927117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5989d9e8c369b1_34069116',
  'variables' => 
  array (
    'errore' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5989d9e8c369b1_34069116')) {function content_5989d9e8c369b1_34069116($_smarty_tpl) {?><div class="login-page" style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
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