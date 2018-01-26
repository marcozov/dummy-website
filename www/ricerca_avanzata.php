<?php
$connessione = mysql_connect("localhost", "root", "")
          or die("Connessione non riuscita: " . mysql_error());
          mysql_select_db("negozio",$connessione) or die("Database non selezionato: " . mysql_error());
		  
if (isset($_REQUEST['categoria']))
  $categoria = $_REQUEST['categoria'];  
if (isset($_REQUEST['tipo']))
  $tipo = $_REQUEST['tipo'];
if (isset($_REQUEST['marca']))
  $marca = $_REQUEST['marca'];
?>

<?php
require_once('funzioni.php');
?>


<?php
include("header.php");
?>
<!--
<script type="text/javascript" language="Javascript">

</script> -->
        <div id="content">
        <?php
        include("leftmenu.php");
        ?>
        <div id="centercontent">  
   <h1>Fantàsia</h1>
<h2>Fantàsia - La tua nuova risorsa musicale</h2><br />
<form name="ricerca__avanzata" method="get" action="ricerca_avanzata2.php">

<!-- Modifica 2.06.2012 -->

<br /><p>Categoria

<select name="categoria" onChange="cambio_c();">
<?php
echo '<option value="">Seleziona</option>';  
$query_r = "SELECT * FROM categorie";    //query categoria 
$result_r = mysql_query($query_r);
while($row = mysql_fetch_assoc($result_r)){
    if($row['id_categoria']==$categoria)
      echo '<option value="'.$row['id_categoria'].'" selected>'.$row['nome'].'</option>';
	else
      echo '<option value="'.$row['id_categoria'].'">'.$row['nome'].'</option>';
}

?>
</select>


    
    Tipo
<select name="tipo" onChange="cambio_t();">
<?php

echo '<option value="">Seleziona</option>'.$categoria;
$query_p ="SELECT * FROM tipi_prodotto WHERE fk_categoria='".$categoria."'";   //query tipo 
echo $query_p;
$result_p = mysql_query($query_p);
while($row = mysql_fetch_assoc($result_p)) {
    if($row['id_tipo']==$tipo)
       echo '<option value="'.$row['id_tipo'].'" selected>'.$row['nome'].'</option>';
	else
       echo '<option value="'.$row['id_tipo'].'" >'.$row['nome'].'</option>';
}

?>
</select>

     
    Marca
    <select name="marca" >
<?php
echo '<option value="">Seleziona</option>';  
$query_r = "SELECT * FROM marche";    //query marca
$result_r = mysql_query($query_r);
while($row = mysql_fetch_assoc($result_r)){
    if($row['id_marca']==$marca)
      echo '<option value="'.$row['id_marca'].'" selected>'.$row['nome'].'</option>';
	else
      echo '<option value="'.$row['id_marca'].'">'.$row['nome'].'</option>';
}

?>
</select>
    
<br /><br />

<input type="submit" name="send" value="Invia"> <input type="reset" name="annulla" value="Annulla">

	</p>
	
</form>

        </div> 
        <?php
        include("rightmenu.php");
        ?>
        <div class="cleaner">&nbsp;</div>
        </div>
<?php
  include("footer.php");
?>
