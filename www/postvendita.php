<?php
$scelta = $_GET['scelta'];
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
<h2>Postvendita</h2><br />
<ul class="black"> 
    <li><a href="postvendita.php?scelta=postvendita1.php">SOSTITUZIONE ARTICOLO CONSEGNATO NON FUNZIONATE (DOA)</a></li>
    <li><a href="postvendita.php?scelta=postvendita2.php">SOSTITUZIONE ARTICOLO PER SPEDIZIONE ERRATA</a></li>
    <li><a href="postvendita.php?scelta=postvendita3.php">ARTICOLO INCOMPLETO DI ALCUNE PARTI O DI MATERIALE A CORREDO</a></li>
    <li><a href="postvendita.php?scelta=postvendita4.php">DANNEGGIAMENTO DELLA MERCE DURANTE IL TRASPORTO A DOMICILIO</a></li>
    <li><a href="postvendita.php?scelta=postvendita5.php">DIRITTO DI RECESSO</a></li>
</ul>
 <?php
        include("$scelta");
        ?>
        </div> 
        <?php
        include("rightmenu.php");
        ?>
        <div class="cleaner">&nbsp;</div>
        </div>
<?php
  include("footer.php");
?>
