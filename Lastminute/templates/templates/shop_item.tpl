<script src="templates/templates/js/offerta.js"></script>
<div>

    <div class="thumbnail">
        <div class="row">
            <div class="col-md-6" style="width: 370px; height: 250px; position: relative; overflow: hidden;">
                <img class="img-responsive" style="position: absolute; top: -9999px; left: -9999px; right: -9999px; bottom: -9999px; margin: auto;" src="data:image;base64,{$asta->getArticolo()->getFoto()}" alt="">
            </div>
            <div class="col-md-6 caption-full">
                <h2 style="color: #1b6d85; font-weight: bold;">{$asta->getArticolo()->getTitolo()}</h2>
                <p style="font-size: 15px;">Venditore: <a href="index.php?controller=asta&task=profilo&username={$asta->getUtentecreatore()->getUsername()}">{$asta->getUtentecreatore()->getUsername()}</a></p>
                <p style="font-size: 19px; text-align: center;">Prezzo di partenza: <span style="font-weight: bold;">{$asta->getPrezzoI()->getValore()} {$asta->getPrezzoI()->getValuta()}</span></span></p>
                <p style="font-size: 16px; text-align: center;">{$asta->getArticolo()->getDescrizione()}</p>
            </div>
        </div>
        <div class="row" style="background: #eee; margin: 0 !important; padding-bottom: 40px;">
            <div class="caption-full">
                <p style="text-align: center; font-size: 16px;">Scade tra:</p>
                <p id="timeout" class="col-md-12 center-block" tag="{$asta->getDataF()}"></p>
            </div>
        </div>
        <div class="row" style="padding-top: 10px; margin: 0; background: #eee;">
            <!--<div class="col-md-5 pull-left">
                <p style="font-size: 19px; text-align: center; line-height: 50px;">Prezzo attuale: <span style="font-weight: bold;">{$asta->getPrezzoF()->getValore()} {$asta->getPrezzoF()->getValuta()}</span></p>
            </div>-->
			<p class="prezzoF" style="display: none">{$asta->getPrezzoF()->getValore()}</p>
			<p class="astaID" style="display: none">{$asta->getIdAsta()}</p>
            <div class="col-md-12 center-block" style="margin: 10px; padding-bottom: 10px;">
                <form class="dati_offerta"> <!--method="get" action="index.php"-->
                    <input type="hidden" name="controller" value="asta" />
                    <input type="hidden" name="task" value="offerta" />
                    <input type="hidden" name="id_asta" value="{$asta->getIdAsta()}"/>

                    {if $asta->getUtentecreatore()->getUsername() eq $asta->getUtentevincitore()->getUsername()}
                        <p style="font-size: 19px;">Nessuna offerta</p>
                    {else}
                        <p style="font-size: 19px;">Offerta attuale: <a href="index.php?controller=asta&task=profilo&username={$asta->getUtentevincitore()->getUsername()}">{$asta->getUtentevincitore()->getUsername()}</a></p>
					{/if}

                    {if ($asta->getPrezzoF()->getValore() == 0) }
                    <input type="number" class="field" style="width: 70px;height: 42px;border-radius: 5px;" name="offerta" style="width: 70px; height: 35px; border-radius: 5px;" {if !$user} disabled {/if} min="{$asta->getPrezzoF()->getValore()}" placeholder="{$asta->getPrezzoI()->getValore()}" required/>
					{else}
					<input type="number" class="field" style="width: 70px;height: 42px;border-radius: 5px;" name="offerta" style="width: 70px; height: 35px; border-radius: 5px;" {if !$user} disabled {/if} min="{$asta->getPrezzoF()->getValore()}" placeholder="{$asta->getPrezzoF()->getValore()}" required/>
					{/if}

                    {if $user && ($creatore neq $asta->getUtentecreatore()->getUsername())}
					<a class="btn btn-success offerta">Partecipa</a>
                    {/if}

                    {if !$user}<p style="text-align: center;">Registrati per poter effettuare un'offerta</p>{/if}
                    {if $creatore eq $asta->getUtentecreatore()->getUsername()}<p style="text-align: center;">Non puoi effettuare un'offerta su un tuo prodotto</p>{/if}
                </form>
				{if isset($errore)}
                    {$errore}
				 {/if}

            </div>
        </div>

        <script src="templates/templates/js/timeout.js"></script>
    </div>
</div>