<?php
require_once '../db_connect.php';
$stmt = null;
$user_id=(!empty($_SESSION['user']) && !empty($_SESSION['user']['id']))?$_SESSION['user']['id']:'';
$stmt = $conn->prepare("SELECT * FROM payment_table");
$stmt->execute(array());
?>
