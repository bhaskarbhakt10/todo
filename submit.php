<?php include 'db.php'; ?>
<?php


print_r($_POST);
// Collect and sanitize form data
$todo_item = mysqli_real_escape_string($hello, $_POST['todo-item']);

var_dump($todo_item);
// Insert data into database
$sql = "INSERT INTO Todo(Item1) 
        VALUES ('$todo_item')";
if ($hello->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $hello->error;
}

// Close the connection
$hello->close();
