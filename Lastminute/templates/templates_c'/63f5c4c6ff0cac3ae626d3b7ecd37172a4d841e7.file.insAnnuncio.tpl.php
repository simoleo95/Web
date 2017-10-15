<?php /* Smarty version Smarty-3.1.13, created on 2017-10-15 11:45:33
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\insAnnuncio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972059e32e3d7a29b0-15202920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f5c4c6ff0cac3ae626d3b7ecd37172a4d841e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\insAnnuncio.tpl',
      1 => 1507802809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972059e32e3d7a29b0-15202920',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59e32e3d7e06d1_62374304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e32e3d7e06d1_62374304')) {function content_59e32e3d7e06d1_62374304($_smarty_tpl) {?><div class="col-md-9">
    <div class="row">
<div style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
	
    <h1>Inserisci Asta</h1>

    <form method="post" enctype="multipart/form-data" action="index.php">
        <input type="hidden" name="controller" value="asta">
        <input type="hidden" name="task" value="crea">
        <table style="border-collapse: separate;  border-spacing: 15px;">
			
            <tr>
                <td>Titolo</td>
                <td><input type="text" name="titolo" required/></td>
            </tr>
			
            <tr>
                <td>Descrizione</td>
                <td><textarea name="descrizione" required></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" accept="image/jpeg" required/></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select type="" name="categoria">
                        <option selected="selected">Immobili</option>
                        <option>Elettronica</option>
                        <option>Hobby</option>
						<option>Sport</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Data Scadenza</td>
                <td><input type="date" name="dataf" required/></td>
            </tr>
            <tr>
                <td>Prezzo di partenza</td>
                <td><input type="number" name="prezzop" min="1"  required/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Inserisci"</td>
            </tr>
        </table>
			
    </form>
</div>
		  </div>
</div><?php }} ?>