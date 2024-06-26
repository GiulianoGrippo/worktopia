# Workopia

Workopia è un'applicazione web per la pubblicazione e la ricerca di annunci di lavoro. Questo progetto è stato sviluppato utilizzando un framework PHP personalizzato, con un'architettura MVC (Model-View-Controller) per una maggiore organizzazione e manutenibilità del codice.

## Funzionalità

- **Pubblicazione di annunci di lavoro**: Gli utenti possono pubblicare annunci di lavoro fornendo dettagli come la posizione, la descrizione del lavoro, e i requisiti.
- **Ricerca di annunci di lavoro**: Gli utenti possono cercare annunci di lavoro basati su parole chiave, categoria, o località.
- **Gestione utenti**: Registrazione, login/logout, e gestione del profilo utente.

## Struttura del Progetto

Il progetto è organizzato come segue:

- `App/`: Contiene i controller e le viste. I controller gestiscono la logica di business, mentre le viste contengono il markup HTML.
- `Framework/`: Contiene le classi del framework, inclusi router, middleware, e classi per l'accesso al database.
- `public/`: Directory pubblica che contiene il file `index.php` (punto di ingresso dell'applicazione), oltre a risorse come CSS e immagini.
- `config/`: Contiene file di configurazione, come le credenziali del database.
- `vendor/`: Contiene le dipendenze del progetto, gestite tramite Composer.

## Requisiti

- PHP 7.4 o superiore
- MySQL 5.7 o superiore
- Composer per la gestione delle dipendenze

## Installazione

1. Clona il repository in locale: git clone https://github.com/giulianogrippo/workopia.git
2. Installa le dipendenze con Composer: cd workopia composer install
3. Configura il database modificando il file `config/db.php` con le tue credenziali.
4. Importa lo schema del database (non fornito in questo README).

## Uso

Per avviare l'applicazione, configura il tuo server web per puntare alla directory `public/` del progetto. Assicurati che il modulo rewrite sia abilitato per permettere al router di funzionare correttamente.