<?php

// This program is a microwave
// By Venika Sem
// @version 1.0
// @since Feb-2024

// Function to get user input for selection
function createSelection($options, $headerText) {
    echo $headerText . "\n";
    foreach ($options as $key => $option) {
        echo ($key + 1) . ". " . $option . "\n";
    }
    $input = intval(readline("Enter your choice: "));
    return $input;
}

// Food types and cook times
$foodTypes = ['sub', 'pizza', 'soup'];
$cookTimes = [
    ['1 minute 0 seconds', '1 minute 30 seconds', '2 minutes 0 seconds'],
    ['0 minutes 45 seconds', '1 minute 7.5 seconds', '1 minute 30 seconds'],
    ['1 minute 45 seconds', '2 minute 37.5 seconds', '3 minutes 30 seconds']
];

// User selects type of food
$typeOfFoodIndex = createSelection($foodTypes, "Are you heating a sub, pizza, or soup?: ");
$typeOfFood = $foodTypes[$typeOfFoodIndex - 1];

// User selects amount of food
$amountOfFoodIndex = createSelection(range(1, 3), "How many {$typeOfFood}s are you cooking? (max 3): ");
$cookTime = $cookTimes[$typeOfFoodIndex - 1][$amountOfFoodIndex - 1];

echo "Selected: " . ucfirst($typeOfFood) . "\n";
echo "Selected: " . $amountOfFoodIndex . "\n";
echo "The total cook time is " . $cookTime . ".\n";

// End program
echo "\nDone.\n";
?>
