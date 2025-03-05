<?php
    $CSS = AppConfig::$Settings["system_domain_name"] . AppConfig::$Settings["assets"]["css"][2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $CSS ?>">
    <title>ZSNHS Signup Page</title>
</head>
<body>
    <form>
        <input type="text" name="signup-username">
        <input type="text" name="signup-">
    </form>
</body>
</html>