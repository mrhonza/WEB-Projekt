<?php
$studentName = "Jan Novák";
$test1 = 75;
$test2 = 90;
$test3 = 60;

if ($test1 > 100||$test1 <0) {
    echo "test 1 je neplatny";
}
if ($test2 > 100||$test2 <0) {
    echo "test 2 je neplatny";
}
if ($test3 > 100||$test3 <0) {
    echo "test 3 je neplatny";
}

$celkovyPocetBodu = $test1 + $test2 + $test3;
$prumernyPocetBodu = ($test1 + $test2 + $test3)/3;
$procentualniUspesnost = $prumernyPocetBodu;
$grade =0;

if ($procentualniUspesnost >= 90) {
    $grade =1;
}elseif ($procentualniUspesnost >= 75) {
    $grade =2;
}elseif ($procentualniUspesnost >= 60) {
    $grade =3;
}elseif ($procentualniUspesnost >= 40) {
    $grade =4;
}else{
    $grade =5;
}


//Pomocí HTML a echo zobrazte:

//Zajistěte, aby program rozpoznal neplatné bodové hodnocení (méně než 0 nebo více než 100 bodů v některém testu).
//Vypište slovní hodnocení: , , ,  nebo .Odevzdání
//Odevzdejte funkční soubor hodnoceni.php. Program musí správně reagovat na změnu bodových hodnot jednotlivých testů.
echo "jmeno studenta je $studentName<br>";
echo "vysledky testu jsou:<br><br>";
echo "test 1: $test1 bodu<br>";
echo "test 2: $test2 bodu<br>";
echo "test 3: $test3 bodu<br><br>";
echo "prumerny pocet bodu je: $prumernyPocetBodu<br>";
echo "procentualni uspesnost je: $procentualniUspesnost%<br>";
echo "znamka: $grade<br>";
if ($grade < 5) {
    echo "skvela prace!<br>";
}else {
    echo "bonusove ukoly: ...<br>";
}

if ($grade = 1) {
    echo "slovni hodnoceni: <br>";
    echo "vyborny<br>";
}
if ($grade = 2) {
    echo "slovni hodnoceni: <br>";
    echo "chvalitebný<br>";
}
if ($grade = 3) {
    echo "slovni hodnoceni: <br>";
    echo "dobrý<br>";
}
if ($grade = 4) {
    echo "slovni hodnoceni: <br>";
    echo "dostatečný<br>";
}

if ($grade = 5) {
    echo "slovni hodnoceni: <br>";
    echo "nedostatečný<br>";
}
