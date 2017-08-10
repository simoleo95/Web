<?php /* Smarty version Smarty-3.1.13, created on 2017-08-10 18:05:15
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\tasto_logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3429598988d8705b07-99087170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9ac539a9cea29da2afdfa2cc6a91f979a50ba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\tasto_logout.tpl',
      1 => 1502381073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3429598988d8705b07-99087170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598988d8732027_11088697',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598988d8732027_11088697')) {function content_598988d8732027_11088697($_smarty_tpl) {?>    <!DOCTYPE HTML>
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