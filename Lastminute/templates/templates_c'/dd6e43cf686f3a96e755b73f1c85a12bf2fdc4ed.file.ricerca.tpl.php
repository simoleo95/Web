<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.13, created on 2017-10-15 11:42:53
=======
<?php /* Smarty version Smarty-3.1.13, created on 2017-10-15 11:49:44
>>>>>>> master
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\ricerca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2800459e32d9d07d021-60001642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6e43cf686f3a96e755b73f1c85a12bf2fdc4ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\ricerca.tpl',
<<<<<<< HEAD
      1 => 1508060480,
=======
      1 => 1508060117,
>>>>>>> master
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2800459e32d9d07d021-60001642',
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
  'unifunc' => 'content_59e32d9d0e2be2_13283931',
),false); /*/%%SmartyHeaderCode%%*/?>
<<<<<<< HEAD
<?php if ($_valid && !is_callable('content_59e32d9d0e2be2_13283931')) {function content_59e32d9d0e2be2_13283931($_smarty_tpl) {?><div id="ricerca" class="col-md-9">
=======
<?php if ($_valid && !is_callable('content_5981807c6a9fa9_49937655')) {function content_5981807c6a9fa9_49937655($_smarty_tpl) {?><div id="ricerca" class="col-md-9">
>>>>>>> master
<div class="row">
        <?php if ($_smarty_tpl->tpl_vars['dati']->value!=false){?>
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
						 
                        <div style="position: relative; width: 260px; height: 178px; overflow: hidden;">
                            <img src="data:image;base64,<?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getFoto();?>
" style="position: absolute; top: -9999px; left: -9999px; right: -9999px; bottom: -9999px; margin: auto;" alt="">
                        </div>
                        <div class="caption" style="text-align: center;">
                            <h4 class="popup-link" data-popup-target="#example-popup">
                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getTitolo();?>
</a>
                                <p class="id" style="display: none"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getIdAsta();?>
</p>
                            </h4>

                            <p style="font-size: 14px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValuta();?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getDescrizione();?>
</p>
                        </div>
						

                        <div style="margin-top:-25px; text-align: center; font-size: 16px;">
                            <p style="font-weight: bold;">Scade il: <?php echo $_smarty_tpl->tpl_vars['dato']->value->getDataF();?>
</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php }?>
    </div>

</div><?php }} ?>