<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP Application</title>
    <link rel="stylesheet" href="index.css">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/index.css">

</head>
<body>
    <h1>Welcome to My PHP Application</h1>
    <form action="handle_post.php" method="post">
        <input type="text" name="username" placeholder="Enter your username">
        <button type="submit">Submit</button>
    </form>
    <form action="handle_get.php" method="get">
        <input type="text" name="query" placeholder="Age">
        <button type="submit">Search</button>
    </form>
</body>
</html>
