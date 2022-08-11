<?php
    require('vendor/autoload.php');

    use GuzzleHttp\Client;

    $client = new Client();
    $response = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon/');
    $body = json_decode($response->getBody(), true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Poke api <br> <br>
    <?php
        foreach ($body as $res => $values) {
            if($res == 'results') {
                foreach ($values as $key => $pokemon) {
                    print $pokemon['name'] . '<br />';
                }

            }
        }
    ?>  
</body>
</html>
