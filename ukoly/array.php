<?php
/*
Vytvořte indexované pole $movies se čtyřmi názvy filmů. Pomocí indexů vypište první a poslední film.
Následně do pole přidejte pátý film zápisem $movies[] = ... a vypište větu s celkovým počtem filmů
pomocí funkce count().
*/
echo "<h1>Ukol A</h1>";
$movies = ["iron man" , "spiderman" , "ghostrider" , "shrek II"];
echo $movies[0];
echo "<br>";
echo $movies[3];
$movies[] = "hellboy";
echo "<br>";
echo "celkovy pocet filmu je: " . count($movies);
echo "<br><br>";
/*
Navazujte na pole $movies z Úkolu A. Pomocí cyklu foreach projděte všechny uložené filmy a
vygenerujte z nich platný číslovaný HTML seznam (<ol><li>...</li></ol>). Ověřte ve zdrojovém kódu
stránky (Ctrl + U), že se značky správně uzavřely.
*/
echo "<h1>Ukol B</h1>";
echo "<ol>";
    foreach ($movies as $movie) {
    echo "<li>$movie</li>";
    }
echo "</ol>";

/*
Vytvořte pole známek . Pomocí cyklu foreach a proměnné $sum = 0
spočítejte součet všech známek. Poté vypočítejte aritmetický průměr (součet dělený počtem známek) a
vypište jej zaokrouhlený na 2 desetinná místa pomocí funkce round($average, 2). Správný výsledek je 2.
*/
echo "<h1>Ukol C</h1>";
$grades = [1, 2, 1, 3, 2, 1, 4];
$sum = 0;
foreach ($grades as $grade) {
$sum = $sum + $grade;
echo $grade . " ";
}
echo "<br>";
round($sum, 2);

echo "prumer znamek je: ";
echo $sum/count($grades);

echo "<h1>Ukol D</h1>";
/*
Vytvořte pole naměřených denních teplot . Pomocí cyklu
foreach a podmínky if vypište pouze teploty, které jsou alespoň 23 °C, a zároveň spočítejte, kolik
takových dnů v týdnu bylo (správný počet je 3).
*/
$temperatures = [18, 22, 25, 19, 27, 24, 16];
$dny =0;
foreach ($temperatures as $teplota){
if ($teplota >= 23) {
echo $teplota;
echo "<br>";
$dny++;
}
}
echo "dnu kdy bylo 23 nebo vic stupnu bylo: " . $dny;

















