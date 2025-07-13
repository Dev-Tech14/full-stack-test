<?php
include 'db.php';

$id = $_POST['id'];
$category = $_POST['category'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$image_url = $_POST['image_url'];
$link_url = $_POST['link_url'];

$sql = "UPDATE sections SET 
            category = '$category',
            title = '$title',
            subtitle = '$subtitle',
            image_url = '$image_url',
            link_url = '$link_url'
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: edit.php?id=$id&updated=1");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
?>
