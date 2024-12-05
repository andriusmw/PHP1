
<?php 
    $name = "Usuario";
    $isDev = true;
    $age = 39;

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

?>




<h1>
<?= "Bienvenido " . $name ?>
</h1>


<style>
:root {
    color-scheme: light dark;
}

body {
    display: grid;
    place-content: center ;
}


</style>