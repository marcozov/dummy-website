<?php
include("header.php");
?>
        <div id="content">
        <?php
        include("leftmenu.php");
        ?>
        <div id="centercontent">  
   <h1>Fantàsia</h1>
<h2>Cambia password</h2><br />
<p>
    <?php if (!isset($_SESSION['email'])): ?>
        <p>Devi essere loggato per poter cambiare password! </p>
    <?php else: ?>
<form name="login" method="post" action="changepass.php">    
    <table class="modulo">
    <tr><td class="modulo">Password </td><td class="modulo"><input type="password" name="password" class="inputtastiera" /></td><tr>
    <tr><td class="modulo">Conferma Password</td> <td class="modulo"><input type="password" name="confermapassword" class="inputtastiera" /></td><tr>
    <tr><td class="modulo"><input type="submit" name="login" value="Invia"> <input type="reset" name="reset" value="Annulla"></td></tr>
    </table>
</form>
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
