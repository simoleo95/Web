<?php /* Smarty version Smarty-3.1.13, created on 2017-10-06 19:48:20
         compiled from "C:\xampp\htdocs\Web\Lastminute\templates\templates\modulo_registrazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270735986e9cdb11e24-66361246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c407b2fc7148b92bfba969e1a6f99fc9ee97bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web\\Lastminute\\templates\\templates\\modulo_registrazione.tpl',
      1 => 1507312092,
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
            </form>
<!--             <div id="demo">
              <h1>The XMLHttpRequest Object</h1>
              <button type="button" onclick="loadDoc()">Change Content</button>
            </div> -->
          </div>
        </div>
    </div>
</div>

<!-- <script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
</script> -->
<?php }} ?>