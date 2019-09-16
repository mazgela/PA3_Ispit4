<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    function test($a){
        return "heloooooo ooooo".$a;
    }
    
    
    
?>
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
        <div class="sidenav">
            <div style="margin-top:20px;">
                <a href="#">DijagonalaJS</a>
                <a href="#">Obavijest</a>
                <a href="#">DijagonalaPHP</a>
                <a href="#">Baza</a>
            </div>
            
        </div>

        <div class="main">
            <div class="prikaz">
                <h2>Ispit 30.08.2019.</h2>
                <p>Ovo je vježba za dekanski rok. Za sad je riješen samo 2.zadatak, ali u cijelosti. Nadam se da ću nešto i zapamtiti i naučiti, ako ništa barem kako pravilno kopirati pronađene stvari haha.</p>
              <?php 
               echo test('martina');
              ?>
            </div>
        </div>

        <div class="obavijestiBox">
            <div class="obavijesti">
                <h4>Obavijesti i izvješća o greškama.</h4>
            </div>
            <span id="datetime"></span>
        </div>
    </body>
</html>
