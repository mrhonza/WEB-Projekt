<?php
//Úkol A – Čísla 1 až 10
//Pomocí cyklu for vypište čísla od 1 do 10. Každé číslo zobrazte na samostatném řádku pomocí HTML značky <br>. Změňte podmínku tak, aby se vypsala čísla pouze do 8.
//Úkol B – Sudá čísla
//Vypište všechna sudá čísla od 2 do 20. Vyřešte úkol pomocí kroku $i += 2. Bonus: vyřešte jej také pomocí podmínky if a operátoru % při průchodu všemi čísly od 1 do 20.
//Úkol C – Násobilka
//Vytvořte proměnnou $number = 7. Cyklus for vypíše násobilku zvoleného čísla od 1 do 10 ve tvaru „7 × 1 = 7“, „7 × 2 = 14“ atd. Bonus: změnou jediné proměnné musí fungovat násobilka libovolného celého čísla.
//Úkol D – Součet čísel
//Vypočítejte součet celých čísel od 1 do 100. Použijte proměnnou $sum. Správný výsledek je 5050. Nejde o výpis čísel, ale o jejich postupné sčítání.
echo "<h1>Ukol A</h1>";
for ($i=1;$i<11;$i++){
echo "$i<br>";
}

echo "<br>";

for ($i=1;$i<9;$i++){
    echo "$i<br>";
}
echo "<h1>Ukol B</h1>";
echo "<br>";

for ($i=1;$i<21;$i++){
    $i++;
    echo "$i<br>";
}

echo "<h1>Ukol C</h1>";
echo "<br>";
$number = 7;
$nasobic = 0;
for ($i=1;$i<11;$i++){
$nasobic = $number * $i;
    echo "$number * $i = $nasobic <br>";
}



















