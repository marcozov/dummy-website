<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php session_start(); ?>
<html lang="it">
  <head>
  <style type="text/css">@import url( style.css );</style>
  <title>Fantàsia - New Source on Music</title>
  
  <script type="text/javascript" language="Javascript">
<!--
 
var stile = "top=10, left=10, width=250, height=200, status=no, menubar=no, toolbar=no scrollbars=no";
 
function Popup(apri)
{
  window.open(apri, "", stile);
}
//-->

function cambio_c(){
location.href = "ricerca_avanzata.php?categoria="+document.ricerca__avanzata.categoria.value +"&marca="+document.ricerca__avanzata.marca.value;
}
function cambio_t(){
location.href = "ricerca_avanzata.php?categoria="+document.ricerca__avanzata.categoria.value +"&tipo="+document.ricerca__avanzata.tipo.value +"&marca="+document.ricerca__avanzata.marca.value;
}

</script>
  
  </head>
  <body>
    <div id="outercontainer">  
      <div id="container">  
       <div id="top">  
        </div> 
        <div id="header">
        </div>
       <div id="topmenu">
         
                 <a href="index.php">HOME</a> - <a href="chisiamo.php">CHI SIAMO</a> - <a href="contatti.php">CONTATTI</a> - <a href="#">FACEBOOK</a> - <a href="chooseus.php">PERCHÉ SCEGLIERE NOI </a>
        </div> 
        <div class="separator">
        </div>
