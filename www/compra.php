<?php
include("header.php");
?>
        <div id="content">
        <?php
        include("leftmenu.php");
        ?>
        <div id="centercontent">  
   <h1>Fantàsia</h1>
<h2>Acquista prodotto</h2><br />

<?php if(isset($_SESSION['email'])): ?>

<p>Questo è un sito dimostrativo. Non puoi procedere con l'acquisto.</p>

<?php else : ?>

<p>Devi effettuare il login per poter acquistare un prodotto </p>

<?php endif ?>
        </div> 
        <?php
        include("rightmenu.php");
        ?>
        <div class="cleaner">&nbsp;</div>
        </div>
<?php
  include("footer.php");
?>
