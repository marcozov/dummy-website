
<?php
require_once('funzioni.php');
include("header.php");
?>
        <div id="content">
        <?php
        include("leftmenu.php");
        ?>
        <div id="centercontent">  
   <h1>Fantàsia</h1>
<h2>Cambia password</h2><br />
<?php if ((strlen($_POST['password'])<5)||(strlen($_POST['confermapassword'])<5)): ?>
<p> errore lunghezza </p>
 <?php echo(strlen($_POST['password'])); ?>
<?php endif; ?>

<?php if ((!isset($_POST['password']))||(!isset($_POST['confermapassword']))||((strlen($_POST['password'])<5)||(strlen($_POST['confermapassword'])<5))): ?>
            <p>Assicurati di aver inserito tutti i campi correttamente. </p>
            <?php header ("refresh:1; url=cambiapass.php"); ?>
<?php else: ?>
             
          <?php if ($_POST['password'] != $_POST['confermapassword']) : ?>
                     <p>Le 2 password devono coincidere. </p>
                     <?php header ("refresh:1; url=cambiapass.php"); ?> 
                     <?php else:  cambia_password($_SESSION['email'], $_POST['password']);   ?>
                        <p>Password cambiata </p>
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
