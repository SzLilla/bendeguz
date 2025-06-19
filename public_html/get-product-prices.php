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
    LEFT JOIN prices ON products.id = prices.product_id
    LEFT JOIN vendors ON prices.vendor_id = vendors.id
    WHERE products.id = ?;
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result_prices = $stmt->get_result();

?>

