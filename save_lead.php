<?php
// save_lead.php - Secure & Fixed
header('Content-Type: application/json');

$host = 'localhost';
$db   = 'dorna_db';           // Change if your database name is different
$user = 'root';               // Usually 'root' in Laragon
$pass = '';                   // Empty in Laragon by default

try {
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contact = trim($_POST['contact_info'] ?? '');
        
        if (empty($contact)) {
            echo json_encode(["status" => "error", "message" => "Please enter your contact info"]);
            exit;
        }

$stmt = $conn->prepare("INSERT INTO waitlist (contact_info) VALUES (?)");
$stmt->bind_param("s", $contact);

if ($stmt->execute()) {
    echo json_encode([
    "status" => "success",
    "message" => "Thanks! You're on the waitlist."
]);
} else {
    echo json_encode([
    "status" => "error",
    "message" => $stmt->error
]);
}
        
        $stmt->close();
    }
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Server error: " . $e->getMessage()]);
}

$conn->close();
?>