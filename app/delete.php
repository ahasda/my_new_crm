<?php
session_start();

try {
    $pdo = new PDO("mysql:host=localhost;dbname=crm_data", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the CSRF token is valid
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die('Invalid CSRF token');
}

// Check if the ID is set in POST request and is a valid integer
if (isset($_POST['id']) && filter_var($_POST['id'], FILTER_VALIDATE_INT)) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $stmt = $pdo->prepare("DELETE FROM main_table WHERE mid = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully 😥.');window.location.href='index.php'</script>";
        // Redirect or display success message
    } else {
        echo "Error deleting record.";
        // Handle error
    }
} else {
    die('Invalid request');
}
?>
