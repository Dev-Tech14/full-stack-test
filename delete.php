<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM sections WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: list.php?deleted=1");
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
