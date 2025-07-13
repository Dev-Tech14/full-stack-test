<?php


include 'db.php';

$category = $_POST['category'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$image_url = $_POST['image_url'];
$link_url = $_POST['link_url'];

$sql = "INSERT INTO sections (category, title, subtitle, image_url, link_url) 
        VALUES ('$category', '$title', '$subtitle', '$image_url', '$link_url')";

if ($conn->query($sql) === TRUE) {
    header("Location: create.php?added=1");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
