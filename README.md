<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#il-progetto">Il progetto: Servizi statali</a></li>
    <li><a href="#funzionalità">Funzionalità</a></li>
    <li><a href="#struttura-del-codice">Struttura del codice</a></li>
    <li><a href="#link-al-sito">Link</a></li>
    <li><a href="#utilizzo">Utilizzo</a></li>
    <li><a href="#contribuire">Contribuire</a></li>
    <li><a href="#contatti">Contatti</a></li>
  </ol>
</details>



<!-- IL PROGETTO -->
## Il progetto

Questo progetto nasce con l'obiettivo di semplificare la vita ai cittadini italiani, rendendo più accessibili
e comprensibili i servizi e i bonus statali. Per dimostrare il valore del proprio contributo, Servizi statali ha deciso di realizzare una 
RestFul API che visualizzi il tempo risparmiato grazie all'uso dei suoi servizi.<br>

Per lo sviluppo dell'API si è scelto Laravel, che offre un’architettura solida MVC, protezione contro SQL Injection e una
gestione avanzata degli errori. Il database utilizza MySQL, con un sistema di migrazioni per una gestione ordinata dei dati.<br>

Questa API permette di:

<ul>
    <li>Gestire le tipologie di prestazioni offerte, includendo il nome e il tempo in minuti risparmiato;</li>
    <li>Registrare le prestazioni erogate, con la data di vendita, la tipologia di prestazione e la quantità erogata;</li>
    <li>
        Calcolare il tempo totale risparmiato dai cittadini, con la possibilità di filtrare per range temporale 
        e tipologia di prestazione.
    </li>
</ul><br>

<br>


<!-- FUNZIONALITà -->
## Funzionalità

| Metodo  | Endpoint                                                   | Descrizione                                              |
|---------|------------------------------------------------------------|----------------------------------------------------------|
| GET     | `/api/prestazioni/offerte`                                 | Ottiene tutte le prestazioni offerte                     |
| POST    | `/api/prestazioni/offerte`                                 | Crea una nuova prestazione offerta                       |
| PUT     | `/api/prestazioni/offerte/{id}`                            | Modifica un campo di una prestazione offerta             |
| PATCH   | `/api/prestazioni/offerte/{id}`                            | Modifica una prestazione offerta                         |
| DELETE  | `/api/prestazioni/offerte/{id}`                            | Cancella una prestazione offerta                         |
| GET     | `/api/prestazioni/erogate`                                 | Ottiene tutte le prestazioni erogate                     |
| POST    | `/api/prestazioni/erogate`                                 | Registra una prestazione erogata                         |
| PUT     | `/api/prestazioni/erogate/{id}`                            |Modifica un campo di una prestazione erogata              |
| PATCH   | `/api/prestazioni/erogate/{id}`                            | Modifica una prestazione erogata                         |
| DELETE  | `/api/prestazioni/erogate/{id}`                            | Cancella una prestazione erogata                         | 
| GET     | `/api/tempo-risparmiato`                                   | Ottiene il totale del tempo risparmiato                  |
| GET     | `/api/tempo-risparmiato?start=2025-01-01&end=2025-03-01`   | Filtra il tempo risparmiato per periodo                  |
| GET     | `/api/tempo-risparmiato?tipo_prestazione=1`                | Filtra il tempo risparmiato per tipologia di prestazione |



<!-- Struttura -->
## Struttura del progetto

L’applicazione è organizzata seguendo lo schema Laravel 12. <br>
Qui di seguito sono illustrati i file principali di questa applicazione.<br>
Per maggiori informazioni relative a Laravel consultare il [sito ufficiale](https://laravel.com/).

```text
📁 app/ 
 ├── 📁 Http
 │    └── 📁Controllers
 │         ├── PrestazioneOffertaController.php (Controller di prestazione offerta)
 │         ├── PrestazioneErogataController.php (Controller di prestazione erogata)
 │         └── CalcoliController.php (Controller dei calcoli sul tempo risparmiato)
 │   
 ├── 📁 Models
 │    ├── PrestazioneOfferta.php (Modello di prestazione offerta)
 │    └── PrestazioneErogata.php (Modello di prestazione erogata)
 │
 ├── 📁 database
 │    ├── 📁factories
 |    |    ├── PrestazioneOffertaFactory.php (Factory dati fittizi per prestazione offerta)
 │    |    └── PrestazioneErogataFactory.php (Factory dati fittizi per prestazione erogata)
 │    ├── 📁migrations
 |    |    └── 2025_03_17_083517_create_prestazioni_tables.php (Schema delle tabelle delle prestazioni)   
 │    └── 📁seeders
 |         ├── DatabaseSeeder.php (Seeder per popolare il database)
 │         ├── PrestazioneOffertaSeeder.php (Seeder per popolare la tabella prestazioni offerte)
 │         └── PrestazioneErogataSeeder.php (Seeder per popolare la tabella prestazioni erogate)
 │   
 └── 📁 routes 
      └── api.php (Definizione delle rotte API)
```


<!-- UTILIZZO -->
## Utilizzo

1. **Clona il repository:**
    ```bash
    git clone https://github.com/ElisabettaNale/servizi_statali_mysql_php_laravel.git
    cd servizi_statali_mysql_php_laravel
    ```
2. **Installare le dipendenze:**
    ```bash
    composer install
    ```
3. **Configura il file .env (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)**
    ```bash
    cp .env.example .env
    ```
4. **Crea il database**
    ```bash
    php artisan migrate --seed
    ```
5. **Avvia il server**
    ```bash
    php artisan serve
    ```
    

<!-- CONTRIBUIRE -->
## Contribuire

Se desideri contribuire al progetto, segui questi passaggi: 

1. **Forka il repository su GitHub.**

2. **Crea un nuovo branch per le tue modifiche.**

3. **Invia una request per l'integrazione delle tue modifiche nel repository principale.**


<!-- CONTATTI -->
## Contatti

Per qualsiasi domanda o suggerimenti, puoi contattarmi tramite il mio **profilo LinkedIn:** [Elisabetta Nale](https://www.linkedin.com/in/elisabetta-nale/)
e puoi anche dare un'occhiata al mio **sito web professionale:** [Home](https://elisabettanale.github.io/index.html).