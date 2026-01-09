<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Validate input
    if (empty($_POST['todo_item'])) {
        die("Todo item cannot be empty.");
    }

    // 2. Sanitize input
    $item = trim($_POST['todo_item']);
    $item = htmlspecialchars($item, ENT_QUOTES, 'UTF-8');

    // 3. Database credentials
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "todo";

    // 4. Create DB connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // 5. Prepare SQL statement
    $stmt = $conn->prepare(
        "INSERT INTO todo_table (to_do_list) VALUES (?)"
    );

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $item);

    // 6. Execute
    if ($stmt->execute()) {
        // Redirect back to index page after success
        header("Location: index.php?success=1");
        exit;
    } else {
        echo "Error inserting todo: " . $stmt->error;
    }

    // 7. Cleanup
    $stmt->close();
    $conn->close();
}
