<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Tracker</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Fitness Tracker</h1>
        <form action="add_workout.php" method="POST">
            <label for="date">Date:</label>
            <input type="date" name="date" required>
            
            <label for="workout_type">Workout Type:</label>
            <input type="text" name="workout_type" required>
            
            <label for="duration">Duration (minutes):</label>
            <input type="number" name="duration" required>
            
            <label for="goal">Goal:</label>
            <input type="text" name="goal">
            
            <button type="submit">Add Workout</button>
        </form>
        
        <a href="view_workouts.php">View All Workouts</a>
    </div>
</body>
</html>
