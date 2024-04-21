<!-- Curso PHP 1 -->
<?php
    //variables
    $name = 'Juan Leonel';
    $isDev = true;

    $age = '23';
    $newAge = $age + 1;

    //concatenar cosas
    $data = $age . '2';

    //Metodos
    var_dump($name);
    var_dump($isDev);
    var_dump($age);

    echo 'Tipo de dato';
    echo gettype($name);
    echo ' ';
    echo gettype($isDev);
    echo ' ';
    echo gettype($age);

    echo 'Metodos';

    is_string($name);
    is_bool($isDev);
    is_int($age);

    define('LOGO_URL', 'https://pngimg.com/uploads/php/php_PNG35.png');

?>

<h1> <?=  'Hola PHP '. $name?> </h1>
<h1> <?=  'Edad: '. $newAge?> </h1>
<h1> <?=  'Concatenacion: '. $data?> </h1>

<h4>
    <?php
        echo gettype($name);
        echo ' ';
        echo gettype($isDev);
        echo ' ';
        echo gettype($age);
    ?>
</h4>

<br>
<h4>
    <p>Type casting</p>
    <?php
        $age2 = '23';
        $newAge2 = $age2 + 1;

        $name2 = 'Juan';
            echo
            ' Hola '
            . $name2
            . ' Con una edad de: '
            . $newAge2 . ' HOLA';
    ?>
</h4>

<br>
<h4>
    <p>Interpolacion de cadena</p>
    <pre>Para la interpolacion de soolo se puede hacer con "" las comillas dobless</pre>
    <pre> ; No es opcional es forzo</pre>
    <?php
        $age2 = '22';

        $newAge2 = $age2 + 44;
        $name2 = 'Leo';

        $outpu =  "Hola $name2 Con una edad de: $newAge2   HOLA";
        echo $outpu ;

    ?>
</h4>

<br>
<h4>
    <p>Constantes</p>
    <pre>DOS CONSTANES <br>
        solo en un archivo y no duplicar
    </pre>
    <pre>
        Locales a nivel de calse <br>
        Pero son espesificar y no utilizadas para bucles
    </pre>
    <?php
        const NAMES = ['juan', 'luis']; //ESTA ES UN CONSTANTE
        echo NAMES[0];
    ?>
</h4>
<img src="<?= LOGO_URL ?>" alt="Logo php" width="100">
<br>
<br>
<h4>
    Formas del else
    IF Else
    <?php
        $age4 = 32;
        $isOld = $age4 > 35;
        if( $isOld ) {
            echo "<h5>Y estas garnde </h5>";
        } elseif ($isDev) { //se puede colocar junto o seprado else if // elseif
            echo "<h5>No eres viejo, pero eres dev</h5>";
        } else {
            echo "<h5>Si pasa</h5>";
        }
    ?>
    Otro ejemplo
    <?php if ($isOld) : ?>
        <h5>Y estas garnde </h5>
    <?php elseif ($isDev) : ?>
        <h5>No eres viejo, pero eres dev</h5>
    <?php else : ?>
        <h5>Si pasa</h5>
    <?php endif; ?>

    Ternarios
    <?php
        $OutputAge = $isOld ? ' <br> <h5>Estas ansiano </h5>' : '<h5>Felicidades no tienes dinero </h5>';

        echo $OutputAge . '';
    ?>
    <pre>Consejo separa la logica</pre>
</h4>

<h4>
    Match
    <br>
    <?php
        $name = 'Leo';
        //esta es una forma
        $ageTest = 40;
        //otra forma con evaluacion de expresiones
        $outValid = match($ageTest){
            0, 1, 2 => "Eres un bebe, $name",
            3, 4, 5, 6, 7, 8, 9, 10 => "Eres un nino, $name",
            11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolcente, $name",
            19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven, $name",
            default => "Eres un adulto $name",
        };
        $age4 = 66;
        $outValid1 = match(true){
            $age4 < 2 => "Eres un bebe, $name",
            $age4 < 10 => "Eres un nino, $name",
            $age4 < 18 => "Eres un adolcente, $name",
            $age4 === 18 => "Eres mayor de edad, $name, puedes votar perror",
            $age4 < 40 => "Eres un adulto joven, $name",
            $age4 < 60 => "Eres un adulto viejo, $name",
            default => "Estas mas con un pie en el panteon $name",
        };
    ?>
    <p>Prueba 1: <?= $outValid ?></p>
    <br>
    <p>Prueba 2: <?= $outValid1 ?></p>

</h4>
<br>
<h4>
    Array
    <br>
    <?php
        $bestLenguajes = ['PHP', 'JS', 'JAVA'];
        $bestLenguajes[] = 'c++'; //ADD PROGRAMING LENGUAJES
        $bestLenguajes[] = 'Python';
        $nameArray = 'Leo';
    ?>
<!-- Acceder a posision -->
    <pre>Un buen lenguaje es <?= $bestLenguajes[0] ?></pre>
</h4>
<pre>Esta es la forma de como obtener un lista de datos con php</pre>
<ul>
    <?php foreach( $bestLenguajes as $key => $lenguajes ) : ?>
        <li><?=$key + 1 . ' ' . $lenguajes ?></li>
    <?php endforeach; ?>
</ul>
<br>
<h4>
    Array Asociativos
    <br>
    <?php
        $person = [
            "name" => "Juan",
            "age" => 23,
            "isDev" => true,
            "lenguages" => ["Ruby","PHP","JS"],
        ];
    ?>
<!-- Acceder a posision -->
    <pre>Un como objeto de personas <?= $person['lenguages'] ?></pre>
</h4>
<h5>Persona:</h5>
<ul>
    <?php foreach( $person as $per ) : ?>
        <li><?= $per?></li>
    <?php endforeach; ?>
    <hr>
    <pre>Lenguajes que conoce:</pre>
    <?php foreach( $person['lenguages'] as $lenguajes ) : ?>
        <li><?= $lenguajes ?></li>
    <?php endforeach; ?>
</ul>



<style>
    :root {
        color-scheme: light dark;
    }
    body {
        display: grid;
        place-content: center;
        font-family: 'Courier New', Courier, monospace;
    }
</style>