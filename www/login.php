<?php

require_once('funzioni.php');

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
<h2>Login</h2><br />

<?php if  (login($_POST['email'], $_POST['password']) == 0): ?>
<p>Errore. Assicurarsi di aver inserito i dati correttamente</p>
<?php else: ?>
<p>Login effettuato</p>
    <?php 
          $_SESSION['email'] = $_POST['email'];
          $_SESSION['password'] = $_POST['password'];
    ?>
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
