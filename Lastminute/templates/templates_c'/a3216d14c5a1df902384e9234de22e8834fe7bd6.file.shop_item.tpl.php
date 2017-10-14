<?php /* Smarty version Smarty-3.1.13, created on 2017-10-14 10:40:05
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\shop_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28922598d79ef4abbb0-87189210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3216d14c5a1df902384e9234de22e8834fe7bd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\shop_item.tpl',
      1 => 1507970398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28922598d79ef4abbb0-87189210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598d79ef7bbde3_20874024',
  'variables' => 
  array (
    'asta' => 0,
    'user' => 0,
    'errore' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598d79ef7bbde3_20874024')) {function content_598d79ef7bbde3_20874024($_smarty_tpl) {?><script src="templates/templates/js/offerta.js"></script>
<div>

    <div class="thumbnail">
		
        <img class="img-responsive" style="height: 300px !important;" src="data:image;base64,<?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getFoto();?>
" alt="">
        <div class="caption-full">
            <h4 class="pull-right">Prezzo di partenza: <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoI()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoI()->getValuta();?>
</h4>
            <h4><a href="#"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getTitolo();?>
</a>
            </h4>
            <p><?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getDescrizione();?>
</p>
        </div>
		<div class="caption-full">
			<p id="timeout" tag="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getDataF();?>
"></p>
			<br><br>
		</div>
        <div style="margin-bottom: 20px;">
            <h4 class="pull-right">Prezzo attuale: <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValuta();?>
</h4>
            <div class="text-left" style="margin: 10px;">
				<?php if ($_smarty_tpl->tpl_vars['user']->value!=false){?>
                <form class=dati_offerta>
                    <input type="hidden" name="controller" value="asta" />
                    <input type="hidden" name="task" value="offerta" />
                    <input type="hidden" name="id_asta" value="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getIdAsta();?>
"/>



                    <input type="number" name="offerta" style="width: 70px;" min="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
" required/>  <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoI()->getValuta();?>

					<a class="btn btn-success offerta" >Partecipa</a>
			


                </form>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['errore']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['errore']->value;?>

				 <?php }?>

            </div>
        </div>

        <script src="templates/templates/js/timeout.js"></script>
    </div>
</div><?php }} ?>