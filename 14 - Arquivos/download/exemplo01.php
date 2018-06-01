<?php

$link = "https://zeedog.vteximg.com.br/arquivos/ids/162215-480-320/zeedog_cachorro_pet_coleira_gummy_xadrez_active.jpg?v=636207652754730000";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename,"w+");

fwrite($file, $content);

fclose($file);

 

?>

<img src="<?=$basename?>">