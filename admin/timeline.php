<?php
if (isset($_POST['dob'])) { 
    $dob = new DateTime($_POST['dob']);
    $today = new DateTime();
    $age = $today->diff($dob)->y;

    if ($age >= 21) {
        header("Location: welcome.php");
    } else {
        header("Location: notwelcome.php");
    }
}






// Assuming you have a PDO connection established
$today = date('Y-m-d');
$stmt = $pdo->prepare("SELECT * FROM bookings 
    WHERE DATE(date) > DATE(NOW()) 
    AND dateofquote != '' 
    AND email != '' 
    AND confirmed = 0");

$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = 2;
foreach ($rows as $row) {
    $dateOfQuote = new DateTime($row['dateofquote']);
    $interval = $dateOfQuote->diff(new DateTime($today));
    $diff = $interval->format('%a');

    if ($diff == '2') {
        // send email
    } else {
        // Handle error or log the issue
        echo 'something went wrong';
    }
}
