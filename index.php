<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

$sum = 0;

for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $sum += $i;
    }
}

echo "Ответ: " . $sum;
?>
