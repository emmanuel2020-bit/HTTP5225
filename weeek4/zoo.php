<?php

date_default_timezone_set("America/Toronto");

$currentHour = date( "G");

if ($currentHour >= 5 && $currentHour < 9) {
    $meal = "Breakfast";
    $food = "Bananas, Apples, and Oats";
    
} elseif ($currentHour >= 12 && $currentHour < 14) {
    $meal = "Lunch";
    $food = "Fish, Chicken, and Vegetables";

} elseif ($currentHour >= 19 && $currentHour < 21) {
    $meal = "Dinner";
    $food = "Steak, Carrots, and Broccoli";

} else {
    $meal = "None";
    $food = "The animals are not being fed at this time.";
}

echo "Current Hour: $currentHour\n";
if ($meal !== "None") {
    echo "Meal Time: $meal\n";
    echo "Food: $food";
} else {
    echo $food;
}
?>
