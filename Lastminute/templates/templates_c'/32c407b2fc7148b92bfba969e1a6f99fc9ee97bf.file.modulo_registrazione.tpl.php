<?php /* Smarty version Smarty-3.1.13, created on 2017-10-15 12:01:51
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\modulo_registrazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270735986e9cdb11e24-66361246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c407b2fc7148b92bfba969e1a6f99fc9ee97bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\modulo_registrazione.tpl',
      1 => 1508061700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270735986e9cdb11e24-66361246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5986e9cdb38a28_16538075',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5986e9cdb38a28_16538075')) {function content_5986e9cdb38a28_16538075($_smarty_tpl) {?><script>
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
            </form>
          </div>
        </div>
    </div>
</div><?php }} ?>