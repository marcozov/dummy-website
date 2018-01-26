<?php
include("header.php");
?>
        <div id="content">
        <?php
        include("leftmenu.php");
        ?>
        <div id="centercontent">  
            
            

 <script type="text/javascript" language="Javascript">

function controllo(){
    alert('prova');
    if (document.login.email.value=="")
        {
            alert('Il campo email non è valido');
            return false;
            
        }
    if (document.login.password.value=="")
        {
            alert('Il campo password non è valido');
            return false;
            
        }
    if (document.login.codice_fiscale.value=="")
        {
            alert('Il campo codice fiscale non è valido');
            return false;
            
        }
     if (document.login.nome.value=="")
        {
            alert('Il campo nome non è valido');
            return false;
            
        }
     if (document.login.cognome.value=="")
        {
            alert('Il campo cognome non è valido');
            return false;
            
        }
     if (document.login.giorno.value=="")
        {
            alert('Il campo giorno non è valido');
            return false;
            
        }
     if (document.login.mese.value=="")
        {
            alert('Il campo mese non è valido');
            return false;
            
        }
     if (document.login.anno.value=="")
        {
            alert('Il campo anno non è valido');
            return false;
            
        }
     
     
     
}
</script>
            
   <h1>Fantàsia</h1>
<h2>Registrazione</h2><br />

<?php if(!isset($_SESSION['email'])): ?>
    
    <form name="login" method="post" action="registrazione2.php" onsubmit="controllo();">
 <table class="modulo">

<tr><td class="modulo">Email: </td><td class="modulo"><input type="text" name="email"></td></tr>

<tr><td class="modulo">Password: </td><td class="modulo"><input type="password" name="password"></td></tr>

<tr><td class="modulo">Codice Fiscale: </td><td class="modulo"><input type="text" name="codice_fiscale"></td></tr>

<tr><td class="modulo">Nome: </td><td class="modulo"><input type="text" name="nome"></td></tr>

<tr><td class="modulo">Cognome: </td><td class="modulo"><input type="text" name="cognome"></td></tr>

<tr>    <td class="modulo">
        Data di nascita:
        </td>
        <td class="modulo">
            <select name="giorno" >
                  <?php for($day=1; $day<32; $day++): ?>
                    <option value="<?php echo($day) ?>"><?php echo($day) ; ?></option>
                  <?php endfor; ?>
            </select>
              <select name="mese" >
                <?php for($month=1; $month<13; $month++): ?>
                    <option value="<?php echo($month) ?>"><?php echo($month) ?></option>
                  <?php endfor; ?>
              </select>
              <select name="anno" >
                  <?php for($year=1900; $year<2001; $year++): ?>
                    <option value="<?php echo($year) ?>"><?php echo($year) ?></option>
                  <?php endfor; ?>
              </select>
        </td>
        
     </tr>

<tr><td class="modulo">(dd/mm/yy) </td></tr>
     
<tr><td class="modulo">Indirizzo: </td><td class="modulo"><input type="text" name="indirizzo" /></td></tr>

<tr><td class="modulo">Città: </td><td class="modulo"><input type="text" name="citta" /></td></tr>

<tr><td class="modulo">CAP: </td><td class="modulo"><input type="text" name="cap" /></td></tr>

<tr><td class="modulo">Numero di telefono: </td><td class="modulo"><input type="text" name="telefono" /></td></tr>

<tr><td class="modulo"><small>*Tutti i campi sono obbligatori </small></td></tr>


<tr><td class="modulo"><input type="submit" name="send" value="Invia">  <input type="reset" name="cancella" value="Annulla"></td></tr>
   

</table>   
        
    </form>
    
<?php else: ?>
<p>Sei già registrato e loggato! </p>
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
