<script src="templates/templates/js/offerta.js"></script>
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
				{if $user != false}
                <form class=dati_offerta>
                    <input type="hidden" name="controller" value="asta" />
                    <input type="hidden" name="task" value="offerta" />
                    <input type="hidden" name="id_asta" value="{$asta->getIdAsta()}"/>



                    <input type="number" name="offerta" style="width: 70px;" min="{$asta->getPrezzoF()->getValore()}" placeholder="{$asta->getPrezzoF()->getValore()}" required/>  {$asta->getPrezzoI()->getValuta()}
					<a class="btn btn-success offerta" >Partecipa</a>
			


                </form>
				{/if}
				{if isset($errore)}
                    {$errore}
				 {/if}

            </div>
        </div>

        <script src="templates/templates/js/timeout.js"></script>
    </div>
</div>