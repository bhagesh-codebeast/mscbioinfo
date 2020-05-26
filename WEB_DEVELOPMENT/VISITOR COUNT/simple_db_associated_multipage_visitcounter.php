<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $page_name = "visitor count"; ?>
    <title><?php echo $page_name; ?></title>
</head>
<body>
    <?php
    include "db_multipage_visitcounter.php";
    $acess_number = visitors($page_name);
    ?>
<footer>
  <p>
<?php
    echo "You are the ".$acess_number." visitor on this site!";
    ?>
</p>
</footer>
</body>
</html>