<?php

// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

// Function to convert Fahrenheit to Celsius
function fahrenheitToCelsius($fahrenheit) {
    $celsius = ($fahrenheit - 32) * 5/9;
    return $celsius;
}

// Test the functions
$celsius = 25;
$fahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius degrees Celsius is equal to $fahrenheit degrees Fahrenheit.\n";

$fahrenheit = 77;
$celsius = fahrenheitToCelsius($fahrenheit);
echo "$fahrenheit degrees Fahrenheit is equal to $celsius degrees Celsius.\n";

?>
