<?php include 'header.php'; ?>


    <h2>Ex4: If-Else, Switch Case, Loops</h2>
    <h3>If-Else: Check the Voting Eligibility</h3>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "$name, you are eligible for voting.";
        } else {
            echo "Sorry to inform you that $name, you are not eligible for voting yet.";
        }
    }
    ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <input type="submit" name="submit" value="Check Eligibility">
    </form>

    
    <?php
    $currentMonth = date('F');

    switch ($currentMonth) {
        case 'August':
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is $currentMonth so I don't have any holidays.";
    }
    ?>

   
    <h3>For Loop</h3>
    <?php
    $n = 6; 
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
    ?>

    
    <h3>While Loop: Print Numbers from 1 to n</h3>
    <?php
    $n = 18;
    $counter = 1;
    while ($counter <= $n) {
        echo "$counter ";
        $counter++;
    }
    ?>

   
    <h3>Foreach Loop: Print Elements of an Array</h3>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    foreach ($myarray as $myarray) {
        echo "$myarray ";
    }
    ?>


<?php include 'footer.php'; ?>

