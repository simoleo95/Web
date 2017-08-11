<div class="col-md-9">
    <div class="row">
        <div  style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
          <h1 class="contact">Modulo di registrazione</h1>
          <div class="contactform">
            <form method="post">
              <fieldset><legend>&nbsp;CREDENZIALI DI ACCESSO&nbsp;</legend>
                <p><label for="username" class="left">Nome utente:</label>
                   <input type="text" name="username" id="username" class="field" value="" tabindex="5" /></p>
                <p><label for="password" class="left">Password:</label>
                   <input type="password" name="password" id="password" class="field" value="" tabindex="6" /></p>
                <p><label for="password_1" class="left">Ripeti password:</label>
                   <input type="password" name="password_1" id="password_1" class="field" value="" tabindex="7" /></p>
              </fieldset>
              <fieldset><legend>&nbsp;DETTAGLI ANAGRAFICI&nbsp;</legend>
                <p><label for="nome" class="left">Nome:</label>
                   <input type="text" name="nome" id="nome" class="field" value="" tabindex="8" /></p>
                <p><label for="cognome" class="left">Cognome:</label>
                   <input type="text" name="cognome" id="cognome" class="field" value="" tabindex="9" /></p>
                <p><label for="email" class="left">Email:</label>
                   <input type="text" name="email" id="email" class="field" value="" tabindex="14" /></p>
                <input type="hidden" name="controller" value="registra" />
                <input type="hidden" name="task" value="creautente" />
                <p><input type="submit" name="registra" id="submit_1" class="button" value="Registrati" tabindex="15" /></p>
               </fieldset>
            </form>
          </div>
        </div>
    </div>
</div>
        