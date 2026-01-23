<?php
include 'db-v2.php'
?>
Todo item added - <?php echo htmlspecialchars($_GET["todo-item"]); ?>
<?php
$todo_item = ($_GET["todo-item"]);

$sql_execute = "INSERT INTO todo_list (`Todo items`)
VALUES ('$todo_item');";

$sql_query = mysqli_query($impfunc, $sql_execute);

header('Location: index.php');
