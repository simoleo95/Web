<?php /* Smarty version Smarty-3.1.13, created on 2017-10-23 20:00:55
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\insAnnuncio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2853659eb58c73f47c1-58431377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f5c4c6ff0cac3ae626d3b7ecd37172a4d841e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\insAnnuncio.tpl',
      1 => 1508778170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2853659eb58c73f47c1-58431377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59eb58c7433484_51523676',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb58c7433484_51523676')) {function content_59eb58c7433484_51523676($_smarty_tpl) {?><div class="col-md-9">
    <div class="row center-block">
        <div class="col-md-10 col-md-offset-1">
            <div class="contactform list-group">

                <form method="post" enctype="multipart/form-data" action="index.php">
                    <input type="hidden" name="controller" value="asta">
                    <input type="hidden" name="task" value="crea">

                    <h1 class="contact">Inserisci Asta</h1><br>

                    <input type="text" name="titolo" placeholder="Titolo" class="field list-group-item center-block" required/><br>

                    <textarea name="descrizione" placeholder="Descrizione" class="field list-group-item center-block" required></textarea><br>

                    <input type="file" name="foto" accept="image/jpeg" required class="list-group-item center-block"/><br>

                    <div class="col-md-4">
                    <select type="" name="categoria" class="field list-group-item center-block" required>
                        <option selected disabled>Scegli una categoria</option>
                        <option>Immobili</option>
                        <option>Elettronica</option>
                        <option>Hobby</option>
                        <option>Sport</option>
                    </select>
                    </div>

                    <div class="col-md-4">
                    <input type="date" name="dataf" value="Data" required class="field list-group-item center-block"/>
                    </div>

                    <div class="col-md-4">
                    <input type="number" name="prezzop" min="1" placeholder="Prezzo di partenza" required class="field list-group-item center-block"/>
                    </div>

                    <br><br><br>

                    <div class="col-md-13">
                        <input type="submit" name="submit" value="Inserisci" class="button list-group-item center-block" style="width: 100%; margin-top: 15px;">
                    </div>

                </form>

            </div>
        </div>
    </div>
</div><?php }} ?>