<h1>create</h1>
<?php
 
include("./conn.php");
 
$product = $_POST['gerecht'];
echo 'dit is mijn productnaam: '.$product.' <<<<<';
 
//create request
$sql = 'INSERT INTO menuitems(Productnaam) VALUES (:product)';
$stmt = $conn->prepare(query: $sql);
$stmt ->bind_param(param: ":product", var: &$product);
$stmt ->bind_param(param: ":prijs", var: 1.50);
$stmt->execute();
 
header(header: 'Location: ../index.php');