{if $asta != false}
       <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                  <div class="caption">
                    <h4 class="pull-right">{$asta->getPrezzoF()->getValuta()}</h4>
                    <h4><a>{$asta->getArticolo()->getTitolo()}</a>
                    </h4>
					<p>{$asta->getArticolo()->getDescrizione()}</p>
					  <p>{var_dump($asta->getDataF())}</p>
                </div>
                <div class="ratings">
                   
                </div>
            </div>
        </div>
{/if}