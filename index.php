<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
// Inicializar una nueva sesion de CURL; cu = Curl Handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la pantalla y no mostrarla en pantalla
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// Ejecutamos la peticion y guardamos el resultado.
$result = curl_exec($ch);
$data = json_decode($result,true);
curl_close($ch);


// Una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); // SI SOLO QUIERES HACER UN GET ESTO ES LO MAS FACIL


?>

<head>
    <title>La proxima pelicula de Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <pre style="font-size:8px; overflow:scroll; height:100px">
        <?= var_dump($data) ?>
    </pre>
    <h2>La proxima pelicula de Marvel</h2>
    <section>
        <img src="<?= $data["poster_url"]?>" width="200" height="150" alt="Poster de marvel" style="border-radius:16px"?>
    </section>

    <hgroup>
        <h2><?= $data["title"]; ?>Se estrena en <?= $data["days_until"]; ?> dias</h2>
        <p>Fecha de estreno: <?= $data["release_date"]?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]?></p>
    </hgroup>
 
</main>


<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display:grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup{
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }
    h2{
        text-align: center;
    }
</style>