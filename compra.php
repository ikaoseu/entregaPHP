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
        <?php
            if($_GET['zapatilla'] == 'BDG'){
                $imagen = 'imagenes/Blue-The-Great-x-Air-Jordan-1-Mid-Fearless-3-681x451.png';
                }else{
                    if($_GET['zapatilla'] == 'TS'){
                         $imagen = 'imagenes/NXTS.jpg';
                        }else{
                            if($_GET['zapatilla'] == 'CDG'){
                                $imagen = 'imagenes/CDG.jpg';
                        }else{
                             if($_GET['zapatilla'] == 'LF'){
                                $imagen = 'imagenes/LeFlame.jpg';
                        }else{
                             if($_GET['zapatilla'] == 'SXR'){
                                $imagen = 'imagenes/RXS.jpg';
                        }else{
                             if($_GET['zapatilla'] == 'PBW'){
                                $imagen = 'imagenes/PBW.jpg';
                        }
                }
            }
                        }  
                        }
                }
        ?>
        <div align="center" width="100%">
            <img src="<?php echo $imagen; ?>" width="80%" height="80%" alt="couldnt find the image"/>
            <br/>
            <br/>
            usted ha seleccionado 
                <?php
                 echo "<B>",$_POST['cantidad'], "</B>"; 
                ?> 
            unidades
            por precio de 
                <?php
                 echo "<B>",$_GET['precio'], "</B>"; 
                ?> 
            la unidad
        </div>
    </body>
</html>
