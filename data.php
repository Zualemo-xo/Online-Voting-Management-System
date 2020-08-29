<?php
require_once 'config.php';
$stmt = $conn->prepare('select * from votes');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);
?>
