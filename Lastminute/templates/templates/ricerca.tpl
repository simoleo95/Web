<div id="ricerca" class="col-md-9">
<div class="row">
        {if $dati != false}
            {foreach from=$dati item=dato}
                <div id="{$dato->getIdAsta()}" class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
						 
                        <div class="imgContainer">
                            <img src="data:image;base64,{$dato->getArticolo()->getFoto()}">
                        </div>
                        <div class="caption" style="text-align: center;">
                            <h4 class="popup-link" data-popup-target="#example-popup">
                                <a href="#">{$dato->getArticolo()->getTitolo()}</a>
                                <p class="id" style="display: none">{$dato->getIdAsta()}</p>
                            </h4>

                            <p class="prezzo">{$dato->getPrezzoF()->getValore()} {$dato->getPrezzoF()->getValuta()}</p>
                            <p>{$dato->getArticolo()->getDescrizione()}</p>
                        </div>
                      <!--  <div style="margin-top:-25px; text-align: center; font-size: 16px;">
                            <p style="font-weight: bold;">Scade il: {$dato->getDataF()}</p>
                        </div> -->
                    </div>
                </div>
            {/foreach}
        {/if}
    </div>

</div>