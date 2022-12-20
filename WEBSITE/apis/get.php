<?php
header("Access-Control-Allow-Origin: *");

$conn = mysqli_connect("localhost", "root", "", "redirecturl");

$q = "SELECT * FROM `urls` ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $q);

$row = mysqli_fetch_array($result);
echo json_encode($row['url']);
