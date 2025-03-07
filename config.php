<?php
$host = 'postgres.railway.internal'; // Railway Database Host
$dbname = 'railway'; // Your Database Name
$username = 'postgres'; // Your Database Username
$password = 'pLzFYVAPtZBZuWAieJplgepvHUhFpcle'; // Your Database Password

// Create a connection to the database
try {
    $pdo = new PDO("pgsql:host=$postgres.railway.internal;dbname=$railway", $postgres, $pLzFYVAPtZBZuWAieJplgepvHUhFpcle); // For PostgreSQL
    // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); // For MySQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
