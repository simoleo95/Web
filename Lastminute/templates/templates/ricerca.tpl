

    <div class="row">
        {if $dati != false}
            {foreach from=$dati item=dato}
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="data:image;base64,{$dato->getArticolo()->getFoto()}" style="height: 150px  !important; width:180px !important" alt="">
                        <div class="caption">
                            <h4 class="pull-right">{$dato->getPrezzoF()->getValore()} {$dato->getPrezzoF()->getValuta()}</h4>
                            <h4 class="popup-link" data-popup-target="#example-popup">
                                <a href="#">{$dato->getArticolo()->getTitolo()}</a>
                                <p class="id" style="display: none">{$dato->getIdAsta()}</p>
                            </h4>

                            <p>{$dato->getArticolo()->getDescrizione()}</p>
                        </div>

                        <div style="margin-top:-25px; text-align: center; font-size: 16px;">
                            <p>Scade il: {$dato->getDataF()}</p>
                        </div>
                    </div>
                </div>
            {/foreach}
        {/if}
    </div>