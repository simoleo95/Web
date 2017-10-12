<div class="col-md-9">
    <div class="row">
<div style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
	
    <h1>Inserisci Asta</h1>

    <form method="post" enctype="multipart/form-data" action="index.php">
        <input type="hidden" name="controller" value="asta">
        <input type="hidden" name="task" value="crea">
        <table style="border-collapse: separate;  border-spacing: 15px;">
			
            <tr>
                <td>Titolo</td>
                <td><input type="text" name="titolo" required/></td>
            </tr>
			
            <tr>
                <td>Descrizione</td>
                <td><textarea name="descrizione" required></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" accept="image/jpeg" required/></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select type="" name="categoria">
                        <option selected="selected">Immobili</option>
                        <option>Elettronica</option>
                        <option>Hobby</option>
						<option>Sport</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Data Scadenza</td>
                <td><input type="date" name="dataf" required/></td>
            </tr>
            <tr>
                <td>Prezzo di partenza</td>
                <td><input type="number" name="prezzop" min="1"  required/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Inserisci"</td>
            </tr>
        </table>
			
    </form>
</div>
		  </div>
</div>