<?php

#define('DBUSER', 'root');
define('DBUSER', 'dummyuser');
define('DBPASS', 'password');
define('DBNAME', 'negozio');

//////////////////////////////////

function connessione() {
    static $connection = NULL;
    if (empty($connection)) {  
        try { 
            #$connection = new PDO("mysql:host=localhost;dbname=".DBNAME, DBUSER, DBPASS);
            $connection = new PDO("mysql:host=172.17.0.3;port=3306;dbname=".DBNAME, DBUSER, DBPASS);
        } catch (PDOException $e) {
            die($e);
            #die('impossibile connettersi al database');
        }
    }
    return $connection;
}

function lista_ricerca($testo_inserito)
{
    $connection = connessione();
    $memorizzaricerca = $connection->prepare("select * from prodotti where MATCH(nome) AGAINST(:testo_inserito in boolean mode)");
    $memorizzaricerca->execute(array('testo_inserito' => $testo_inserito));
    return $memorizzaricerca->fetchAll();
}

function lista_tipi_categoria($categoria)
{
    $connection = connessione();
    $memorizzacategorie = $connection->prepare("select id_tipo, tipi_prodotto.nome, fk_categoria, id_categoria, categorie.nome as name
                           from tipi_prodotto, categorie
                           where id_categoria = fk_categoria and id_categoria = :categoria");
    $memorizzacategorie->execute(array('categoria' => $categoria));
    return $memorizzacategorie->fetchAll();
}

function tipo_utente($email)
{
    $connection = connessione();
    $memorizza_tipo_utente = $connection->prepare("select tipo from utenti where email = :email");
    $memorizza_tipo_utente->execute(array('email' => $email));
    return $memorizza_tipo_utente->fetchAll();
}


function lista_prodotto_tipo_scelto($tipo_prodotto)
{
    $connection = connessione();
    $memorizzaprodotti = $connection->prepare("select id_prodotto, prodotti.nome as name, descrizione, prezzo, fk_tipo, id_tipo, tipi_prodotto.nome, fk_categoria
                         from prodotti, tipi_prodotto
                         where id_tipo = fk_tipo and id_tipo = :tipo_prodotto");
    $memorizzaprodotti->execute(array('tipo_prodotto' => $tipo_prodotto));
    return $memorizzaprodotti->fetchAll();
}

function inserimento_dati_cliente($codice_fiscale, $nome, $cognome, $data, $indirizzo, $citta, $cap, $email, $telefono, $password)
{
    $connection = connessione();
    $query = $connection->prepare("insert into utenti (codice_fiscale, nome, cognome, data_nascita, indirizzo, citta, CAP, email, password, numero_telefono, tipo)
        values (:codice_fiscale, :nome, :cognome, :data_nascita, :indirizzo, :citta, :cap, :mail, :password, :telefono, 'cliente') ");
    
    return $query->execute(array('codice_fiscale' => $codice_fiscale, 'nome' => $nome, 'cognome' => $cognome, 'data_nascita' => $data, 'indirizzo' => $indirizzo, 'citta' => $citta, 'cap' => $cap, 'mail' => $email, 'password' => $password, 'telefono' => $telefono));
} 


function controllo_email_disponibile($email)
{
    $connection = connessione();
    $memorizzaregistrati = $connection->prepare("select count(email) from utenti where email = :mail");
    $memorizzaregistrati->execute(array('mail' => $email));
    return $memorizzaregistrati->fetchColumn();
}  


function login($email, $password)
{
    $connection = connessione();
    $memorizzaregistrati = $connection->prepare("select count(email) from utenti where email = :mail and password= :pass");
    $memorizzaregistrati->execute(array('mail' => $email, 'pass' => $password));
    return $memorizzaregistrati->fetchColumn();
}  



function cambia_password($email, $password)
{
    $connection = connessione();
    $query = $connection->prepare("update utenti set password = :pass where email = :mail");  
    return $query->execute(array('mail' => $email, 'pass' => $password));
}

// Modifica 2.06.2012 
function elenco_categorie()
{
   $connection = connessione();
   $elenco_cat = $connection->prepare("select id_categoria, nome from categorie");
   $elenco_cat->execute();
   return $elenco_cat->fetchAll();
}

function elenco_tipi($fk_categoria)
{
   $connection = connessione();
   $elenco_tipi = $connection->prepare("select id_tipo, nome from tipi_prodotto where fk_categoria = :fkcategoria");
   $elenco_cat->execute(array('fkcategoria' => $fk_categoria));
   return $elenco_cat->fetchAll();
}

function lista_ricerca_avanzata($query, $categoria, $tipo, $marca)
{
    $connection = connessione();
    $memorizzaprodotti = $query;
    return $connection->query($memorizzaprodotti);
}

/* 
 * function lista_prodotto_tipo_scelto($tipo_prodotto)
{
    $connection = connessione();
    $memorizzaprodotti = "select id_prodotto, prodotti.nome as name, descrizione, prezzo, fk_tipo, id_tipo, tipi_prodotto.nome, fk_categoria
                         from prodotti, tipi_prodotto
                         where id_tipo = fk_tipo and id_tipo = '$tipo_prodotto'";
    return $connection->query($memorizzaprodotti);
 */
