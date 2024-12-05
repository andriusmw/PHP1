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
//Recibir datos de Marvel API (GET)

const API_URL = "https://whenisthenextmcufilm.com/api";
#Iniciar una nueva sesión de cURL ; = CH = CURL HANDLE
$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición 
y guardamos el resultado */

$result = curl_exec($ch);
$data = json_decode($result, true); //Guarda el resultado en un array asociativo

curl_close($ch); /*cierrra conexión de curl */

var_dump($data) /*para ver qué tiene la data */

?>

<main>
    <h2>La próxima película de Marvel</h2>
</main>




