<?php
function replaceDotNAt($m)
{
    $m = preg_replace("/\./", " x ", $m); // remplace les . par des " x "
    $m = preg_replace("/@/", " y", $m); // remplace les @ par des " y"
    return $m;
}
function takeAFileAndEditIt($y, $z)
{
    $a = file_get_contents($y); // Ouvre et met le contenu du fichier dans a
    $a = preg_replace("/(\[x (.*)\])/e", "replaceDotNAt(\"\\2\")", $a); // Remplace les [x XXXXXXX] par XXXXXXX
    $a = preg_replace("/\[/", "(", $a); // Remplace les [ par des (
    $a = preg_replace("/\]/", ")", $a); // Remplace les ] par des )
    return $a;
}
$r = takeAFileAndEditIt($argv[1], $argv[2]);
print $r;
?>
