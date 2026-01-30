<?php
require_once "../config.php";

$id = $_POST['id'] ?? null;
$action = $_POST['action'] ?? null;

if (!$id || !$action) {
    echo json_encode(['status' => 'error', 'msg' => 'Date incomplete']);
    exit;
}

switch ($action) {
    case 'add':
        // cod pentru adaugare
        break;
    case 'edit':
        // cod pentru editare
        break;
    case 'delete':
        // cod pentru stergere
        break;
    default:
        echo json_encode(['status' => 'error', 'msg' => 'Actiune necunoscuta']);
        exit;
}

// exemplu simplu de răspuns
echo json_encode(['status' => 'success', 'id' => $id, 'action' => $action]);
?>
