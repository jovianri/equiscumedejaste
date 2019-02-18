<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Portada</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/estilos.css" />
</head>
<body>
<?php
    include "menu.html";
?>
<div id="content">
    <?php
        switch ($idJugador) {
            case 1:
                echo "Página de Lonzo Ball";
                break;
            case 2:
                echo "Página de Lebron James";
                break;
            case 3:
                echo "Página de Kyle Kuzma";
                break;
            case 4:
                echo "Página de Brandon Ingram";
                break;
            case 5:
                echo "Página de Javalle McGee";
                break;
            
            default:
                # code...
                break;
        }
    ?>
</div>    
</body>
</html>