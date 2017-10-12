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

<div class="col-md-9">
    <div class="row">
        <div  style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
          <h1 class="contact">Modulo di registrazione</h1>
          <div class="contactform">
            <form method="post">
              <p><label for="username" class="left">Nome utente:</label>
              <input type="text" name="username" id="username" class="field" value="" tabindex="5" required />
              <label id="eusername"></label> </p>
              <p ><label for="password" class="left">Password:</label>
              <input type="password" name="password" id="password" class="field" value="" tabindex="6" required/>
              <label id="epassword"></label></p>    
              <p><label for="password_1" class="left">Ripeti password:</label>
              <input type="password" name="password_1" id="password_1" class="field" value="" tabindex="7" onkeyup='check();' required/>
                <span id='message'></span>
              <label id="erpassword"></label></p>  
              <fieldset><legend>&nbsp;DETTAGLI ANAGRAFICI&nbsp;</legend>
                <p><label for="nome" class="left">Nome:</label>
                <input type="text" name="nome" id="nome" class="field" value="" tabindex="8" required /></p>
                <p><label for="cognome" class="left">Cognome:</label>
                <input type="text" name="cognome" id="cognome" class="field" value="" tabindex="9" required/></p>
                <p><label for="email" class="left">Email:</label>
                <input type="text" name="email" id="email" class="field" value="" tabindex="14" required/>
                <label id="eemail" ></label>   </p>
                <input type="hidden" name="controller" value="registra" required/>
                <input type="hidden" name="task" value="creautente" required/>
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
