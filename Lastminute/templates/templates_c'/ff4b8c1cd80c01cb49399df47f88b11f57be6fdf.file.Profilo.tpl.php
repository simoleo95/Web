<?php /* Smarty version Smarty-3.1.13, created on 2017-10-24 20:15:15
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\Profilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2120559ede69c5320e4-16652612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4b8c1cd80c01cb49399df47f88b11f57be6fdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\Profilo.tpl',
      1 => 1508868912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2120559ede69c5320e4-16652612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59ede69c5a7cc6_29383205',
  'variables' => 
  array (
    'Utente' => 0,
    'media' => 0,
    'asteCreate' => 0,
    'dato' => 0,
    'asteVinte' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ede69c5a7cc6_29383205')) {function content_59ede69c5a7cc6_29383205($_smarty_tpl) {?><div class="col-md-9">
    <div class="row">
        <div class="col-md-6">
            <h1 style="text-align: center;">Riepilogo dati utente</h1>
            <div style="text-align: center;">
                <p><span style="font-weight: bold;">Nome:</span> <?php echo $_smarty_tpl->tpl_vars['Utente']->value->getNome();?>
</p>
                <p><span style="font-weight: bold;">Cognome:</span> <?php echo $_smarty_tpl->tpl_vars['Utente']->value->getCognome();?>
</p>
                <p><span style="font-weight: bold;">Username:</span> <?php echo $_smarty_tpl->tpl_vars['Utente']->value->getUsername();?>
</p>
                <p><span style="font-weight: bold;">Email:</span> <?php echo $_smarty_tpl->tpl_vars['Utente']->value->getEmail();?>
</p>
                <p id=utenteP style="display:none"><?php echo $_smarty_tpl->tpl_vars['Utente']->value->getUsername();?>
</p>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            <h1 style="text-align: center;">Valuta l'attività dell'utente</h1>

            <section class='rating-widget' style="">
                <!-- Rating Stars Box -->
                <div class='rating-stars text-center'>
                    <ul id='stars'>
                        <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                    </ul>
                </div>

                <p style="text-align: center;">La media dei voti e': <?php echo $_smarty_tpl->tpl_vars['media']->value;?>
</p>

                <div class='success-box'>
                    <div class='clearfix'></div>
                    <img alt='tick image' width='14' src='https://i.imgur.com/3C3apOp.png'/>
                    <div class='text-message'></div>
                    <div class='clearfix'></div>
                </div>
            </section>
        </div>
	</div>

    <hr>

    <div class="row">

        <?php if ($_smarty_tpl->tpl_vars['asteCreate']->value!=false){?>
		 
            <h1 style="text-align: center;">Aste create</h1>
            <br>

            <div class="slider">
                <button id="go-left">&laquo;</button>
                <button id="go-right">&raquo;</button>
                <div style="margin-top: 20px;">
                    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asteCreate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                        <div class="col-sm-4 col-lg-4 col-md-4" style="display: inline-block; float: left;">
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

                                    <p class="prezzo"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValuta();?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getDescrizione();?>
</p>
                                </div>

                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        <?php }?>
		
		</div>

        <br><hr>

        <!-- Da fixare scroll su aste vinte -->
        <div class="row">
      
            <?php if ($_smarty_tpl->tpl_vars['asteVinte']->value!=false){?>

                <h1 style="text-align: center;">Aste vinte</h1>
                <br>

                <div class="slider">
                    <button id="go-left">&laquo;</button>
                    <button id="go-right">&raquo;</button>
                    <div style="margin-top: 20px;">
                        <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asteVinte']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>

                            <div class="col-sm-4 col-lg-4 col-md-4">
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
							            <p style="font-size: 14px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValore();?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value->getPrezzoF()->getValuta();?>
</p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['dato']->value->getArticolo()->getDescrizione();?>
</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }?>
        </div>
</div>
 <?php }} ?>