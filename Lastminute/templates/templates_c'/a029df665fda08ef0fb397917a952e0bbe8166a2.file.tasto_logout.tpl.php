<?php /* Smarty version Smarty-3.1.13, created on 2017-08-08 17:35:04
         compiled from "C:\xampp\htdocs\prova\Lastminute\templates\templates\tasto_logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14833426845989da285e45b2-62918251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a029df665fda08ef0fb397917a952e0bbe8166a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prova\\Lastminute\\templates\\templates\\tasto_logout.tpl',
      1 => 1502191318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14833426845989da285e45b2-62918251',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5989da2864aa04_82366834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5989da2864aa04_82366834')) {function content_5989da2864aa04_82366834($_smarty_tpl) {?>    <!DOCTYPE HTML>
    <html>
      <head>
        <title>Esempio</title>
        <meta charset="utf-8">
        <style type="text/css">
          .pulsante{
            color: #000;
            border: 1px solid #CCC;
            background-color: #EFEFEF;
            font: 100%/2 "Lucida Sans","Lucida Grande","Lucida Sans Unicode",Arial,Helvetica,sans-serif;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            padding: 12px;
            
            /* transizione morbida */
            transition: .3s ease
          }
          .pulsante:hover{
            border-color: #F90;
            color: #F80;
            
            /* effetto glow (bagliore) */ 
            text-shadow: 0 0 4px #FFF;
            box-shadow: 0 0 3px #FA3, inset 0 0 4px 1px #FFF;
          }
        </style>
      </head>
      <body>
        <a class="pulsante" href="index.php?controller=logout">Logout</a>
      </body>
    </html>

     

<?php }} ?>