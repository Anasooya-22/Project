<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];

    // Use prepared statement
    $stmt = $conn->prepare("INSERT INTO reports (user_id, title, description, location, status) VALUES (?, ?, ?, ?, ?)");
    $user_id = 1; // default/test user
    $status = 'p'; // pending (short form) OR use 'pending' if your ENUM is full words

    $stmt->bind_param("issss", $user_id, $title, $description, $location, $status);

    if ($stmt->execute()) {
        echo "Report submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report Issue</title>
</head>
<body>
    <h2>Report Drainage Issue</h2>
    <form method="POST">
        <label>Title:</label><input type="text" name="title" required><br>
        <label>Description:</label><textarea name="description" required></textarea><br>
        <label>Location:</label><input type="text" name="location" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
