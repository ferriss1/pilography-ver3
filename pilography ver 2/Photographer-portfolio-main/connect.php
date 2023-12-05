<?php
$firstname = $_POST['firstname'];
$emailname = $_POST['emailname'];
$phoneno = $_POST['phoneno'];
$daten = $_POST['daten'];
$timen = $_POST['timen'];
//database connection
$conn = new mysqli('localhost', 'root', 'test');
if ($conn->connect_error) {
    die('Connection Failed  :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (firstname, emailname, phoneno, daten, timen) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $firstname, $emailname, $phoneno, $daten, $timen);
    $stmt->execute();
    echo "Registration successful.";
    $stmt->close();
    $conn->close();
}

?>
