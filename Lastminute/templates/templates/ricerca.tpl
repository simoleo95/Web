{if $dati != false}
    {section name=i loop=$dati}
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">{$dati[i].getPrezzoF().getValore()} {$dati[i].getPrezzoF().getValuta()}</h4>
                    <h4><a href="#">{$dati[i].getArticolo().getTitolo()}</a>
                    </h4>
                    <p>{$dati[i].getArticolo().getDescrizione()}</p>
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
    {/section}
{/if}