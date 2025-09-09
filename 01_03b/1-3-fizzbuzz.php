<?php

for ($number = 1; $number <= 100; $number++) {
  if (0 == $number % 15) {
    echo "FizzBuzz" . PHP_EOL;
  } elseif (0 == $number % 5) {
    echo "Buzz" . PHP_EOL;
  } elseif (0 == $number % 3) {
    echo "Fizz" . PHP_EOL;
  } else {
    echo $number . PHP_EOL;
  }
}