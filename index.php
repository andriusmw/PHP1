
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



<?php if ($isOld) : ?>
    <h2>Eres mayor, lo siento</h2>

    <?php elseif ($isDev) : ?>
        <h2>No eres mayor, pero eres Dev</h2>

<?php else : ?>
    <h2>Disfrutas mientras eres jóven</h2>

<?php endif; ?>












<style>
:root {
    color-scheme: light dark;
}

body {
    display: grid;
    place-content: center ;
}


</style>