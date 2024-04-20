# Progetto Universitario - Stema

## Università di Genova - Anno 2019

### Corso Universitario: Sviluppo di Applicazioni Web

### Descrizione del Corso

**Obiettivi e Contenuti**

**Obiettivi Formativi:**
Acquisire tecniche e metodi per la costruzione di applicazioni web dinamiche mediante linguaggi di scripting, prevedendo anche l'interazione con database remoti, la realizzazione di interfacce ricche e l'integrazione di dati esposti mediante API pubbliche sviluppando una conoscenza di base dei concetti di usabilità, accessibilità e di sicurezza.

**Modalità Didattiche:**
Lezioni, esercitazioni pratiche e studio a casa.

### Programma/Contenuto

- Creazione di pagine web statiche usando HTML5 e CSS.
- Validazione delle pagine web.

#### Programmazione Lato Server
- Creazione di pagine dinamiche con PHP: sintassi, strutture dati e di controllo, gli oggetti. 
- Utilizzo di cookie, controllo di accesso, controllo di sessione.
- Accesso a database remoti attraverso script PHP.
- Consumo di file XML e JSON.

#### Programmazione Lato Client
- Javascript e le specifiche DOM.
- Introduzione ad AJAX.
- Librerie JavaScript per la realizzazione di interfacce ricche.
- Il paradigma architetturale REST (REpresentational State Transfer).
- Sicurezza, usabilità e accessibilità nelle applicazioni web.

#### In Laboratorio
Esercitazioni e progetto finale che tocca tutti gli argomenti introdotti a lezione.

### Esami

#### Modalità d'Esame
- Test scritto e discussione orale.
- Durante l'orale si discutono i dettagli del progetto finale e lo studente deve dimostrare di averlo realizzato e di saperlo modificare su richiesta.

### Descrizione del Progetto

Stema è una startup nata per convogliare domanda e offerta degli studenti universitari in un dominio sicuro. L’idea è quella di garantire sicurezza nelle transazioni e di permettere vendite e scambi di appunti o prestazioni senza frodi tramite una nuova criptovaluta: Stema Coin (STMC).

#### Funzionalità Extra Implementate

**Primarie:**
- **Market:** Contiene gli Stema Coin (STMC) ed il merch. È possibile selezionare la quantità di elementi e poi rimuoverli a piacimento. L’ammontare degli STMC acquistati verrà inserito nel database.
- **Newsletter:** È possibile (solo se si è admin) inviare mail a chi interessato scegliendo l’oggetto ed il testo della mail.

**Secondarie:**
- **Iscrizione e disiscrizione alla newsletter:** Nel proprio profilo c’è la possibilità di cliccare su un link apposito.
- **Bio personale:** Nel profilo si può inserire una propria bio.
- **Cambio password:** Nella modifica del profilo si trova un link apposito.

### Struttura del Database

Il nostro database contiene due tabelle:

1. **Table: `search`**
   - Utilizzata per la ricerca di pagine tramite parole chiave.
   - Esempio di query: `$search = "%" . $search . "%"; $query = "SELECT * FROM search WHERE keywords or name LIKE ?";`
   
2. **Table: `users`**
   - Contiene tutte le informazioni relative agli utenti registrati.
   - Colonne: `UserID` (chiave primaria), `email` (chiave secondaria per evitare duplicati), dati utente, ammontare di STMC posseduto, booleani per iscrizione alla newsletter e ruolo admin (default 1).

---

### Note sull'Esperienza Informatica

**Anno dell'Esame:** 2019

**Livello di Sviluppo:**
L'esame è stato svolto nel 2019 quando l'esperienza informatica era ancora limitata, quindi il livello di sviluppo del progetto è ampiamente migliorabile. È stata un'opportunità di apprendimento e un punto di partenza per migliorare le competenze nel campo della programmazione web.

