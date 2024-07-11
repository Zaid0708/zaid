<?php
// Set session cookie parameters to expire when the browser is closed
session_set_cookie_params([
    'lifetime' => 0, // 0 means "until the browser is closed"

]);

// Start the session
session_start();

// Initialize the refresh count if it doesn't exist in the session
if (!isset($_SESSION['refresh_count'])) {
    $_SESSION['refresh_count'] = 0;
}

// Increment the refresh count on each page load
$_SESSION['refresh_count']++;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Refresh Counter</title>
</head>
<body>
    <h1>Page Refresh Counter</h1>
    <p>This page has been refreshed <?php echo $_SESSION['refresh_count']; ?> times.</p>
</body>
</html>
