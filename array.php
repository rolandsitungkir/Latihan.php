<?php
$film[0] = "Avanger";
$film[1] = "Fast & Furious";
$film[2] = "Drakor";
$film[3] = "Who Am I";
$film[4] = "Snowden";
$film[5] = "Avatar";
$film[6] = "Black Berry";

for ($i=0; $i < count($film); $i++) {
    echo "Nonton Film" .$film[$i]. "<br>";
}
?>
<br>
<br>
Array Assosiatif <br>
<?php
$mhs = array(
    "Ronald"=> "21111065",
    "Rensos"=> "21111090",
    "Relina"=> "21111060",
);

foreach ($mhs as $nama => $nim) {
    echo "Mahasiswa atas nama ".$nama." dan NIM ".$nim."<br>";
}
?>




