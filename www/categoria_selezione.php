<?php
require_once("funzioni.php");
$categoria = $_GET['cat'];
$titolo = $_GET['titolo'];
$categorie = array();

            foreach (lista_tipi_categoria($categoria) as $tipi)
                {
                       $categorie[$tipi['id_tipo']] = array(
                   'nome'  =>  $tipi['nome'],
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
<h2><?php echo ($titolo); ?></h2><br />

<center> <span class="linkrosso">
        <ul class="redcentro">
 <?php foreach ($categorie as $id_tipo => $tipo) :?>
    
            <?php
            
            switch ($id_tipo) 
                {
                    case 1:
                        $variabile = "Chitarre";
                         break;
                    case 2:
                         $variabile = "Bassi";
                         break;
                    case 3:
                        $variabile = "Pianoforti";
                         break;
                    case 4:
                        $variabile = "Batterie";
                         break;
                    case 5:
                        $variabile = "Metodi per studio";
                         break;
                    case 6:
                        $variabile = "Archi";
                         break;
                    case 7:
                        $variabile = "Contrabbassi";
                        break;
                    case 8:
                        $variabile = "Violini";
                         break;
                    case 9:
                        $variabile = "Violoncelli";
                        break;
                    case 10:
                        $variabile = "Sassofoni";
                        break;
                    case 11:
                        $variabile = "Flauti";
                        break;
                    case 12:
                        $variabile = "Trombe";
                        break;
                    case 13:
                        $variabile = "Metronomi";
                        break;
                    case 14:
                        $variabile = "Accordatori";
                        break;
                    case 15:
                        $variabile = "Corde";
                        break;
                    case 16:
                        $variabile = "Plettri";
                        break;
                    case 17:
                        $variabile = "Piedistalli";
                        break;
                    case 18:
                        $variabile = "Custodie";
                        break;
                    case 19:
                        $variabile = "Testate";
                        break;
                    case 20:
                        $variabile = "Casse";
                        break;
                    case 21:
                        $variabile = "Combo";
                        break;
                    case 22:
                        $variabile = "Pedaliere";
                        break;
                    case 23:
                        $variabile = "Pedali";
                        break;
                    case 24:
                        $variabile = "Rack";
                        break;                    
                    default:
                        $variabile = $tipo['nome'];
                        break;
   }
            
            
            ?>
            
          
   <li><a href="tipo_selezione.php?prodotto=<?php echo($id_tipo) ; ?>&titolo=<?php echo($variabile); ?>&categoria=<?php echo($categoria); ?>&titolo_categoria=<?php echo($titolo); ?>"><?php echo $variabile ?></a></li>
    
<?php endforeach; ?> 

        </ul>
       
       </span> </center> 


        </div> 
        <?php
        
        include("rightmenu.php");
        
        ?>
        <div class="cleaner">&nbsp;</div>
        </div>
<?php

  include("footer.php");
  
?>