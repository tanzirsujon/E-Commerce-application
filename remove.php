<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>
    <h1>Delete Product</h1>
    
    <form action="delete.php" method="post">
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id" required>
        <button type="submit">Delete Product</button>
    </form>
</body>
</html>
