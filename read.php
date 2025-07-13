<?php
include 'db.php';

$category = $_GET['category'];
$sql = "SELECT * FROM sections WHERE category = '$category'";
$result = $conn->query($sql);

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = [
        'title' => $row['title'],
        'subtitle' => $row['subtitle'],
        'image_url' => trim($row['image_url']),
        'link_url' => $row['link_url'] // ✅ Include this

       

    ];
}

echo json_encode($data);
?>