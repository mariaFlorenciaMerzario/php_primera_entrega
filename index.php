<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Actividad Florencia Merzario</title>

</head>

<body>
<h1>Actividad nº1 para entregar</h1>
<main>
    <?php
    /*Actividad Integradora Obligatoria Módulo 1

    Desarrollar una estructura en HTML y CSS integrada con PHP.
    La estructura debe contener:
    delimitadores php
    respetar normas de sintaxis
    hacer uso de variables, constantes y operadores.

    ENTREGA:

    Debe constar de dos partes:
    1)  Carpeta comprimida con todos los archivos necesarios para implementar el sitio o una URL al repositorio externo, por ejemplo, github.
    2)  URL con la versión online del sitio, por ejemplo, 000 webhost.
    */
    const pi= 3.14;

    $varArray = array(54,21,32,45);
    array_push($varArray, pi, 'naranjas');
    $cont = count($varArray);
    $contadorMayores = 0;
    $contadorMenores = 0;

    echo "<h2>Contenido de la variable varArray</h2>";
     for ($i=0; $i < $cont ; $i++) { 
        echo "  $varArray[$i] <br>";
    };

    echo "<h2>Contenido de la variable varArray segun condicion si es mayor o menor que 30</h2>";
    echo '<div class="info">'; 
        for ($i=0; $i < $cont ; $i++) { 
            if($varArray[$i]<30){
                echo "<p class='menor'> Valor menor que 30</p>";
                $contadorMenores = $contadorMenores + $varArray[$i];
                echo "  Posición:$i , Valor: $varArray[$i] <br>";
            }else if(is_numeric($varArray[$i])){
                echo "<p class='mayor'> Valor mayor que 30</p>";
                $contadorMayores = $contadorMayores + $varArray[$i];
                echo "  Posición:$i , Valor: $varArray[$i] <br>";
            }else{
                echo "<p class='saludable'>Opcion saludable</p>";
                echo "  Posición:$i , Valor: $varArray[$i] <br>";
            }
        }
        echo "<h4>El total de la suma de los mayores de 30 da: $contadorMayores <br></h4>";
        echo "<h4>El total de la suma de los menores de 30 da: $contadorMenores</h4>";
    '</div>';
    ?>
</main>
</body>

</html>