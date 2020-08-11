<?php

require_once('./application/libs/Database.php');

use application\libs\Database;

$json = [];

$method = strtolower($_GET['method']);
$params = $_GET['params'];

if ($method == 'pay') {
    // Datbase::query("")
}

$json['result']['message'] = 'OK';

if ($json)
    echo json_encode($json);

?>