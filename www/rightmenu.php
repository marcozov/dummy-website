<div class="menu">

<?php  
       require_once('funzioni.php');       
?>
    

    <img src="images/login.gif" />
    
 <?php if (!isset($_SESSION['email'])): ?>   
    
    <ul>
        
        <form name="login" method="post" action="login.php">
        <li>Email<br /> <input type="text" name="email" class="inputtastiera" /> </li>
        <li>Password<br /> <input type="password" name="password" class="inputtastiera" /> </li><br />
        <li><input type="submit" name="login" value="Login"> <input type="reset" name="reset" value="Annulla"></li>
        </form>
        <br />
        <li><a href="registrazione1.php">Registrati</a></li>
    </ul>
    
<?php else: ?>
    <?php foreach (tipo_utente($_SESSION['email']) as $row)
            {
                 $tipo = $row['tipo'];
            }   
    ?>
        <?php if ($tipo == 'cliente') : ?>
                <p>Sei loggato <br /> <?php echo($_SESSION['email']); ?> <br /><br />
                    <a href="cambiapass.php">Cambia password</a> <br />
                    <a href="logout.php">Logout</a> <br />
                    (cliente)
                </p>
        <?php else: ?>
            <?php if($tipo == 'operatore'): ?>
                <p>Sei loggato <br /> <?php echo($_SESSION['email']); ?> <br /><br />
                    <a href="cambiapass.php">Cambia password</a> <br />
                    <a href="logout.php">Logout</a> <br />
                    (operatore)
                    
                </p>
            
            <?php else: ?>
               <p>Sei loggato <br /> <?php echo($_SESSION['email']); ?> <br /><br />
                    <a href="cambiapass.php">Cambia password</a> <br />
                    <a href="logout.php">Logout</a> <br />
                    (amministratore)
                </p>
                
               
  
            <?php endif; ?>
        <?php endif; ?>
<?php endif; ?>
    
<img src="images/pagamento.gif" />

<ul>
    <li><a href="javascript:Popup('howtopay2.html#Contrassegno')">Contrassegno</a></li>
    <li><a href="javascript:Popup('howtopay2.html#Bollettino Postale')">Bollettino Postale</a></li>
    <li><a href="javascript:Popup('howtopay2.html#Bonifico bancario')">Bonifico bancario</a></li>
    <li><a href="javascript:Popup('howtopay2.html#Carta di credito')">Carta di credito</a></li>
    <li><a href="javascript:Popup('howtopay2.html#Pagamento rateale')">Pagamento rateale</a></li>
</ul>


<img src="images/informazioni.gif" />
<ul>
    <li><a href="shipping.php">Pagamento e consegna</a></li>
    <li><a href="garanzia.php">Garanzia</a></li>
    <li><a href="postvendita.php?scelta=postvendita1.php">Postvendita</a></li>
    <li><a href="privacy.php">La vostra privacy</a></li>
    <li><a href="postvendita.php?scelta=postvendita5.php">Diritto di Recesso</a></li>
</ul>
</div>
