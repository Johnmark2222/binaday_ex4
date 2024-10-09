<?php
if (isset($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);
    // Process the query, e.g., search the database
    echo "Your Age is: " . $query;
} else {
    echo "No query provided.";
}
?>
