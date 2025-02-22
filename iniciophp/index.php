<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body class="bg-light">
    <div class="container"> 
        <h1 class="text-center text-white bg-primary m-3 fs-1 ">MI PRIMER PHP</h1>
        <p class="fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis reprehenderit perspiciatis vitae. Eveniet earum dignissimos nemo mollitia nisi enim. Totam inventore sed dicta voluptatem consequatur. Rem laudantium consequuntur debitis autem.</p>
        <p class="fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam provident odio suscipit excepturi minima voluptatum repellat cumque illo commodi explicabo? Omnis qui voluptas recusandae expedita consequuntur ex nihil consequatur?</p>
        <?php
            echo "<p class='fs-5'> Bienvenido a mi pagina web </p>"; 
            echo "<h1 class='fs-1 text-center bg-secondary text-white'> MI PRIMERA WEB CON PHP </h1>";
            echo "<p class='fs-5'> otro texto mas para explicar como poner comillas y entre comillas simples la clase.</p>";
            echo "<button class='btn btn-primary m-3'>Enviar</button>";
            
            //variables
            $asignatura="IAW";
            $curso="ASIR";
            $profesor="Borja Martinez";
            $horas=45;
            $alumnos=["Maria", "Claudia", "Juan", "Pedro", "Luis", "Marta"];
            $alumnos[]="mencia";
            array_push($alumnos, "ana","mateo","carlos", "Marta","Marta","ana","mateo","carlos", "Marta","Marta","ana","mateo","carlos", "Marta","Marta");
            array_push($alumnos,"Monica", "Nico");
            $numeroAlumnos=0;
            $troncal=false;

             //elimina a maria
             unset($alumnos[0]);

             //recoloca elementos, array_values($alumnos) te muestra la funcion de alumnos y el prime $alumnos hace que entre en él.
             $alumnos = array_values($alumnos);
            
             //filtrar
             $listafiltrada = array_filter($alumnos, function ($item) {
                return $item == "Marta";            
             });


            //constante
            define("codigo_asignatura",1234);
            define("codigo_curso",12);

            echo "<h3>Asignatura $asignatura</h3>";
            echo "<p>Asignatura que pertence al curso $curso que tiene un codigo de asignatura " .codigo_asignatura. "</p>";
            echo "<ul class='list-group'>
                    <li class='list-group-item m-2'>Horas: $horas</li>
                    <li class='list-group-item m-2'>Alumnos: $numeroAlumnos</li>
                    <li class='list-group-item m-2'>curso: $curso</li>
                    <li class='list-group-item m-2'>profesor: $profesor</li>
                    
                </ul>";
            
            //ejecuta variables
            echo "<p class='fs-5 text-primary'>el primer alumno matriculado es $alumnos[0]</p>";
            echo "<h3>informacion de los alumnos</h3>";
            echo "<p>el numero total de alumnos matriculados son: ".count($alumnos). "</p>";
            echo "<p>el primer alumno en matricularse es $alumnos[0] </p>";
            echo "<p>el ultimo alumno matriculado es: " . $alumnos[count($alumnos) -1]. "</p>";
            echo "<p>el numero total de alumnos que se llaman Marta es de ".count($listafiltrada). "</p>";
            echo "<p>el numero total de Martas es : ".count($listafiltrada)."</p>";


          
        ?>

    <h2>Estructura de control</h2>
    <p>Las estructuras de control sirven para realizar saltos logicos dentro de nuestro codigo</p>
    <h3>IF - ELSE / IF - ELSEIF / ELSE</h3>
        
        <?php

            if (count ($alumnos)<10) {
                 echo "No comienza el curso, pocos alumnos";
            }   else if (count ($alumnos)<20) {
                 echo "comienza el curso, admito alumnos";
            }   else if (count ($alumnos)<25) {
                 echo "curso cerca del limite";
            }   else {
                 echo "curso completo";
            }
        
        ?>
    <h3> Estructura SWITCH </h3>
    <p>Se ejecuta una parte dependiendo de la variable</p>
        <?php
            switch(count ($alumnos)){
                case 10;
                    echo "<p>numero de alumnos insuficiente</p>";
                    break;
                case 20;
                    echo "<p>numero de alumnos medio</p>";
                    break;
                case 30;
                    echo "<p>numero de alumnos perfecto</p>";
                    break;
                default:
                    echo "<p>el numero de alumnos no sirve</p>";
            }
        
        ?>
    <h3>Estructura WHILE y DO WHILE</h3>
    <?php
        $valor = 5;
        while($valor > 0) {
            echo "<p>la variable es positiva</p>";
            $valor--;
        }
    ?>
    <h3>Estructura FOR</h3>
    <ul class="list-group">
        <?php   
            for ($i=0; $i < count($alumnos); $i++) {
                echo "<li class='list-group-item m-1'>".$alumnos[$i]."</li>";
            }

        nombre("Borja", 18);
        nombre("Andres", 20);
        nombre("Sara", 17);
        nombre("David", 21);
        
        function nombre ($nombre, $edad)
        {
            if($edad>=18){
                echo "<p> ".$nombre. " Eres mayor de edad.</p>";
             }   else {
                    echo "<p> Lo siento " .$nombre.  ", no tienes la edad </p>";
                }
            
        }
        ?>

    </ul>
    </div>
    
</body>
</html>