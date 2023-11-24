# PASSAGGI PROGETTO

## Sul back end:
- Nome repository: laravel-boolean
- Nessun admin, nessun auth, solo un’unica rotta API pubblica che restituisca una lista di Cocktails.
- Unica rotta, unica risorsa, unico Model, unica tabella: quella dei Cocktails.
- I dati con cui popolare il database possono essere prelevati da quest’altra API https://www.thecocktaildb.com/api.php chiamandone le rotte e copiandone le risposte. 
Nota:
- L’API di riferimento non espone una rotta di index con tutti i Cocktails, sarà necessario chiamare le altre rotte esposte.
- Non è necessario prelevare tutti i dati dell’API di riferimento.


## Sul front end:
- Nome repository: laravel-boolean-frontoffice
- L’app deve esporre tre rotte client:
- “/” la pagina principale, che mostra la lista di Cocktails.
- “/chi-siamo” una pagina con la descrizione dell’attività del Cocktail Bar.
- “/contatti” una pagina con un form di contatto.