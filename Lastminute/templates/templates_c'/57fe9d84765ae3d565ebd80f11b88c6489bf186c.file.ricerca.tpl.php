<?php /* Smarty version Smarty-3.1.13, created on 2017-08-03 13:05:12
         compiled from "C:\xampp\htdocs\Lastminute\templates\templates\ricerca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:504492133598303680814e9-62547956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57fe9d84765ae3d565ebd80f11b88c6489bf186c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lastminute\\templates\\templates\\ricerca.tpl',
      1 => 1501659761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504492133598303680814e9-62547956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dati' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59830368465169_25072973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59830368465169_25072973')) {function content_59830368465169_25072973($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dati']->value!=false){?>
    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="data:image;base64,<?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getFoto();?>
" alt="">
                <div class="caption">
                    <h4 class="pull-right"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoI()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValuta();?>
</h4>
                    <h4><a href="#"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getTitolo();?>
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
<?php }?><?php }} ?>