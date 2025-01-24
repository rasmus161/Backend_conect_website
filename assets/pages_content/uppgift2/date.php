<?php

// check for aql injections armets
if (isset($_POST['date_input'])) {
    $inputDate = htmlspecialchars($_POST['date_input'], ENT_QUOTES, 'UTF-8');


    // validate user input 
    if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $inputDate)) { // regular expression generated with the help of chat gpt

        $currentDate = new DateTime();
        $targetDate = new DateTime($inputDate);

        if ($targetDate > $currentDate) {
            $interval = $currentDate->diff($targetDate);

            echo "<br><p>Det är " . $interval->format('%a dygn, %h timmar, %i minuter och %s sekunder') . " till dejten.</p>";
        } else {
            echo "<br><p>Datumet måste vara i framtiden.</p>";
        }
    } else {
        echo "<br><p>Ogiltigt datumformat. Använd formatet ÅÅÅÅ-MM-DD.</p>";
    }
}


// todays date 

// Arrays for Swedish day and month names
$swedishDays = ["Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag"];
$swedishMonths = ["Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December"];

$dayOfWeek = $swedishDays[date("w")];
$day = date("j");
$month = $swedishMonths[date("n")  - 1];
$weekNumber = date("W");

echo "<p> idag: $dayOfWeek den $day $month </p>"; 
echo " (Vecka: $weekNumber)</p>";
