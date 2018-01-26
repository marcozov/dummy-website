<?php
require_once('funzioni.php');



$testo = $_GET['ricerca'];
$ricerca = array();


if(isset($testo))
        { 
            foreach (lista_ricerca($testo) as $lista_ricerca)
                {
                       $ricerca[$lista_ricerca['id_prodotto']] = array(
                   'nome'  =>  $lista_ricerca['nome'],
                   'descrizione' => $lista_ricerca['descrizione'],
                   'prezzo' => $lista_ricerca['prezzo'],
                                                                      );       
       
                }
        }
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
   <h2>Ricerca semplice</h2><br />

<?php if($testo!="") :?>
<?php if($ricerca) :?>
<table class="tabella">
    <tr>
        <td>Nome</td>
        <td>Immagine</td>
        <td>Prezzo</td>
    </tr>
<?php foreach ($ricerca as $key => $search) :?>
    <tr>
        <td><?php echo $search['nome'] ?></td>
        <td><center><img src="<?php echo $search['descrizione'] ?>" width="50%" height="30%"></center><br /> <button name="nome" onclick="location.href='compra.php?idprodotto=<?php echo($key) ?>'">Compra</button></td>
        <td>€<?php echo $search['prezzo'] ?></td>
    </tr>
<?php endforeach; ?>
    </table>
<?php else: ?>

    <p> La ricerca di - <b><?php echo ($testo); ?></b> - non ha prodotto risultati nel nostro database di prodotti.
        <br /> Prova a reinserire un valore assicurandoti che tutte le parole siano state digitate correttamente, o eventualmente cambiando le parole chiave.
    
    </p>
<?php endif; ?>
<?php else: ?>
    <p> Non hai inserito nessun valore. Riprova inserendo dei caratteri </p>
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
