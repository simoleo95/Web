<div>

    <div class="col-md-9">

    <div class="row">
        {if $asteCreate != false}
            <h1>Aste create</h1>
            <h4>La tua valutazione e' di: </h4>
            {foreach from=$asteCreate item=dato}
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="data:image;base64,{$dato->getArticolo()->getFoto()}" style="height: 150px !important;" alt="">
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
    </div>
</div>


    <div class="col-md-9">

    <div class="row">
        {if $asteVinte != false}
        <h1>Aste vinte</h1>
            {foreach from=$asteVinte item=dato}

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="data:image;base64,{$dato->getArticolo()->getFoto()}" style="height: 150px !important;" alt="">
                        <div class="caption">
                            <h4 class="pull-right">{$dato->getPrezzoI()->getValore()} {$dato->getPrezzoF()->getValuta()}</h4>
                            <h4><a href="index.php?controller=asta&task=dettagli&id_asta={$dato->getIdAsta()}">{$dato->getArticolo()->getTitolo()}</a>
                            </h4>
                            <p>{$dato->getArticolo()->getDescrizione()}</p>
                        </div>
                                            <form method="post" enctype="multipart/form-data" action="index.php">
                        <input type="text" name="username" value="{$dato->getUtentecreatore()->getUsername()}"  style="display:none">
                        <input type="hidden" name="controller" value="asta">
                        <input type="hidden" name="task" value="valuta">
                        <table>

                            <td><input type="number" name="valutazione" required/></td>

                            <td><input type="submit" name="submit" value="Valuta"</td>

                            </table>
                    </form>
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
    </div>
</div>

</div>