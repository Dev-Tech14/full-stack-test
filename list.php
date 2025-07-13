<?php
include 'db.php';

$sql = "SELECT * FROM sections";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List Sections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Category List</h2>
    <a href="create.php" class="btn btn-success mb-3">Add New Category</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Image</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['category']; ?></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['subtitle']; ?></td>
                <td><img src="<?= $row['image_url']; ?>" width="60" height="40"></td>
                <td><a href="<?= $row['link_url']; ?>" target="_blank">Visit</a></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php if (isset($_GET['deleted']) && $_GET['deleted'] == 1): ?>
<script>
    alert("Record deleted successfully!");
    // Remove the query string from the URL
    if (window.history.replaceState) {
        const url = new URL(window.location.href);
        url.searchParams.delete('deleted');
        window.history.replaceState({}, document.title, url.pathname + url.search);
    }
</script>
<?php endif; ?>


</body>
</html>
