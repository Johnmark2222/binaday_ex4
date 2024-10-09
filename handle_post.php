<?php
if (isset($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);
    // Process the username, e.g., save it to a database
    echo "Hello, " . $username;
} else {
    echo "No username provided.";
}
?>
