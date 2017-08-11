<form method="post" action="index.php">
    <p class="lead">Login</p>
    <!--Gestione errori-->
    <input type="hidden" name="controller" value="log" />
    <p id="error">{$errore}</p>

    <div class="list-group">
        <input style="width:100%;" class="list-group-item" type="text" placeholder="Username" name="username"/>
        <input style="width:100%;" class="list-group-item" type="password" placeholder="Password" name="password"/>
        <br>
        <input style="width:100%;background:#ddd;" class="list-group-item" type="submit" value="Login" />
        <p style="text-align: center; margin-top: 10px;">Non hai un account? <a href="index.php?controller=registra">Registrati</a></p>
    </div>
</form>