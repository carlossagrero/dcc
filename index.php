<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting App</title>
</head>
<body>

<?php
// Check if the name is provided in the GET request
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "<h1>Hello, $name!</h1>";
} else {
    echo "<h1>Hello, Guest!</h1>";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>
