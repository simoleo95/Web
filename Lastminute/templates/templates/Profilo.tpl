<div class="col-md-9">
    <div class="row">
        <div class="col-md-6">
            <h1 style="text-align: center;">Riepilogo dati utente</h1>
            <div style="text-align: center;">
                <p><span style="font-weight: bold;">Nome:</span> {$Utente->getNome()}</p>
                <p><span style="font-weight: bold;">Cognome:</span> {$Utente->getCognome()}</p>
                <p><span style="font-weight: bold;">Username:</span> {$Utente->getUsername()}</p>
                <p><span style="font-weight: bold;">Email:</span> {$Utente->getEmail()}</p>
                <p id=utenteP style="display:none">{$Utente->getUsername()}</p>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            <h1 style="text-align: center;">Valuta l'attività dell'utente</h1>

            <section class='rating-widget' style="">
                <!-- Rating Stars Box -->
                <div class='rating-stars text-center'>
                    <ul {if $creatore && ($creatore neq $Utente->getUsername())}id='stars'{/if}>
                        <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                    </ul>
                </div>

                <p style="text-align: center;">Media voto: 4.3</p>

                {if $creatore  eq $Utente->getUsername()} <p style="text-align: center; font-weight: bold;">Non puoi autovalutarti.</p> {/if}
                {if !$creatore} <p style="text-align: center; font-weight: bold;"> Fai il login per valutare un utente. </p> {/if}

                <div class='success-box'>
                    <div class='clearfix'></div>
                    <img alt='tick image' width='14' src='https://i.imgur.com/3C3apOp.png'/>
                    <div class='text-message'></div>
                    <div class='clearfix'></div>
                </div>
            </section>
        </div>
	</div>

    <hr>

    <div class="row">

        {if $asteCreate != false}
		 
            <h1 style="text-align: center;">Aste create</h1>
            <br>

            <div class="slider">
                <button id="go-left">&laquo;</button>
                <button id="go-right">&raquo;</button>
                <div style="margin-top: 20px;">
                    {foreach from=$asteCreate item=dato}
                        <div class="col-sm-4 col-lg-4 col-md-4" style="display: inline-block; float: left;">
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

                            </div>
                        </div>

                    {/foreach}
                </div>
            </div>
        {/if}
		
		</div>

        <br><hr>

        <!-- Da fixare scroll su aste vinte -->
        <div class="row">
      
            {if $asteVinte != false}

                <h1 style="text-align: center;">Aste vinte</h1>
                <br>

                <div class="slider">
                    <button id="go-left">&laquo;</button>
                    <button id="go-right">&raquo;</button>
                    <div style="margin-top: 20px;">
                        {foreach from=$asteVinte item=dato}

                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <div class="imgContainer">
                                        <img src="data:image;base64,{$dato->getArticolo()->getFoto()}">
                                    </div>
                                    <div class="caption" style="text-align: center;">
                                        <h4 class="popup-link" data-popup-target="#example-popup">
                                            <a href="#">{$dato->getArticolo()->getTitolo()}</a>
                                            <p class="id" style="display: none">{$dato->getIdAsta()}</p>
                                        </h4>
							            <p style="font-size: 14px; font-weight: bold;">{$dato->getPrezzoF()->getValore()} {$dato->getPrezzoF()->getValuta()}</p>
                                        <p>{$dato->getArticolo()->getDescrizione()}</p>
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>
            {/if}
        </div>
</div>
 