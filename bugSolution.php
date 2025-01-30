To solve the undefined array key access issue, always check if a key exists before attempting to access its value. PHP offers two primary functions for this:

* `isset($myArray["key"])`: Checks if a key exists and if its value is not NULL. 
* `array_key_exists("key", $myArray)`: Checks if a key exists, regardless of its value (including NULL).

Here's the corrected code:

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;
$myArray[1] = 3; // Numeric key

// Safe access using isset()
if (isset($myArray["c"])) {
  echo $myArray["c"];
} else {
  echo "Key 'c' not found\n";
}

// Safe access using array_key_exists()
if (array_key_exists(2, $myArray)) {
  echo $myArray[2];
} else {
  echo "Key 2 not found\n";
}

?>
```
This revised code prevents warnings and ensures that the script handles missing keys gracefully.