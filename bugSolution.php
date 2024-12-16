```php
<?php
$mysqli = new mysqli('localhost', 'username', 'password', 'database');
if ($mysqli->connect_errno) {
die('Connect Error: ' . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
if (!$stmt) {
die('Prepare failed: ' . $mysqli->error);
}

$username = $_GET['username'];
$stmt->bind_param('s', $username);
if (!$stmt->execute()) {
die('Execute failed: ' . $stmt->error);
}

$result = $stmt->get_result();
if (!$result) {
die('Get result failed: ' . $stmt->error);
}

while ($row = $result->fetch_assoc()) {
    echo "Username: " . $row['username'] . "<br>";
}

$stmt->close();
$mysqli->close();
?>
```