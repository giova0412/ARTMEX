<?php
include 'conex.php'

$action = $_GET['action'] ?? '';

if ($action === 'getMessages') {
    // Obtener mensajes
    $sql = "SELECT username, message FROM messages ORDER BY created_at ASC";
    $result = $conn->query($sql);

    $messages = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $messages[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($messages);
} elseif ($action === 'postMessage') {
    // Guardar mensaje
    $username = $_POST['username'];
    $message = $_POST['message'];

    if (!empty($username) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (username, message) VALUES (?, ?)");
        $stmt->bind_param('ss', $username, $message);
        $stmt->execute();
        $stmt->close();
    }
}

$conn->close();
?>
