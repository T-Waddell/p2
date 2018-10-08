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
    <form method='GET' action='calculate.php'>

        <label>How much money do you want to save?
            <input type='text' name='savingsGoal' value='<?php if (isset($savingsGoal)) echo $savingsGoal ?>'>
        </label>
        <label>How much money can you put into savings each week or month?
            <input type='text' name='savings' value='<?php if (isset($savings)) echo $savings ?>'>
        </label>
        <label><input type='radio' name='cadence' value='weekly' <?php if (isset($cadence) AND $cadence == 'weeks') echo 'checked' ?>> Weekly</label>
        <label><input type='radio' name='cadence' value='monthly' <?php if (isset($cadence) AND $cadence == 'months') echo 'checked' ?>> Monthly</label>
        <label>What date do you plan to start saving?
            <input type="date" id="start" name="startDate" value='<?php if (isset($startDate)) echo $startDate ?>'>
        </label>
        <input type='submit' value='Calculate'>
    </form>
    <?php if (isset($calculated)): ?>
        <div class='alert alert-primary' role='alert'>
            <p>It will take you <?= $calculated ?> <?= $cadence ?> to save for your goal of $<?= $savingsGoal ?>.</p>
            <p>You will reach your goal on approximately <?= $completeDate ?>.</p>
        </div>
    <?php endif ?>


</body>
</html>