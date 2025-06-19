<?php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];
    // echo "A választott id: " . $id;
} else {
    // echo "Érvénytelen id!";
}


$sql = "
    SELECT *
    FROM products
    WHERE products.id = ?;
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();
$name = $row['title'] ?? 'Név nem található';
$short_description = $row['short_description'] ?? 'Rövid leírás nem található';
$long_description = $row['long_description'] ?? 'Hosszú leírás nem található';
$img_url = $row['img_url'] ?? 'public/images/productimages/default.jpg';

?>

