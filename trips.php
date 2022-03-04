<?php
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM trips " ;
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>