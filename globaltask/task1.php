<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$url = $_POST['url'];
header("Location: " . $url);
    exit();
}
?>