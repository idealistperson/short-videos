# File Handling: READ, OPEN and STATE CONTROL in PHP 
*30 December 2024*

This document explains the basic file handling operations in PHP, including reading, writing, and checking file properties.

## Functions Overview

### 1. `fopen($file, $mode)`
Opens a file. The second parameter specifies the mode:
- `r` (read): Opens for reading only. File pointer is placed at the beginning.
- `w` (write): Opens for writing only. Truncates the file or creates a new file if it does not exist.
- `a` (append): Opens for writing. File pointer is placed at the end. Creates the file if it does not exist.

### 2. `fgets($file)`
Reads a file line by line. Typically used with loops to process content incrementally.

### 3. `fclose($file)`
Closes an open file. Always close files to free up system resources.

### 4. `fread($file, $size)`
Reads a specific number of bytes from a file. Useful for handling binary data or when you want to limit the read size.

### 5. `file_get_contents($file)`
Reads the entire content of a file into a string. This is a convenient method for reading files in one go.

#### Note:
Use `nl2br($string)` to convert newlines (`\n`) in the content to HTML `<br>` tags for proper display in browsers.

### 6. `file($file)`
Reads the entire file into an array. Each element of the array corresponds to a line in the file. You can iterate over the lines using a `foreach` loop.

### 7. `readfile($file)`
Outputs the content of a file directly to the browser or standard output. This is a simple way to display the content without loading it into a variable.

### 8. `file_exists($file)`
Checks if a file exists. Use this for conditional operations like ensuring the file exists before reading or writing.

### 9. `is_readable($file)`
Checks if the file is readable. Returns `true` or `false`.

### 10. `is_writable($file)`
Checks if the file is writable. Returns `true` or `false`.

## Example Code
```php
<?php
$file = "README.md";

$file = fopen($file, "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    fclose($file);
}

// Using readfile()
readfile($file);
```

## Additional Notes
- Always use `fclose()` after working with files to avoid resource leaks.
- Check file permissions using `is_readable` and `is_writable` to prevent runtime errors.
- For web display, sanitize file content to avoid injection attacks.


```bash
php fileOpen.php
```