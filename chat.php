<?php

$db = new mysqli("localhost", "root", "root", "chat");
if ($db->connect_error) {
    die("Соединение прервано" . $db->connect_error);
}

$result = array();
$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
$from = filter_var(trim($_POST['from']), FILTER_SANITIZE_STRING);


if(!empty($message) && !empty($from)) {
    $sql = "INSERT INTO `chat` (`message`, `from`) VALUES ('$message', '$from')";
    $result['send_status'] = $db->query($sql);
}

$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db->query("SELECT * FROM `chat` WHERE `id` > " . $start);
while ($row = $items->fetch_assoc()) {
    $result['items'][] = $row;
}



$db->close();
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
