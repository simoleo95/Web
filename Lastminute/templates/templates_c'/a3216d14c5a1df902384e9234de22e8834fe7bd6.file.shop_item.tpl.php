<?php /* Smarty version Smarty-3.1.13, created on 2017-10-12 19:48:37
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\shop_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28922598d79ef4abbb0-87189210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3216d14c5a1df902384e9234de22e8834fe7bd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\shop_item.tpl',
      1 => 1507829687,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598d79ef7bbde3_20874024')) {function content_598d79ef7bbde3_20874024($_smarty_tpl) {?><div>

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
                <form method="get" action="index.php">
                    <input type="hidden" name="controller" value="asta" />
                    <input type="hidden" name="task" value="offerta" />
                    <input type="hidden" name="id_asta" value="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getIdAsta();?>
"/>

                    <input type="number" name="offerta" style="width: 70px;" min="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoF()->getValore();?>
" required/>  <?php echo $_smarty_tpl->tpl_vars['asta']->value->getPrezzoI()->getValuta();?>

                    <input type="submit" class="btn btn-success" value="Partecipa"/>
                </form>
            </div>
        </div>

        <script src="templates/templates/jquery-libs/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="templates/templates/js/jquery.timeTo.js"></script>
        <script src="templates/templates/js/timeout.js"></script>

        <link href="templates/templates/css/timeTo.css" type="text/css" rel="stylesheet"/>
        <!--
        <div class="ratings">
            <p class="pull-right">3 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                4.0 stars
            </p>
        </div>
        -->
    </div>

    <!--
    <div class="well">

        <div class="text-right">
            <a class="btn btn-success">Leave a Review</a>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">10 days ago</span>
                <p>This product was great in terms of quality. I would definitely buy another!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">12 days ago</span>
                <p>I've alredy ordered another one!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">15 days ago</span>
                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
            </div>
        </div>

    </div> -->
</div><?php }} ?>