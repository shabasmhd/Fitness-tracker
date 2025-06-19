<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $workout_type = $_POST['workout_type'];
    $duration = $_POST['duration'];
    $goal = $_POST['goal'];

    $sql = "INSERT INTO workouts (date, workout_type, duration, goal) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$date, $workout_type, $duration, $goal]);

    header("Location: view_workouts.php");
    exit();
}
?>
