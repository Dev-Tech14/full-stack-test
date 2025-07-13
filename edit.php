<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "No ID provided!";
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM sections WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    echo "No record found!";
    exit;
}

$row = $result->fetch_assoc();

$showSuccess = isset($_GET['updated']) && $_GET['updated'] == 1;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Section</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9f9f9;
            padding: 30px;
        }

        .form-container {
            max-width: 600px;
            background: white;
            padding: 25px 30px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
        }

        button {
            margin-top: 25px;
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        a.back-link {
            display: inline-block;
            margin-top: 15px;
            text-align: center;
            width: 100%;
            text-decoration: none;
            color: #007bff;
        }

        a.back-link:hover {
            text-decoration: underline;
        }

          .message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px 15px;
            margin-bottom: 20px;
            border-left: 5px solid #28a745;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <?php if ($showSuccess): ?>
    <div class="message">
         Record updated successfully!
    </div>
<?php endif; ?>

    <h2>Edit Section</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label>Category</label>
        <input type="text" name="category" value="<?= htmlspecialchars($row['category']); ?>">

        <label>Title</label>
        <input type="text" name="title" value="<?= htmlspecialchars($row['title']); ?>">

        <label>Subtitle</label>
        <input type="text" name="subtitle" value="<?= htmlspecialchars($row['subtitle']); ?>">

        <label>Image URL</label>
        <input type="text" name="image_url" value="<?= htmlspecialchars($row['image_url']); ?>">

        <label>Learn More button URL:</label>
        <input type="text" name="link_url" value="<?= htmlspecialchars($row['link_url']); ?>">

        <button type="submit">Update</button>
    </form>
    <a class="back-link" href="list.php">← Back to List</a>
</div>

</body>
</html>
