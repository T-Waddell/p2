<?php

require 'helpers.php';
require 'Dates.php';
require 'Form.php';

use p2\Dates;
use DWA\Form;

#start the session
session_start();

#instantiate objects
$form = new Form($_GET);
$date = new Dates();

#Get our variables from the form:
$savingsGoal = $form->get('savingsGoal');
$savings = $form->get('savings');
$cadence = $form->get('cadence');
$startDate = $form->get('startDate');

$errors = $form->validate(
    [
        'savingsGoal' => 'required|digit|min:1',
        'savings' => 'required|digit|min:1',
        'cadence' => 'required',
        'startDate' => 'required',
    ]
);
#This returns an array of error messages.

if (!$form->hasErrors) {
    #Adjust the cadence verbiage:
    If ($cadence == 'weekly') {
        $cadence = 'weeks';
    } else {
        $cadence = 'months';
    }

    #Calculate the length of time needed to reach the savings goal:
    $calculated = ceil($savingsGoal / $savings);

    #Calculate the date the goal will be completed by.
    $completeDate = $date->dateCalculate($startDate, $cadence, $calculated);
}

#Before our redirect, store data in the session.
$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'calculated' => $calculated,
    'cadence' => $cadence,
    'savingsGoal' => $savingsGoal,
    'savings' => $savings,
    'startDate' => $startDate,
    'completeDate' => $completeDate
];

# Redirect to the form page:
header('Location: index.php');