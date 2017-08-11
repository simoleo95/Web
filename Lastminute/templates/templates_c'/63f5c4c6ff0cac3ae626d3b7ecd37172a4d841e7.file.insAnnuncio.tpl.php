<?php /* Smarty version Smarty-3.1.13, created on 2017-08-11 11:03:56
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\insAnnuncio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5556598cc464407718-56485909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f5c4c6ff0cac3ae626d3b7ecd37172a4d841e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\insAnnuncio.tpl',
      1 => 1502442233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5556598cc464407718-56485909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598cc46442e102_94314597',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598cc46442e102_94314597')) {function content_598cc46442e102_94314597($_smarty_tpl) {?><div>
    <h1>Inserisci Asta</h1>

    <form method="post" enctype="multipart/form-data" action="index.php">
        <input type="hidden" name="controller" value="asta">
        <input type="hidden" name="task" value="crea">
        <table>
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
                        <option selected="selected">Immobiliari</option>
                        <option>Automobili</option>
                        <option>Cose</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Data Scadenza</td>
                <td><input type="datetime-local" name="dataf" required/></td>
            </tr>
            <tr>
                <td>Prezzo di partenza</td>
                <td><input type="number" name="prezzop" min="1" required/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Inserisci"</td>
            </tr>
        </table>
    </form>
</div><?php }} ?>