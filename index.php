<?php
require 'helpers.php';
require 'logic.php';
//Because we put helpers before logic, the helpers functions will be available within the logic file.
?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Project 2 - Tara Waddell - CSCI E-15</title>
    <meta charset='utf-8'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='/css/styles.css' rel='stylesheet'>

</head>
<body>
    <h1>Time to Save</h1>
    <p>Use this calculator to learn how long your savings goal will take you.</p>
    <form method='GET' action='search.php'>

        <label>How much money do you want to save?
            <input type='text' name='savingsGoal'>
        </label>
        <label>How much money can you put into savings each week or month?
            <input type='text' name='savingsGoal'>
        </label>
        <label><input type='radio' name='cadence' value='weekly'> Weekly</label>
        <label><input type='radio' name='cadence' value='monthly'> Monthly</label>

        <input type='submit' value='Calculate'>
    </form>



</body>
</html>