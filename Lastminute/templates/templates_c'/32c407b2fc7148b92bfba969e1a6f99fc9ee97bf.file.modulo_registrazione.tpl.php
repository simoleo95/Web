<<<<<<< HEAD
<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.13, created on 2017-10-12 20:30:23
=======
<?php /* Smarty version Smarty-3.1.13, created on 2017-10-21 16:26:10
>>>>>>> a5e46c544081511ae69fe977ff94cb97276b4b0f
=======
<?php /* Smarty version Smarty-3.1.13, created on 2017-10-12 19:37:47
>>>>>>> parent of 104cdf9... registrazione
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\modulo_registrazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333159eb59024eef96-69143312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c407b2fc7148b92bfba969e1a6f99fc9ee97bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\modulo_registrazione.tpl',
<<<<<<< HEAD
<<<<<<< HEAD
      1 => 1507832994,
=======
      1 => 1508065771,
>>>>>>> a5e46c544081511ae69fe977ff94cb97276b4b0f
=======
      1 => 1507829854,
>>>>>>> parent of 104cdf9... registrazione
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333159eb59024eef96-69143312',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_59eb590251f745_13006174',
),false); /*/%%SmartyHeaderCode%%*/?>
<<<<<<< HEAD
<<<<<<< HEAD
<?php if ($_valid && !is_callable('content_5986e9cdb38a28_16538075')) {function content_5986e9cdb38a28_16538075($_smarty_tpl) {?><div class="col-md-9">
=======
<?php if ($_valid && !is_callable('content_5986e9cdb38a28_16538075')) {function content_5986e9cdb38a28_16538075($_smarty_tpl) {?><script>
function myFunction() {
    var x, text;
    var  y = ["username", "password", "password_1","email"];
    var z = ["eusername", "epassword", "erpassword", "eemail"];
    
    for (var i = 0 ; i <y.length ; i++) {
        x = document.getElementById(y[i]).value;  
        if (x =="" ) {
          text = "Input not valid";
        }
    
        else {
            text = "Input OK";
        }
    document.getElementById(z[i]).innerHTML = text;
    }
    

    return false;
}
</script>
<div class="col-md-9">
>>>>>>> parent of 104cdf9... registrazione
    <div class="row">
        <div  style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
          <h1 class="contact">Modulo di registrazione</h1>
          <div class="contactform">
            <form method="post">
              <p><label for="username" class="left">Nome utente:</label>
              <input type="text" name="username" id="username" class="field" value="" tabindex="5" />
              <label id="eusername"></label> </p>
              <p ><label for="password" class="left">Password:</label>
              <input type="password" name="password" id="password" class="field" value="" tabindex="6"/>
              <label id="epassword"></label></p>    
              <p><label for="password_1" class="left">Ripeti password:</label>
              <input type="password" name="password_1" id="password_1" class="field" value="" tabindex="7" />
              <label id="erpassword"></label></p>  
              <fieldset><legend>&nbsp;DETTAGLI ANAGRAFICI&nbsp;</legend>
                <p><label for="nome" class="left">Nome:</label>
                <input type="text" name="nome" id="nome" class="field" value="" tabindex="8" /></p>
                <p><label for="cognome" class="left">Cognome:</label>
                <input type="text" name="cognome" id="cognome" class="field" value="" tabindex="9" /></p>
                <p><label for="email" class="left">Email:</label>
                <input type="text" name="email" id="email" class="field" value="" tabindex="14" />
                <label id="eemail" ></label>   </p>
                <input type="hidden" name="controller" value="registra" />
                <input type="hidden" name="task" value="creautente" />
                <p><input type="submit" name="registra" id="submit_1" class="button" value="Registrati" tabindex="15" onclick="return myFunction()"></p>
               </fieldset>
=======
<?php if ($_valid && !is_callable('content_59eb590251f745_13006174')) {function content_59eb590251f745_13006174($_smarty_tpl) {?><script>
var myFunction = function() {
    // if (document.getElementById('password').value == document.getElementById('password_1').value) {
    //     alert('registrazione avvenuta con successo');
    //     return true;
    // }
    // else {
    //     alert('campi non validi prego ricontrollare');
    //     return false;
    //   }
}

var check = function() {
//controllo sulle password 
  if (document.getElementById('password').value == document.getElementById('password_1').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
    return true;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
    return false;
  }
}
     
</script>

<div  class="col-md-9">
    <div class="row center-block">
        <div>
          <div class="contactform list-group">
            <form method="post">
                <h1 class="contact">Registrazione</h1><br>
                <fieldset class="pull-left col-md-5 col-md-offset-1">
                    <legend><span class="number">1</span>Credenziali</legend>
                    <input type="text" name="username" id="username" class="field list-group-item center-block" value="" tabindex="5" required placeholder="Nome utente"/>
                    <label id="eusername"></label>
                    <input type="password" name="password" id="password" class="field list-group-item center-block" value="" tabindex="6" required placeholder="Password"/>
                    <label id="epassword"></label>
                    <input type="password" name="password_1" id="password_1" class="field list-group-item center-block" value="" tabindex="7" onkeyup='check();' required placeholder="Ripeti la password"/>
                    <span id='message'></span>
                    <label id="erpassword"></label>
                </fieldset>
                <fieldset class="pull-right col-md-5">
                    <legend><span class="number">2</span>Dati personali</legend>
                    <input type="text" name="nome" id="nome" class="field list-group-item center-block" value="" tabindex="8" required placeholder="Nome"/>
                    <br>
                    <input type="text" name="cognome" id="cognome" class="field list-group-item center-block" value="" tabindex="9" required placeholder="Cognome"/>
                    <br>
                    <input type="text" name="email" id="email" class="field list-group-item center-block" value="" tabindex="14" required placeholder="Email"/>
                    <br>
                    <label id="eemail" ></label>
                    <input type="hidden" name="controller" value="registra" required/>
                    <input type="hidden" name="task" value="creautente" required/>
                </fieldset>
                    <p><input type="submit" name="registra" id="submit_1" class="button col-md-11 col-md-offset-1 list-group-item" value="Registrati" tabindex="15" onclick="return myFunction()"></p>
>>>>>>> a5e46c544081511ae69fe977ff94cb97276b4b0f
            </form>
<!--             <div id="demo">
              <h1>The XMLHttpRequest Object</h1>
              <button type="button" onclick="loadDoc()">Change Content</button>
            </div> -->
          </div>
        </div>
    </div>
</div><?php }} ?>