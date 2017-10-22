<div class="col-md-9">

  <div  style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
          <h1 class="contact">Profilo Utente</h1>
	  <table>
    <tr><td>Nome :</td><td>{$Utente->getNome()}</td></tr>
    <tr><td>Cognome :</td><td>{$Utente->getCognome()}</td></tr>
    <tr><td>Indirizzo e_mail :</td><td>{$Utente->getEmail()}</td></tr>
   
</table>
	     
	</div>
	
	<div  style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
	
		<h3>Valuta l'attività dell'utente</h3>
		<section class='rating-widget'>
  
  <!-- Rating Stars Box -->
  <div class='rating-stars text-center'>
    <ul id='stars'>
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
  
  <div class='success-box'>
    <div class='clearfix'></div>
    <img alt='tick image' width='14' src='https://i.imgur.com/3C3apOp.png'/>
    <div class='text-message'></div>
    <div class='clearfix'></div>
  </div>
  
  
  
</section>
	
	
	
	
	
	
	
	</div>

    <div class="row" style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
			 
        {if $asteCreate != false}
		 
            <h1>Aste create</h1>
            <h4>La tua valutazione e' di: </h4>
		
           {foreach from=$asteCreate item=dato}
	
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="data:image;base64,{$dato->getArticolo()->getFoto()}" style="height: 150px !important;" alt="">
                        <div class="caption">                            
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
        {/if}
		
		</div>


 
<div  class="row">
      
        {if $asteVinte != false}
        <h1>Aste vinte</h1>
            {foreach from=$asteVinte item=dato}

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="data:image;base64,{$dato->getArticolo()->getFoto()}" style="height: 150px !important;" alt="">
                        <div class="caption">
                            <h4 class="popup-link" data-popup-target="#example-popup">
                                <a href="#">{$dato->getArticolo()->getTitolo()}</a>
                                <p class="id" style="display: none">{$dato->getIdAsta()}</p>
                            </h4>
							<p style="font-size: 14px; font-weight: bold;">{$dato->getPrezzoF()->getValore()} {$dato->getPrezzoF()->getValuta()}</p>
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
               
                    </div>

                </div>
            {/foreach}
        {/if}
    </div>


</div>
 