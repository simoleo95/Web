var myFunction = function() {
    if (document.getElementById('password').value == document.getElementById('password_1').value) {
        alert('registrazione avvenuta con successo');
        return true;
    }
    else {
        document.getElementById('password').value="";
        alert('campi non validi prego ricontrollare');
        return false;
      }
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
