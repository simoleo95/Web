<form method="post" action="index.php">
    <p class="lead" style="text-align: center;">Login</p>
    <!--Gestione errori-->
    <input type="hidden" name="controller" value="log" />
    <input type="hidden" name="task" value="registra" />
    <p id="error">{$errore}</p>

    <div class="list-group">
        <input style="width:100%;" required class="field list-group-item" type="text" placeholder="Username" name="username"/>
        <input style="width:100%;" required class="field list-group-item" type="password" placeholder="Password" name="password"/>
        <br>
        <input style="width:100%;background:#ddd;" class="button list-group-item" type="submit" value="Login" />
        <p style="text-align: center; margin-top: 10px;">Non hai un account? <a href="Registrazione">Registrati</a></p>
    </div>
</form>