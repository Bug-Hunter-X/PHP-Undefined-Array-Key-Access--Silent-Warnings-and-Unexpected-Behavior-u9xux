# PHP Undefined Array Key Access

This repository demonstrates a common yet subtle bug in PHP: accessing undefined array keys.  PHP's flexible nature can mask these issues, leading to unexpected behavior and hard-to-debug problems.

The `bug.php` file showcases the issue.  The `bugSolution.php` file provides a corrected version using `isset()` or `array_key_exists()` to handle potential missing keys gracefully.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the warnings generated when accessing undefined keys.
4. Run `bugSolution.php` to see the improved, safer handling of array access.

## Solution

Always check for the existence of array keys before accessing them using `isset()` or `array_key_exists()` to avoid unexpected warnings and potential errors.