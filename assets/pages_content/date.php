<?php
// todays date
// had to change to swedish time to get swedis time to change language consider fixing this in a bether way
setlocale(LC_TIME, 'sv_SE.UTF-8');
echo strftime("<p>%A den %e %B", strtotime("today"));

// calculate and print the week number
$weekNumber = date("W");
echo " (Vecka $weekNumber)</p>";


// get user input and print out time until date
if (isset($_POST['date_input'])) {
    $inputDate = $_POST['date_input'];

    // validate user input 
    if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $inputDate)) { // regular expression generated with the help of chat gpt

        $currentDate = new DateTime();
        $targetDate = new DateTime($inputDate);

        if ($targetDate > $currentDate) {
            $interval = $currentDate->diff($targetDate);

            echo "<br><p>Det är " . $interval->format('%a dygn, %h timmar, %i minuter och %s sekunder') . " till datumet.</p>";
        } else {
            echo "<br><p>Datumet måste vara i framtiden.</p>";
        }
    } else {
        echo "<br><p>Ogiltigt datumformat. Använd formatet ÅÅÅÅ-MM-DD.</p>";
    }
}
