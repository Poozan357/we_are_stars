<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $rating = $_POST['rating'];
    $interests = implode(", ", $_POST['interests']);
    $age_group = $_POST['age_group'];

    $sql = "INSERT INTO surveys (name, birthdate, rating, interests, age_group) VALUES ('$name', '$birthdate', '$rating', '$interests', '$age_group')";

    if ($conn->query($sql) === TRUE) {
        echo "Survey submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
