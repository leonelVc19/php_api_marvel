<?php
    //FORMA MAS BASICA
    const API_URL = "https://dev.whenisthenextmcufilm.com/api";
    # Inicializar una nueva sesion de Curl; ch = Curl handle
    
    $ch = curl_init(API_URL); // Llamado a un api con PHP. Esta es un forma hay mas.
    
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); //que devuelva el resultad
    //Ejecutar la peticion y guardar el resulado
    $result = curl_exec( $ch );  //EJECUTANDO LA PETICION
    /**
     * Otra forma de hacer un peticion es utilizando file_get_contents
     * $result = file_get_contents( API_URL ); //si solo se quiere hacer un peticion GET
     */
    $data = json_decode( $result, true ); //en un array asosciativo
    curl_close( $ch ); //Cerrar la peticion de CURL
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="La proxima pelicula de MARVEL" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La proxima pelicula de MARVEL</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    />
    <style>
        :root {
            color-scheme: light dark;
        }
        body {
            display: grid;
            place-content: center;
            font-family: 'Courier New', Courier, monospace;
        }
        section {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        hgroup{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        img {
            border-radius: 1rem;
            transition: all 0.4s ease-in-out;
        }
        img:hover {
            transform: scale( 1.03 );
            box-shadow: 5px 6px 10px rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<main> <br><br>
    <section>
        <img 
            src="<?= $data["poster_url"]; ?>" 
            alt="Poster de <?= $data['title']?>" 
            width="240px"
        >
    </section>

    <hgroup>
        <p><?= $data["overview"]?> </p>
        <br>

        <h2><?= $data["title"]?> se estrena en <?= $data["days_until"]?> dias.</h2>
        <p>Fecha estreno: <?= $data["release_date"] ?> </p>
        <br>

        <h5>La siguente es: <?= $data["following_production"]["title"] ?></h5>
        <p> Fecha estreno:: <?= $data["following_production"]["release_date"] ?> </p>
        <img 
            src="<?= $data["following_production"]["poster_url"]; ?>" 
            alt="Poster de <?= $data["title"]?>" 
            width="200px"
        >
        <p><?= $data["following_production"]["overview"]?> </p>
    </hgroup>
</main>