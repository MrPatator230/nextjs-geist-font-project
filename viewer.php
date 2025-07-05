<?php
header('Content-Type: application/json');

$action = $_GET['action'] ?? '';

if ($action === 'list') {
    $jsonFile = __DIR__ . '/pdfs.json';
    if (file_exists($jsonFile)) {
        $jsonContent = file_get_contents($jsonFile);
        echo $jsonContent;
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Fichier JSON introuvable']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Action non valide']);
}
?>
