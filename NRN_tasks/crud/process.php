<?php
if(isset ($_POST['submit'])) {

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $city = $_POST['city'];
    $groupId = $_POST['groupid'];

include 'db.php';

$sql = "insert into studentInfo(first_name, last_name, groupId, city)
     values('$first_name', '$last_name', '$groupId', '$city')";


     if($conn->query($sql) ===True) {
        echo"Your data has been Recorded sucessfully";


     }
else{
    echo"Error:" .$sql . "<br>" .$conn->error;
}
$conn->close();
}

?>