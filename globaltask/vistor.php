<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
</head>
<body>
    <h1>Website Visitor Counter</h1>
    <?php
    if (!isset($_SESSION['visitor_count'])) {
        $_SESSION['visitor_count'] = 0;
    }

    // Increment the visitor count on each page load
    $_SESSION['visitor_count']++;

    // Display the count
    echo "<p>vistor count is {$_SESSION['visitor_count']} times in this session.</p>";
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/","",false, true);
    echo $cookie_value;
    echo"<br>";
    setcookie($cookie_name, $cookie_value, time() -55, "/","",false, true);
    echo"cookie deleted";
    

   
    ?>
</body>
</html>
