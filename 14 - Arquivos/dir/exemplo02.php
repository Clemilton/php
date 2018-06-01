
<?php

$images = scandir("images");

$data = array();
foreach ($images as $img) {
	if(!in_array($img, array(".",".."))){	//pega apenas as imagens. Nao pega os atalhos "." e ".."
		$filename="images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);

		$info["size"]= filesize($filename);
		$info["modifed"]=date("d/m/Y H:i:s",filemtime($filename));
		$info["url"]="http://localhost/dir/".$filename;

		array_push($data,$info);
	}
}

echo json_encode($data);

?>

