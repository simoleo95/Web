<div>

    <div class="thumbnail">
        <img class="img-responsive" style="height: 300px !important;" src="data:image;base64,{$asta->getArticolo()->getFoto()}" alt="">
        <div class="caption-full">
            <h4 class="pull-right">Prezzo di partenza: {$asta->getPrezzoI()->getValore()} {$asta->getPrezzoI()->getValuta()}</h4>
            <h4><a href="#">{$asta->getArticolo()->getTitolo()}</a>
            </h4>
            <p>{$asta->getArticolo()->getDescrizione()}</p>
        </div>
		<div class="caption-full">
			<p id="timeout" tag="{$asta->getDataF()}"></p>
			<br><br>
		</div>
        <div style="margin-bottom: 20px;">
            <h4 class="pull-right">Prezzo attuale: {$asta->getPrezzoF()->getValore()} {$asta->getPrezzoF()->getValuta()}</h4>
            <div class="text-left" style="margin: 10px;">
                <form method="get" action="index.php">
                    <input type="hidden" name="controller" value="asta" />
                    <input type="hidden" name="task" value="offerta" />
                    <input type="hidden" name="id_asta" value="{$asta->getIdAsta()}"/>

                    <input type="number" name="offerta" style="width: 70px;" {if !$user} disabled {/if} min="{$asta->getPrezzoF()->getValore()}" placeholder="{$asta->getPrezzoF()->getValore()}" required/>  {$asta->getPrezzoI()->getValuta()}
                    <input type="submit" class="btn btn-success" {if !$user} disabled {/if} value="Partecipa"/>

                    {if !$user}<p>Registrati per poter effettuare un'offerta</p>{/if}
                </form>
            </div>
        </div>

        <script src="templates/templates/js/timeout.js"></script>
    </div>
</div>