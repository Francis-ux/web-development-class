<?php
$dayOfTheWeek = date('l');

switch ($dayOfTheWeek) {
    case 'Monday':
        $message = 'Monday blues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'At least it\'s not monday';
        $color = 'green';
        break;
    case 'Wednesday':
        $message = 'Hump day';
        $color = 'orange';
        break;
    case 'Thursday':
        $message = 'One more day till friday';
        $color = 'red';
        break;
    case 'Friday':
        $message = 'TGIF';
        $color = 'purple';
        break;
    case 'Saturday':
        $message = 'Have a nice weekend';
        $color = 'yellow';
        break;
    case 'Sunday':
        $message = 'Have a nice weekend';
        $color = 'yellow';
        break;
    default:
        $message = 'Not a valid day';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Day Is It?</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?php echo $color ?>;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1><?= strtoupper($message) ?></h1>
</body>

</html>