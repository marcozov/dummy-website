<?php
require_once('funzioni.php');

$categoria = $_GET['categoria'];
$tipo_prodotto = $_GET['prodotto'];
$titolo = $_GET['titolo'];
$titolo_categoria = $_GET['titolo_categoria'];
$prodotti = array();
            foreach (lista_prodotto_tipo_scelto($tipo_prodotto) as $lista_prodotti)
                {
                       $prodotti[$lista_prodotti['id_prodotto']] = array(
                   'nome'  =>  $lista_prodotti['name'],
                   'descrizione' => $lista_prodotti['descrizione'],
                   'prezzo' => $lista_prodotti['prezzo'],
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
<h2><?php echo($titolo); ?></h2><br />
<?php if($prodotti): ?>
<p> <span class="linkrosso"><a href="categoria_selezione.php?cat=<?php echo($categoria); ?>&titolo=<?php echo($titolo_categoria); ?>"> Indietro </a></span> </p>

    <table class="tabella">
    <tr>
        <td>Nome</td>
        <td>Immagine</td>
        <td>Prezzo</td>
    </tr>
<?php foreach ($prodotti as $key => $prodotto) :?>
    <tr>
        <td><?php echo $prodotto['nome'] ?></td>
        <td><center><img src="<?php echo $prodotto['descrizione'] ?>" width="50%" height="30%"></center><br /> <button name="nome" onclick="location.href='compra.php?idprodotto=<?php echo($key) ?>'">Compra</button></td>
        <td>€<?php echo $prodotto['prezzo'] ?></td>
    </tr>
<?php endforeach; ?>
    </table>

 <p><span class="linkrosso"><a href="categoria_selezione.php?cat=<?php echo($categoria); ?>&titolo=<?php echo($titolo_categoria); ?>"> Indietro </a></span></p>
<?php else: ?>
    <p> Prodotti momentaneamente non disponibili <br /><br />
        <span class="linkrosso"><a href="categoria_selezione.php?cat=<?php echo($categoria); ?>&titolo=<?php echo($titolo_categoria); ?>"> Indietro </a></span>
    </p>
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
