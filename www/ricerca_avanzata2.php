<?php
require_once('funzioni.php');
$query = "select id_prodotto, prodotti.nome, descrizione, prezzo, fk_tipo, fk_categoria, fk_marca
                         from prodotti, tipi_prodotto
                         where fk_tipo = id_tipo";
                         

if ($_GET['categoria'] != "")
    { 
      $categoria = $_GET['categoria'];
      $query .= " AND fk_categoria = $categoria";
     
    }

if ($_GET['tipo'] != "") 
    { 
    $tipo = $_GET['tipo'];
    $query .= " AND fk_tipo = $tipo";
    }

if ($_GET['marca'] != "") 
    { 
        $marca = $_GET['marca'];
        $query .= " AND fk_marca = $marca";
    }

$query .= ";";


$ricerca = array();
            foreach (lista_ricerca_avanzata($query, $_GET['categoria'], $_GET['tipo'], $_GET['marca']) as $lista_ricerca)
                {
                       $ricerca[$lista_ricerca['id_prodotto']] = array(
                   'nome'  =>  $lista_ricerca['nome'],
                   'descrizione' => $lista_ricerca['descrizione'],
                   'prezzo' => $lista_ricerca['prezzo'],
                                                                      );       
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
<h2>Fantàsia - La tua nuova risorsa musicale</h2><br />
<p>
<?php if (empty($ricerca)): ?>
    La ricerca non ha prodotto risultati nel nostro database di prodotti.
<?php else: ?>
    <table class="tabella">
    <tr>
        <td>Nome</td>
        <td>Immagine</td>
        <td>Prezzo</td>
    </tr>
<?php foreach ($ricerca as $key => $prodotto) :?>
    <tr>
        <td><?php echo $prodotto['nome'] ?></td>
        <td><center><img src="<?php echo $prodotto['descrizione'] ?>" width="50%" height="30%"></center><br /> <button name="nome" onclick="location.href='compra.php?idprodotto=<?php echo($key) ?>'">Compra</button></td>
        <td>€<?php echo $prodotto['prezzo'] ?></td>
    </tr>
<?php endforeach; ?>
    </table>
<?php endif; ?>   
    
    
    
</p>

        </div> 
        <?php
        include("rightmenu.php");
        ?>
        <div class="cleaner">&nbsp;</div>
        </div>
<?php
  include("footer.php");
?>