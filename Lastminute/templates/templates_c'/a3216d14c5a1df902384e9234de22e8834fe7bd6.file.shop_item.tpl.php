<?php /* Smarty version Smarty-3.1.13, created on 2017-10-24 18:53:21
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\shop_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2277059eb6376b43125-28141841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3216d14c5a1df902384e9234de22e8834fe7bd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\shop_item.tpl',
      1 => 1508778171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277059eb6376b43125-28141841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59eb6377135091_70524660',
  'variables' => 
  array (
    'asta' => 0,
    'user' => 0,
    'creatore' => 0,
    'errore' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb6377135091_70524660')) {function content_59eb6377135091_70524660($_smarty_tpl) {?><script src="templates/templates/js/offerta.js"></script>
<div>

    <div class="thumbnail">
        <div class="row">
            <div class="col-md-6" style="width: 370px; height: 250px; position: relative; overflow: hidden;">
                <img class="img-responsive" style="position: absolute; top: -9999px; left: -9999px; right: -9999px; bottom: -9999px; margin: auto;" src="data:image;base64,<?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getFoto();?>
" alt="">
            </div>
            <div class="col-md-6 caption-full">
                <h2 style="color: #1b6d85; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getTitolo();?>
</h2>
                <p style="font-size: 15px;">Venditore: <a href="index.php?controller=asta&task=profilo&username=<?php echo $_smarty_tpl->tpl_vars['asta']->value->getUtentecreatore()->getUsername();?>
"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getUtentecreatore()->getUsername();?>
</a></p>
                <p style="font-size: 19px; text-align: center;">Prezzo di partenza: <span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoI()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoI()->getValuta();?>
</span></span></p>
                <p style="font-size: 16px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getArticolo()->getDescrizione();?>
</p>
            </div>
        </div>
        <div class="row" style="background: #eee; margin: 0 !important; padding-bottom: 40px;">
            <div class="caption-full">
                <p style="text-align: center; font-size: 16px;">Scade tra:</p>
                <p id="timeout" class="col-md-12 center-block" tag="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getDataF();?>
"></p>
            </div>
        </div>
        <div class="row" style="padding-top: 10px; margin: 0; background: #eee;">
            <!--<div class="col-md-5 pull-left">
                <p style="font-size: 19px; text-align: center; line-height: 50px;">Prezzo attuale: <span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValuta();?>
</span></p>
            </div>-->
			<p class="prezzoF" style="display: none"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
</p>
			<p class="astaID" style="display: none"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getIdAsta();?>
</p>
            <div class="col-md-12 center-block" style="margin: 10px; padding-bottom: 10px;">
                <form class="dati_offerta"> <!--method="get" action="index.php"-->
                    <input type="hidden" name="controller" value="asta" />
                    <input type="hidden" name="task" value="offerta" />
                    <input type="hidden" name="id_asta" value="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getIdAsta();?>
"/>

                    <?php if ($_smarty_tpl->tpl_vars['asta']->value->getUtentecreatore()->getUsername()==$_smarty_tpl->tpl_vars['asta']->value->getUtentevincitore()->getUsername()){?>
                        <p style="font-size: 19px;">Nessuna offerta</p>
                    <?php }else{ ?>
                        <p style="font-size: 19px;">Offerta attuale: <a href="index.php?controller=asta&task=profilo&username=<?php echo $_smarty_tpl->tpl_vars['asta']->value->getUtentevincitore()->getUsername();?>
"><?php echo $_smarty_tpl->tpl_vars['asta']->value->getUtentevincitore()->getUsername();?>
</a></p>
					<?php }?>

                    <?php if (($_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore()==0)){?>
                    <input type="number" class="field" style="width: 70px;height: 42px;border-radius: 5px;" name="offerta" style="width: 70px; height: 35px; border-radius: 5px;" <?php if (!$_smarty_tpl->tpl_vars['user']->value){?> disabled <?php }?> min="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoI()->getValore();?>
" required/>
					<?php }else{ ?>
					<input type="number" class="field" style="width: 70px;height: 42px;border-radius: 5px;" name="offerta" style="width: 70px; height: 35px; border-radius: 5px;" <?php if (!$_smarty_tpl->tpl_vars['user']->value){?> disabled <?php }?> min="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
" required/>
					
					<?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value&&($_smarty_tpl->tpl_vars['creatore']->value!=$_smarty_tpl->tpl_vars['asta']->value->getUtentecreatore()->getUsername())){?>
					<a class="btn btn-success offerta">Partecipa</a>
                    <?php }?> 

                    <?php if (!$_smarty_tpl->tpl_vars['user']->value){?><p style="text-align: center;">Registrati per poter effettuare un'offerta</p><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['creatore']->value==$_smarty_tpl->tpl_vars['asta']->value->getUtentecreatore()->getUsername()){?><p style="text-align: center;">Non puoi effettuare un'offerta su un tuo prodotto</p>
					<?php }else{ ?>
				
					<?php }?>
					
					
					
                </form>
				<?php if (isset($_smarty_tpl->tpl_vars['errore']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['errore']->value;?>

				 <?php }?>

            </div>
        </div>

        <script src="templates/templates/js/timeout.js"></script>
    </div>
</div><?php }} ?>