*31 December 2024*
# File Handling: Write, Append File in PHP

File handling is a crucial aspect of server-side scripting in PHP. This guide explains how to handle file operations such as writing, appending, and maintaining state control.

---

## 1. Writing to a File
Writing to a file involves creating or overwriting its content.
### Syntax
* fwrite()
```php
$filename = "example.txt";
$content = "This is a new file.";

$file = fopen($filename, "w"); // Open file in write mode
if ($file) {
    fwrite($file, $content); // Write content to file
    fclose($file); // Close the file to save changes
} else {
    echo "Unable to open file.";
}
```
* file_put_contents()
```php
<?php
file_put_contents("example.txt", "This is a new file.\n");
?>
```
### Key Points
- The `fopen()` function opens a file; the mode `"w"` overwrites the file if it exists or creates a new one.
- Use `fwrite()` to write data.
- Always close the file with `fclose()` to avoid resource leaks.
- Alternative uses file_put_contents(), open, write and close .

---

## 2. Appending to a File
Appending adds new data to the end of an existing file without erasing previous content.

### Syntax
* fwrite()
```php
$filename = "example.txt";
$newContent = "\nAppending this line.";

$file = fopen($filename, "a"); // Open file in append mode
if ($file) {
    fwrite($file, $newContent); // Append content
    fclose($file); // Close the file to save changes
} else {
    echo "Unable to open file.";
}
```
* file_put_contents()
```php
<?php
file_put_contents("example.txt", "Appending this line.\n", FILE_APPEND);
?>
```
### Key Points
- The mode `"a"` opens the file for appending.
- New content is added to the end without modifying existing data.
- Alternative uses file_put_contents($filename,$content,FILE_APPEND), open, append and close .


---

```bash
php fileWrite.php
```