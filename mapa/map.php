<?php
 
 
$lang= $_GET["lang"];
 
error_reporting(0);
 
$context = stream_context_create($opts);
 
 
$file = file_get_contents("https://fortnite-api.com/v1/map?language=$lang", false, $context);
 
 
 
 
 
$image_data = json_decode($file, true);
$mapafn = json_decode($file, true);
 
 
$news = json_decode($news, true);
 
 
 
 
 
 
 
?><?php
error_reporting(0);
//Get the file
$content = file_get_contents($mapafn['data']['images']['pois']);
//Store in the filesystem.
$fp = fopen("imagenes/map_$lang.png", "w");
fwrite($fp, $content);
fclose($fp);
?>
{
"Mapa":"https://<?php echo $_SERVER['SERVER_NAME'];?>/map/imagenes/map_<?php echo $lang?>.png"
}
