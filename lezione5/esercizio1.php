<?php

//stampare la data e ora del giorno nel formato:
    // Oggi è venerdì 27 gennaio 2023. Sono le 11:xx.
    //Tip: array giorni\mesi
    function showTodayDate($onlyDate = true): string
    {
        $dayWeek = ['Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom',];
        $month = ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'];
    
        $today = getdate();
        $date = $dayWeek[$today['wday'] - 1] . " " . $today['mday'] . " " . $month[$today['mon'] - 1] . " " . $today['year'];
        if (!$onlyDate) {
            $date = $date . ' - ' . $today['hours'] . ":" . $today['minutes'];
        }
        return $date;
    }
    
    echo showTodayDate() . '<br>';
    echo showTodayDate(false) . '<br>';




//quanto manca a capodanno
$today = new DateTime('27-01-2023');
$newYear = new DateTime(('31-12-2023'));
$interval = $today->diff($newYear);
echo $interval->format('%a total days')."<br>";






//esercizio iniziale e semplice: output -> Oggi è Ven Gen 2023. Sono le 11:44
    // $dayWeek = ['Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom',];
    // $month = ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'];

    // echo '<hr>';
    // $today = getdate();
    // echo "<pre>";
    // print_r($today);
    // echo "</pre>";

    // echo 'Oggi è ' . $dayWeek[$today['wday']-1]. ' '.  $month[$today['mon']-1] .' ' .$today ['year'] . '. Sono le ' .$today ['hours']. ':' .$today ['minutes'];
