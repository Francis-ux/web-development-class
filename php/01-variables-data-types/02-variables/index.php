<?php
/*
VARIABLES RULES
- All variables are prefixed with a dollar sign ($).
- They must start with a letter or an underscore.
- They cannot start with a number.
- They can only contains letters, numbers, and underscores.
- They are case sensitive. So, $name and $Name are two different variables
*/

/*
CONVENTIONS
- Underscores: $server_name
- Camel Case:  $serverName
- Pascal Case: $ServerName
- lowercase:   $servername
*/

$title = 'PHP Variables';
$heading = 'Welcome to php variables class';
$body = 'In this class, you will learn the fundamentals of the PHP Variables';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1><?php echo $body ?></h1>
</body>

</html>