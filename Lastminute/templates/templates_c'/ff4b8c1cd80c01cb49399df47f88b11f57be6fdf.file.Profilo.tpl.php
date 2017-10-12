<?php /* Smarty version Smarty-3.1.13, created on 2017-10-12 12:03:29
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\Profilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274059df2e0aa1cea0-74087436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4b8c1cd80c01cb49399df47f88b11f57be6fdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\Profilo.tpl',
      1 => 1507802598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274059df2e0aa1cea0-74087436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59df2e0aa7b3f6_64734766',
  'variables' => 
  array (
    'Utente' => 0,
    'asteCreate' => 0,
    'dato' => 0,
    'asteVinte' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59df2e0aa7b3f6_64734766')) {function content_59df2e0aa7b3f6_64734766($_smarty_tpl) {?><div class="col-md-9">

  <div  style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
          <h1 class="contact">Profilo Utente</h1>
	  <table>
    <tr><td>Nome :</td><td><?php echo $_smarty_tpl->tpl_vars['Utente']->value->getNome();?>
</td></tr>
    <tr><td>Cognome :</td><td><?php echo $_smarty_tpl->tpl_vars['Utente']->value->getCognome();?>
</td></tr>
    <tr><td>Indirizzo e_mail :</td><td><?php echo $_smarty_tpl->tpl_vars['Utente']->value->getEmail();?>
</td></tr>
   
</table>
	     
	</div>

    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['asteCreate']->value!=false){?>
            <h1>Aste create</h1>
            <h4>La tua valutazione e' di: </h4>
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asteCreate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="data:image;base64,<?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getFoto();?>
" style="height: 150px !important;" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoI()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValuta();?>
</h4>
                            <h4><a href="index.php?controller=asta&task=dettagli&id_asta=<?php echo $_smarty_tpl->tpl_vars['dato']->value->getIdAsta();?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getTitolo();?>
</a>
                            </h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getDescrizione();?>
</p>
                        </div>
           
                    </div>
                </div>
            <?php } ?>
        <?php }?>
		</div>


 

 <div  class="row">
      
        <?php if ($_smarty_tpl->tpl_vars['asteVinte']->value!=false){?>
        <h1>Aste vinte</h1>
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asteVinte']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="data:image;base64,<?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getFoto();?>
" style="height: 150px !important;" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoI()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValuta();?>
</h4>
                            <h4><a href="index.php?controller=asta&task=dettagli&id_asta=<?php echo $_smarty_tpl->tpl_vars['dato']->value->getIdAsta();?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getTitolo();?>
</a>
                            </h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getDescrizione();?>
</p>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="index.php">
                        <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value->getUtentecreatore()->getUsername();?>
"  style="display:none">
                        <input type="hidden" name="controller" value="asta">
                        <input type="hidden" name="task" value="valuta">
                        <table>

                            <td><input type="number" name="valutazione" required/></td>

                            <td><input type="submit" name="submit" value="Valuta"</td>

                            </table>
                    </form>
               
                    </div>

                </div>
            <?php } ?>
        <?php }?>
    </div>


</div><?php }} ?>