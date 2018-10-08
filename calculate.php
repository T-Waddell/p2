<?php

#start the session at the top of the page.
session_start();

require 'helpers.php';

$savingsGoal = $_GET['savingsGoal'];
dump('savings goal: '.$savingsGoal);
$savings = $_GET['savings'];
dump('savings amount: '.$savings);
$cadence = $_GET['cadence'];
dump('cadence: '.$cadence);

If ($cadence == 'weekly'){
    $cadence = 'weeks';
}
else {
    $cadence = 'months';
}

$calculated = ceil($savingsGoal / $savings);
dump('It will take you '.$calculated.' '.$cadence.' to save for your goal of $'.$savingsGoal.'.');

#Get the start date from the form
$startDate = $_GET['startDate'];
dump($startDate);

if ($cadence == 'weeks') {
    $daysToAdd = $calculated*7;
} elseif ($cadence == 'months') {
    $daysToAdd = $calculated*30;
}

#Add days to the start date:
$completeDate = date('m-d-y', strtotime("$startDate +$daysToAdd days"));
#Example: add 10 days
dump(date("m-d-y", strtotime("$startDate +10 days")));

#example: using today's date
echo date('Y-m-d', strtotime("+30 days"));


#Get the

/*using the timestamp vs. a variable:
$newDate = date('Y-m-d', strtotime("+30 days"));
dump($newDate);

$finishDate = date('m-d-Y', strtotime('+60 days'));
dump($finishDate);
*/

#Before our redirect, store data in the session.
$_SESSION['results'] = [
    'calculated' => $calculated,
    'cadence' => $cadence,
    'savingsGoal' => $savingsGoal,
    'savings' => $savings,
    'startDate' => $startDate,
    'completeDate' => $completeDate
];

# Redirect to the form page:
header('Location: index.php');