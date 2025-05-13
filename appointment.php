<?php
session_start(); // Start the session to access the success message
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health_appointments";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    $timing = $_POST['timing'];
    $mode = $_POST['mode'];
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];

    $sql = "INSERT INTO appointments (name, email, phone, department, date, timing, mode, age, blood_group) 
            VALUES ('$name', '$email', '$phone', '$department', '$date', '$timing', '$mode', '$age', '$blood_group')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = 'Appointment booked successfully!';
    } else {
        $_SESSION['error_message'] = 'Error: ' . $conn->error;
    }

    $conn->close();
    // Redirect to index page after submission
    header("Location: index.php"); // Redirect to index.php after form submission
    exit();
}
?>
