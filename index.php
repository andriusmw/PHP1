
<?php 
    //VARIABLES
    $name = "Usuario";
    $isDev = true;
    $age = 39;

    //Booleans + Ifs
    $isOld = $age > 40;

    if($isOld) {
        echo "<h2>Eres mayor, lo siento</h2>";
    } else {
        echo "<h2>Disfruta mientras puedas xD</h2>";
    }

    //CONSTANTE GLOBAL
    //Crea una constante, primero indica el nombre de la constante y luego el contenido
    define('PHP_LOGO', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-svg-vector.svg');
    

    //+ Concatena suma pero no concatena 2 textos para eso es .
    $newAge = 39 + '1';

    //var_dump() inidica el tipo de datos y su valor
    var_dump($name);
    var_dump($isDev);
    var_dump($age);

     //var_dump() inidica el tipo de datos solamente
    echo gettype($name);
    echo gettype($isDev);
    echo gettype($age);

       
     $output= "Este es un texto de prueba para $name"  ;

     //CONSTANTES LOCALES

    const NOMBRE = "Paquito";

?>




<h1><?= "Bienvenido " . $name ?></h1>

<h2><?= $output ?></h2>
<h2><?= NOMBRE ?></h2>

<img src="<?= PHP_LOGO ?>" alt="PHP LOGO" width="200">



<?php
//Else if + ternarios

if ($isOld) : ?>
    <h2>Eres mayor, lo siento</h2>

    <?php elseif ($isDev) : ?>
        <h2>No eres mayor, pero eres Dev</h2>

<?php else : ?>
    <h2>Disfrutas mientras eres jóven</h2>

<?php endif; ?>





<?php 
//Match 1 ------------------------------------------------------
$age1 = 15;
$outputAge = match ($age1) {
    0,1,2 => "Eres un bebé, $name",
    3,4,5,6,7,8,9,10 => "Eres un/a niño/a",
    11,12,13,14,15,16,17 => "Eres un adolescente",
    default => "Eres un adulto",
}


?>

<h2><?= $outputAge ?></h2>



<?php 
//Match 2--------------------------------------------------------
$age2 = 2;
$outputAge = match (true) {
    $age2 <= 2 => "Eres un bebé, $name",
    $age2 <= 10 => "Eres un/a niño/a",
    $age2 <= 17 => "Eres un adolescente",
    default => "Eres un adulto",
}


?>

<h2><?= $outputAge ?></h2>


<?php 
//----------------------ARRAYS ----------------------------------------


$bestLanguages = ["PHP", "JavaScript", "Python", ];
//Se puede añadir items al array al final
$bestLanguages[] = "Java";

?>

<h3>
    <?= $bestLanguages[0] ?>
</h3>

<p>Array de lenguajes : </p>
<ul>
    <?php foreach($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>    
</ul>
























<style>
:root {
    color-scheme: light dark;
}

body {
    display: grid;
    place-content: center ;
}


</style>