<?php /* Smarty version Smarty-3.1.13, created on 2017-10-09 17:44:53
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\mieAste.tpl" */ ?>
<?php /*%%SmartyHeaderCode:561030435598dcb73c2a938-93326849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c608be1f76bcc4c99029c49819b68e3e627e58e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\mieAste.tpl',
      1 => 1507279742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '561030435598dcb73c2a938-93326849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598dcb73c4c359_45782442',
  'variables' => 
  array (
    'asteCreate' => 0,
    'dato' => 0,
    'asteVinte' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598dcb73c4c359_45782442')) {function content_598dcb73c4c359_45782442($_smarty_tpl) {?><div>

    <div class="col-md-9">

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
                        <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php }?>
		</div>
</div>

 <div class="col-md-9" style=position:"relatve">

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
                        <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>

                </div>
            <?php } ?>
        <?php }?>
    </div>
</div>

</div><?php }} ?>