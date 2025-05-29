<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$number = 15;
if ($number % 3 == 0 && $number % 5 == 0) 
{
    echo "FizzBuzz";
} 
elseif ($number % 3 == 0) {
    echo "Fizz";
} 

elseif ($number % 5 == 0) {
    echo "Buzz";
} 

else {
    echo $number;
}

?>
</body>
</html>