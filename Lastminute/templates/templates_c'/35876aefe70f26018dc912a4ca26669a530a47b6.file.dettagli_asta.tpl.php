<?php /* Smarty version Smarty-3.1.13, created on 2017-08-10 17:42:24
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\dettagli_asta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13380598c6310e92fc5-16283524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35876aefe70f26018dc912a4ca26669a530a47b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\dettagli_asta.tpl',
      1 => 1502379741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13380598c6310e92fc5-16283524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598c6310ecb351_30642141',
  'variables' => 
  array (
    'asta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598c6310ecb351_30642141')) {function content_598c6310ecb351_30642141($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['asta']->value!=false){?>
       <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                  <div class="caption">
                    <h4 class="pull-right"><?php echo $_smarty_tpl->tpl_vars['asta']->value->IDasta;?>
 <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValuta();?>
</h4>
                    <h4><a><?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getTitolo();?>
</a>
                    </h4>
					<p><?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getDescrizione();?>
</p>
                </div>
                <div class="ratings">
                   
                </div>
            </div>
        </div>
<?php }?><?php }} ?>