<div class="col-md-9">
    <div class="row center-block">
        <div class="col-md-10 col-md-offset-1">
            <div class="contactform list-group">

                <form method="post" enctype="multipart/form-data" action="index.php">
                    <input type="hidden" name="controller" value="asta">
                    <input type="hidden" name="task" value="crea">

                    <h1 class="contact">Inserisci Asta</h1><br>

                    <input type="text" name="titolo" placeholder="Titolo" class="field list-group-item center-block" required/><br>

                    <textarea name="descrizione" placeholder="Descrizione" class="field list-group-item center-block" required></textarea><br>

                    <input type="file" name="foto" accept="image/jpeg" required class="list-group-item center-block"/><br>

                    <div class="col-md-4">
                    <select type="" name="categoria" class="field list-group-item center-block" required>
                        <option selected disabled>Scegli una categoria</option>
                        <option>Immobili</option>
                        <option>Elettronica</option>
                        <option>Hobby</option>
                        <option>Sport</option>
                    </select>
                    </div>

                    <div class="col-md-4">
                    <input type="date" name="dataf" value="Data" required class="field list-group-item center-block"/>
                    </div>

                    <div class="col-md-4">
                    <input type="number" name="prezzop" min="1" placeholder="Prezzo di partenza" required class="field list-group-item center-block"/>
                    </div>

                    <br><br><br>

                    <div class="col-md-13">
                        <input type="submit" name="submit" value="Inserisci" class="button list-group-item center-block" style="width: 100%; margin-top: 15px;">
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>