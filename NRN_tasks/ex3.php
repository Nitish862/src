<?php include 'header.php'; ?>

<h1>Welcome to My Site</h1>

<form action="welcome.php" method="post">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
}
?>

<h3>HTML Table with Bootstrap Styling</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Harry</td>
            <td>Tom</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>peeka</td>
            <td>Jonney</td>
        </tr>
    </tbody>
</table>

<!-- String Variables -->
<h3>String Variables</h3>
<?php
$str1 = "Hello";
$str2 = "World";
$joinedString = $str1 . ' ' . $str2;
echo "Joined String: $joinedString<br>";
echo "Length of the String: " . strlen($joinedString);
?>

<!-- Number Addition -->
<h3>Number Addition</h3>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "Sum of the numbers: $sum";
?>

<!-- Browser Detection -->
<h3>Browser Detection</h3>
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "User Agent: $userAgent";
?>
<?php include 'footer.php'; ?>