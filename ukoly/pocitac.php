<?php
/*
Vytvořte proměnné obsahující:
Název počítače (např. Herní PC)
Výrobce počítače (např. Lenovo)
Velikost operační paměti RAM v GB (např. 16)
Velikost úložiště v TB (např. 1.5)
Informaci, zda má počítač SSD (true / false)
Operační systém (např. Windows 11)
*/
$nazevPc = "PC158";
$vyrobcePc = "Lenovo";
$ramPc = "32Gb";
$velikostUlozistePc = "2Tb";
$ssdPc = "true"; // tady jsem napsal true protoze boolean mi vypisoval 1
$osPc = "windows 11";

echo "<h1>Profil mého počítače</h1>";

echo "<strong>Datove typy</strong><br><br>";
echo var_dump($nazevPc);
echo "<br>";
echo var_dump($vyrobcePc);
echo "<br>";
echo var_dump($ramPc);
echo "<br>";
echo var_dump($velikostUlozistePc);
echo "<br>";
echo var_dump($ssdPc);
echo "<br>";
echo var_dump($osPc);

echo "<br><br><strong>Nazev PC</strong>";
echo "<p>$nazevPc</p><br>";

echo "<strong>Vyrobce</strong>";
echo "<p>$vyrobcePc</p><br>";

echo "<strong>RAM PC</strong>";
echo "<p>$ramPc</p><br>";

echo "<strong>Velikost uloziste</strong>";
echo "<p>$velikostUlozistePc</p><br>";

echo "<strong>Ma PC SSD</strong>";
echo "<p>$ssdPc</p><br>";

echo "<strong>Operacni system PC</strong>";
echo "<p>$osPc</p>";