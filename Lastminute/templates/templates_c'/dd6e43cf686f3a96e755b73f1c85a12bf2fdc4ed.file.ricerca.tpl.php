<?php /* Smarty version Smarty-3.1.13, created on 2017-10-23 18:55:47
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\ricerca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2094959eb587d0480f8-69135490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6e43cf686f3a96e755b73f1c85a12bf2fdc4ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\ricerca.tpl',
      1 => 1508735960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2094959eb587d0480f8-69135490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59eb587d4cfc03_76520502',
  'variables' => 
  array (
    'dati' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb587d4cfc03_76520502')) {function content_59eb587d4cfc03_76520502($_smarty_tpl) {?><div id="ricerca" class="col-md-9">
<div class="row">
        <?php if ($_smarty_tpl->tpl_vars['dati']->value!=false){?>
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                <div id="<?php echo $_smarty_tpl->tpl_vars['dato']->value->getIdAsta();?>
" class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
						 
                        <div class="imgContainer">
                            <img src="data:image;base64,<?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getFoto();?>
">
                        </div>
                        <div class="caption" style="text-align: center;">
                            <h4 class="popup-link" data-popup-target="#example-popup">
                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getTitolo();?>
</a>
                                <p class="id" style="display: none"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getIdAsta();?>
</p>
                            </h4>

                            <p class="prezzo pf"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValuta();?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getDescrizione();?>
</p>
                        </div>
                      <!--  <div style="margin-top:-25px; text-align: center; font-size: 16px;">
                            <p style="font-weight: bold;">Scade il: <?php echo $_smarty_tpl->tpl_vars['dato']->value->getDataF();?>
</p>
                        </div> -->
                    </div>
                </div>
            <?php } ?>
        <?php }?>
    </div>

</div><?php }} ?>