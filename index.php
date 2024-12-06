<style>
:root {
    color-scheme: light dark;
}

body {
    display: grid;
    place-content: center ;
}


</style>

<?php 
//Recibir datos de Marvel API (USANDO CURL)

const API_URL = "http://whenisthenextmcufilm.com/api";
#Iniciar una nueva sesión de cURL ; = CH = CURL HANDLE
//$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición 
y guardamos el resultado */

//$result = curl_exec($ch);

//-----------------alternativa ---------------------
//Usando GET

$result = file_get_contents(API_URL);
var_dump($result);

//$data = json_decode($result, true); //Guarda el resultado en un array asociativo
//curl_close($ch); /*cierrra conexión de curl */
//var_dump($data); /*para ver qué tiene la data */

?>

<head>
    <meta charset="UTF-8" />
    <title>La próxima película de Marvel</title>
    <!-- Centered viewport -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>

<main>
    <h2>La próxima película de Marvel</h2>
    <img src="<?= $result["poster_url"]; ?>" />
    <h2><?= $result["title"]; ?> </h2>
</main>




