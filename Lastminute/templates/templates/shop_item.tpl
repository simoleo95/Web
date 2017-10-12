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

                    <input type="number" name="offerta" style="width: 70px;" min="{$asta->getPrezzoF()->getValore()}" placeholder="{$asta->getPrezzoF()->getValore()}" required/>  {$asta->getPrezzoI()->getValuta()}
                    <input type="submit" class="btn btn-success" value="Partecipa"/>
                </form>
            </div>
        </div>

        <script src="templates/templates/jquery-libs/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="templates/templates/js/jquery.timeTo.js"></script>
        <script src="templates/templates/js/timeout.js"></script>

        <link href="templates/templates/css/timeTo.css" type="text/css" rel="stylesheet"/>
        <!--
        <div class="ratings">
            <p class="pull-right">3 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                4.0 stars
            </p>
        </div>
        -->
    </div>

    <!--
    <div class="well">

        <div class="text-right">
            <a class="btn btn-success">Leave a Review</a>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">10 days ago</span>
                <p>This product was great in terms of quality. I would definitely buy another!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">12 days ago</span>
                <p>I've alredy ordered another one!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">15 days ago</span>
                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
            </div>
        </div>

    </div> -->
</div>