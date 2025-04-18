<?php
include ('conn.php');
$stmt = $conn->prepare("SELECT * FROM menuitems");
var_dump($stmt);
$stmt->execute();
$result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
?>