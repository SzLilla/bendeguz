<?php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];
    // echo "A választott kategória: " . $id;
} else {
    // echo "Érvénytelen kategória!";
}

$name = $_GET['name'];

$sql = "SELECT id, name, IFNULL(NULLIF(img_url, ''), 'public/images/cardimages/default.jpg') AS img_url FROM categories WHERE parent_category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result_subcategories = $stmt->get_result();
$conn->close();
?>