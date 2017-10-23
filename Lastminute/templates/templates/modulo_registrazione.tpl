<<<<<<< HEAD
<div class="col-md-9">
    <div class="row">
        <div  style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
          <h1 class="contact">Modulo di registrazione</h1>
          <div class="contactform">
=======
<script>
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
>>>>>>> a5e46c544081511ae69fe977ff94cb97276b4b0f
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
</div>