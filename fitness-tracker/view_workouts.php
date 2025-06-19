<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Workouts</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Logged Workouts</h1>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Workout Type</th>
                    <th>Duration (minutes)</th>
                    <th>Goal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT * FROM workouts ORDER BY date DESC");
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['workout_type'] . "</td>";
                    echo "<td>" . $row['duration'] . "</td>";
                    echo "<td>" . $row['goal'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="index.php">Add New Workout</a>
    </div>
</body>
</html>
