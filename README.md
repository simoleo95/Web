Progetto Web
# LAST-MINUTE

### Descrizione sommaria
L'applicazione "Last minute" consiste nel gestire la compravendita di prodotti generici attraverso aste online ed inoltre comunica all'utente gli aggiornamenti in tempo reale delle offerte all'oggetto interessato via email.
L'applicazione semplifica la compravendita di prodotti online fra privati e grazie ad una vendita attraverso aste l’utente ha la possibilità di fare grandi affari sfruttando le proprie abilità di negoziatore. 

### Tipologie di utenti
* ~~Amministratore:~~ svolge il ruolo di moderatore (può cancellare commenti e articoli ritenuti non appropriati) e gestisce utenti;
* ~~Utente non registrato:~~ ha la possibilità di visualizzare tutte le aste in corso ed eventualmente ricercarle per genere ma non può effettuare offerte sul prodotto;
* ~~Utente registrato:~~ ha le stesse capacità dell’utente non registrato in più può inserire prodotti all’asta, partecipare alle aste in corso e dare un voto ai venditori da cui si è acquistato un prodotto.

### Casi d'uso
* ~~Registrazione o accesso degli utenti:~~ l’utente entra nella home dell’applicazione web. Se non ha effettuato la registrazione clicca sull’apposito pulsante ed inserisce i dati necessari per crearsi uno spazio personale all’interno dell’applicazione. Altrimenti immette le proprie credenziali nell’apposito form di login in modo da avere i privilegi descritti precedentemente.
* ~~Inserimento di un articolo:~~
  __Attori:__ utente registrato.
  __Premessa:__ si suppone che l’utente registrato abbia effettuato il login.
  
  1. L’utente che si trova nella home page dell’applicazione clicca su bottone “Inserisci articolo”;
  2. Generato questo evento, il sistema reindirizza l’utente su una apposita pagina contente:
        * Nome dell’asta in formato stringa;
        * Descrizione del prodotto sotto forma di stringa;
        * Categoria che si presenta come una select, quindi senza avere la possibilità di aggiungerne di nuove oltre a quelle offerte dal sistema;
        * Immagini per un massimo di 5 elementi, di cui una obbligatoria;
        * Durata dell’asta espressa in ore che va da un minimo di 1 ora fino ad un massimo di 24 ore;
        * Prezzo di partenza che rappresenta la base da cui far partire le offerte.
  3. L’utente inserisce tutti i dati nella form e clicca sul bottone submit;
  4. Il sistema risponderà all’utente in uno dei seguenti modi:
        * Se i dati sono stati inseriti correttamente, il sistema farà partire un alert formato da un testo ed un pulsante ok. Nel testo ci sarà scritto che il suo prodotto è stato aggiunto all’asta e al click del tasto ok l’utente verrà reindirizzato verso la home page. Inoltre il sistema invierà una email al contatto personale dell’utente comunicandogli l’avvenuta aggiunta del suo articolo all’asta e il riepilogo dei dati inseriti;
        * Se almeno uno dei campi della form non è conforme alle regole descritte precedentemente, verrà restituito un alert, formato da due pulsanti ed un testo, con scritto di ricontrollare i dati inseriti perché non corretti. Alla pressione del tasto ok, l’utente visualizzerà la pagina antecedente, mentre con l’altro pulsante l’utente potrà contattare l’amministratore via mail per ulteriori spiegazioni. Questo processo porta all’apertura del client di posta predefinito dell’utente e verrà creato un nuovo messaggio con oggetto e destinatario impostati automaticamente.
  5. L’utente, una volta che ha soddisfatto il punto 4a, potrà visualizzare lo stato dell’asta appena inserita nel suo profilo personale.
  6. Al termine dell’asta, il sistema invierà una email all’utente che ha inserito l’articolo, notificandogli l’utente che si è aggiudicato il prodotto con il relativo prezzo.
* ~~Offerta:~~
  __Attori:__ utente registrato.
  __Premessa:__ si suppone che l’utente registrato abbia effettuato il login, inoltre nella home page ci sono i prodotti all’asta, ordinati per tempo di scadenza crescente, contenuti in dei box cliccabili. Il pagamento al termine dell’asta non sarà gestito dall’applicazione web ma sarà a carico degli utenti coinvolti.
  
  1. Supponiamo che l’utente che si trova nella home page dell’applicazione web, sia interessato a partecipare ad un’asta di un prodotto di suo gradimento. Quindi cliccherà sul box relativo.
  2. Il sistema reindirizzerà l’utente verso la pagina relativa al prodotto selezionato. Qui l’utente troverà:
        * Le informazioni inserite dall’autore dell’asta descritte nel punto 2 del caso d’uso precedente;
        * Il prezzo dell’ultimo offerente;
        * Una form contenente un box per l’inserimento della propria offerta dove sarà possibile inserire numeri ed un tasto submit per concretizzare l’offerta.
  3. L’utente inserirà il prezzo dell’offerta che vuole effettuare nell’apposito box e cliccherà sul pulsante di submit;
  4. Il sistema risponderà all’utente in uno dei seguenti modi:
        * Se il prezzo inserito è maggiore di quello attuale verrà visualizzato un alert costituito da un testo ed un pulsante ok. Nel testo verrà indicato che l’offerta è valida e con il tasto ok verrà chiuso l’alert;
        * Se il prezzo inserito è minore di quello attuale verrà visualizzato un alert costituito da un testo ed un pulsante ok. Nel testo verrà indicato che l’offerta non è valida e con il tasto ok verrà chiuso l’alert.
  5. L’utente potrà visualizzare lo stato delle proprie offerte sul proprio profilo, che saranno rappresentate come nella home (quindi sarà possibile tornare alla pagina del prodotto cliccando sul box e continuare a partecipare all’asta). Le seguenti aste avranno inoltre un indicatore che comunicherà all’utente se l’ultima offerta è la sua oppure no.
  6. Quando l’offerta dell’utente viene superata, il sistema gli notificherà questo cambiamento attraverso il suo indirizzo di posta elettronica, contenente come oggetto il nome del prodotto e come testo l’avviso del superamento della sua offerta ed il nuovo prezzo. 
* ~~Valutazione del venditore:~~ ogni utente che ha effettuato acquisti tramite l’app, ha la possibilità di rilisciare una valutazione (da 1 a 5) al venditore da cui ha acquistato il prodotto. Per effettuare ciò l’utente deve recarsi sul profilo del venditore nella quale troverà un apposito spazio addetto a tale compito. Ogni utente venditore avrà sul proprio profilo la media delle valutazioni ricevute per fornire maggiori dettagli ai prossimi acquirenti.

### Modello di dominio