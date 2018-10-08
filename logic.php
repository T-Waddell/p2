<?php
//test that our require functions are working.
# echo 'logic.php is loaded';

#extract our data out of the session if it exists.
session_start();

if(isset($_SESSION['results'])){
    $results = $_SESSION['results'];

    $calculated = $results['calculated'];
    $cadence = $results['cadence'];
    $savingsGoal = $results['savingsGoal'];
    $savings = $results['savings'];
    $startDate = $results['startDate'];
    $completeDate = $results['completeDate'];
}

#delete the session so on the next page load the results no longer appear.
session_unset();