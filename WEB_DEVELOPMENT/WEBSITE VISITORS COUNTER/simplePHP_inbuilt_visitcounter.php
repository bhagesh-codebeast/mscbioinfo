<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();

if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views']+1;
}else {
    $_SESSION['views'] = 1;
}

echo "views = ".$_SESSION['views'];

?>
</body>
</html>