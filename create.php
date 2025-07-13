<!-- create.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add New Section</title>
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

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
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

           
 input[type="submit"]:hover {
            background-color: #218838;
        }
        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px 15px;
            margin-bottom: 20px;
            border-left: 5px solid #28a745;
            border-radius: 4px;
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
    </style>
</head>
<body>

<div class="form-container">
    <?php if (isset($_GET['added']) && $_GET['added'] == '1'): ?>
        <div class="message">Record added successfully!</div>
    <?php endif; ?>
    <h2>Add New Category</h2>

    

    <form action="insert.php" method="POST">
        <label>Category:</label>
        <input type="text" name="category" required>

        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Subtitle:</label>
        <input type="text" name="subtitle">

        <label>Image URL:</label>
        <input type="text" name="image_url">

        <label>Learn More button URL:</label>
        <input type="text" name="link_url">

        <input type="submit" value="Add Category">
    </form>
      <a class="back-link" href="list.php">← Back to List</a>
</div>

</body>
</html>
