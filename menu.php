<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        
    </head>
    <body>
        
        <div align="right">
            Sesión iniciada como  <?php
             echo "<B>",$_POST['correo'], "</B>"; 
            ?>
        </div>
        
        <table width="100%">
            <tr align="center">  
              <td>
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/Blue-The-Great-x-Air-Jordan-1-Mid-Fearless-3-681x451.png" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Air Jordan 1 Mid Fearless "Blue the Great"</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <form action="compra.php?zapatilla=BDG" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
                     </div>
                 </div>
            </td>
        <td>
            <div class="card" style="width: 18rem;">
                <img src="imagenes/NXTS.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Air Jordan 1 High Fearless "Travi$ $cott"</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <form action="compra.php?zapatilla=TS" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
             </div>
            </div>
        </td>
        </tr>
        <tr align="center">
             <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/CDG.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Converse Chuck Taylor All-Star 70s Hi Comme des Garcons PLAY Black</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="compra.php?zapatilla=CDG" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
         <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/LeFlame.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">converse x golf le fleur flame</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <form action="compra.php?zapatilla=LF" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
         </td>   
       </tr>
       <tr align="center">
           <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/RXS.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Storm X Revenge</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <form action="compra.php?zapatilla=SXR" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
        <td>
        <div class="card" style="width: 18rem;">
            <img src="imagenes/PBW.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Air Jordan Mid Patent Black and White</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="compra.php?zapatilla=PBW" method="post">
                         cantidad:<input type="number" name="cantidad" size="1">
                         <br/>
                         <br/>
                         <input class="btn btn-primary" type="submit" name="enviar">
                     </form>
            </div>
        </div>
        </td>
        </tr>
  
       </table>
        <a href="index.php" class="btn btn-primary" align="center">volver al login</a>
    </body>
</html>
