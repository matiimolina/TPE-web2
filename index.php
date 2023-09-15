<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>e-Comerce</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>COMERCIO DE DISCOS</h1>

    <div>
        <h2>DISCOS DISPONIBLES:</h2>
            <?php

                //1-establecer conexion con la db
                $db = new PDO('mysql:host=localhost;dbname=comercio_discos_musicales;charset=utf8','root','');
                
                //2-preparo la consulta
                $resultado = $db->prepare('SELECT * FROM discos');
                
                //ejecuto la consulta
                $resultado->execute();
                
                //obtengo todos los datos de $resultado en un array de objetos
                $discos = $resultado->fetchAll(PDO::FETCH_OBJ);
            
            ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Productor</th>
            </tr>
            <?php
                foreach($discos as $disco){
                    echo "<tr>
                            <td>$disco->nombre</td>
                            <td>$disco->autor</td>
                            <td>$disco->productor</td>
                          </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>