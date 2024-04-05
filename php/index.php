<?php

const API_URL ="https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
$data= json_decode($result, true);
curl_close($ch);
//var_dump($data)





?> 
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>La proxima peliula de marvel</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>

<section>
     <img src="<?=$data["poster_url"];?>"  alt="Poster de <?=$data["title"];?>">
     <hgroup>
          <h2><?=$data["title"];?> se estrena destro <?=$data["days_until"];?> dias</h2>
          <p class="estreno">La fecha de estreno es en <?=$data["release_date"];?> </p>
          <p class="sig-estreno">La siguiente es <?=$data["following_production"]["title"];?></p>
     </hgroup>
</section>
<footer>
     <a href="https://github.com/agustindev22" target="_blank">Desarrollado por Martinez Agustin</a>
</footer>
     
</body>
</html><style>
  