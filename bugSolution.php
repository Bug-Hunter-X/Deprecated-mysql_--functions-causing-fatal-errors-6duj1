The solution involves replacing the deprecated `mysql_*` functions with the safer and more modern `mysqli_*` extension.  Here is the corrected code:
```php
<?php
$mysqli = new mysqli("localhost", "username", "password", "database_name");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$result = $mysqli->query("SELECT * FROM users");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        // Process each row
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
    }
    $result->free_result();
} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();
?>
```
Remember to replace the placeholder values for "localhost", "username", "password", and "database_name" with your actual MySQL server credentials.