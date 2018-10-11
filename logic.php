<?php

#extract our data out of the session if it exists.
session_start();

#on initial page load, hasErrors should be false:
$hasErrors = false;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
    $calculated = $results['calculated'];
    $cadence = $results['cadence'];
    $savingsGoal = $results['savingsGoal'];
    $savings = $results['savings'];
    $startDate = $results['startDate'];
    $completeDate = $results['completeDate'];
}

#delete the session so on the next page load the results no longer appear:
session_unset();