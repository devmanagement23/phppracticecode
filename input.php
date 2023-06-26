<?php

class SmallestNumberFinder {
    private $numbers;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function findSmallest() {
        $smallest = $this->numbers[0];

        foreach ($this->numbers as $number) {
            if ($number < $smallest) {
                $smallest = $number;
            }
        }

        return $smallest;
    }
}

// Prompt the user for three numbers
echo "Enter the first number: ";
$number1 = (int) readline();

echo "Enter the second number: ";
$number2 = (int) readline();

echo "Enter the third number: ";
$number3 = (int) readline();

// Create an instance of the SmallestNumberFinder class
$numbers = [$number1, $number2, $number3];

$finder = new SmallestNumberFinder($numbers);

// Find the smallest number
$smallestNumber = $finder->findSmallest();

// Display the result
echo "The smallest number among $number1, $number2, and $number3 is: $smallestNumber";

?>
