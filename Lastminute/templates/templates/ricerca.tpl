{if $dati != false}
    {foreach from=$dati item=dato}
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="data:image;base64,{$dato->getArticolo()->getFoto()}" alt="">
                <div class="caption">
                    <h4 class="pull-right">{$dato->getPrezzoI()->getValore()} {$dato->getPrezzoF()->getValuta()}</h4>
                    <h4><a href="index.php?controller=asta&task=dettagli&id_asta={$dato->getIdAsta()}">{$dato->getArticolo()->getTitolo()}</a>
                    </h4>
					<p>{$dato->getArticolo()->getDescrizione()}</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>
    {/foreach}
{/if}