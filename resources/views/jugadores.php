<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Portada</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css" />
</head>
<body>
<?php
    include "menu.html";
?>
<div id="content">
    <div id="players">        
        <?php
        foreach ($jugadores as $jugador) { 
            echo "<a href='/jugador/" . $jugador->codigo . "'>";
            echo "<figure class='playersTeam'>";
            echo "<img src='images/" . $jugador->foto . "' />";
            echo "<figcaption>" . $jugador->Nombre . "</figcaption></figure></a>";
        }
        ?>
    </div>
</div>    
</body>
</html>