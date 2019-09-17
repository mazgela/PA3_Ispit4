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
        <title>02zad 30-08</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="jquery.min.js"></script>
        <script src="script.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
        <?php
            $val1 = $val2 = 0;
        ?>
        <div class="sidenav">
            <div style="margin-top:20px;">
                <a id="PJSNav" href="#">PovrsinaJS</a>
                <a id="OBNav" href="#">Obavijest</a>
                <a id="PPHPNav" href="#">PovrsinaPHP</a>
                <a href="#">Baza</a>
            </div>
            
        </div>

        <div class="main">
            <div class="prikaz">
            </div>
            <div id="PJS" class="slider">
                <div id="slider1" ></div>
                <p id="value1" class="border">&nbsp;</p>
                <div id="slider2" ></div>
                <p id="value2" class="border">&nbsp;</p>
                <input id="result" type="number" disabled placeholder="Rezultat"/>
            </div>
            
            <div id="PPHP" class="slider">
                <form method="post" action="<?php $_SERVER["PHP_SELF"]?>">  
                    <input type="range" min="0" max="200" name="val1" value="<?php echo $val1;?>">
                    <span> <?php echo $val1;?></span>
                    <br>
                    <input type="range" min="0" max="200" name="val2" value="<?php echo $val2;?>">
                    <span> <?php echo $val2;?></span>
                    <br>
                    <input type="submit" name="submit" value="Submit">  
                  </form>
                <?php
                    echo $val1;
                ?>
            </div>
            
            <div id="OB" class="slider">
                <div id="obavjest" >klikni me!</div>
            </div>
        </div>

        <div class="obavijestiBox">
            <div class="obavijesti">
                <h4>Obavijesti i izvješća o greškama.</h4>
            </div>
            <span id="datetime"></span>
        </div>
        
        
        <?php include 'funkcije.php';?>
    </body>
</html>
