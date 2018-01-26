<?php

require_once('funzioni.php');
$flag = 0;
$data[0] = $_POST['giorno'];
$data[1] = $_POST['mese'];
$data[2] = $_POST['anno'];

if (checkdate($_POST['mese'], $_POST['giorno'], $_POST['anno']) == true)
  {
    $date = implode('-', array_reverse($data));
  }
  else $flag = 1;
if (!(strtotime($date)))  
        $flag = 1;

if (strlen($_POST['codice_fiscale']) != 16)
    $flag = 1;

if (strlen($_POST['password']) < 5)
    $flag = 1;

if (is_numeric($_POST['cap']))
    echo("");
        else $flag = 1;

if (strlen($_POST['cap']) > 6)
    $flag = 1;

//lunghezza max telefono

if (is_numeric($_POST['telefono']))
    echo("");
        else $flag = 1;
if ((strlen($_POST['telefono']) < 9)||(strlen($_POST['telefono']) > 15))
    $flag = 1;    
    

foreach ($_POST as $modulo)
{
    if (!isset($modulo)||(empty($modulo)))
    { 
        $flag = 1;
    }
}

$find = "/^[a-zA-Z0-9-_.]+@[a-zA-Z0-9-_.]+.[a-zA-Z]{2,4}$/"; 

?>


<?php
include("header.php");
?>
        <div id="content">
        <?php
        include("leftmenu.php");
        ?>
        <div id="centercontent">  
   <h1>Fantàsia</h1>
<h2>Registrazione</h2><br />
    <?php if (($flag == 1)||(!preg_match($find, trim($_POST['email'])))): ?>
            <p>Assicurati di aver inserito tutti i campi correttamente. </p>
            <?php header ("refresh:1; url=registrazione1.php"); ?>
    <?php else: ?>
             
          <?php  if  (controllo_email_disponibile($_POST['email']) > 0): ?>
                     <p>Account già esistente</p>
                     <?php header ("refresh:1; url=registrazione1.php"); ?>
                
               <?php else: ?>
                     <?php inserimento_dati_cliente($_POST['codice_fiscale'], $_POST['nome'], $_POST['cognome'], $date, $_POST['indirizzo'], $_POST['citta'], $_POST['cap'], $_POST['email'], $_POST['telefono'], $_POST['password']); ?>
                      <?php  // mail($_POST['email'], "Conferma registrazione ", "Testo Linea 1\nLinea 2\nLinea 3"); ?> 
                     <p>Utente registrato.</p>
               <?php endif; ?>
    <?php endif; ?>  
    
    

        </div>    
            
          
        <?php
        include("rightmenu.php");
        ?>
        <div class="cleaner">&nbsp;</div>
        </div>
<?php
  include("footer.php");
?>
