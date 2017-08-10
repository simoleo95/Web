<div>
    <h1>Inserisci Asta</h1>

    <form method="post" enctype="multipart/form-data" action="index.php">
        <input type="hidden" name="controller" value="asta">
        <input type="hidden" name="task" value="crea">
        <table>
            <tr>
                <td>Titolo</td>
                <td><input type="text" name="titolo"/></td>
            </tr>
            <tr>
                <td>Descrizione</td>
                <td><textarea name="descrizione"></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto"/></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select type="" name="categoria">
                        <option selected="selected">Immobiliari</option>
                        <option>Automobili</option>
                        <option>Cose</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Data Scadenza</td>
                <td><input type="datetime-local" name="dataf"/></td>
            </tr>
            <tr>
                <td>Prezzo di partenza</td>
                <td><input type="number" name="prezzop" min="1"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Inserisci"/></td>
            </tr>
        </table>
    </form>
</div>