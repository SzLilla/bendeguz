<?php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];
    // echo "A választott kategória: " . $id;
} else {
    // echo "Érvénytelen kategória!";
}


$sql = "
WITH RECURSIVE descendants AS (
    SELECT *
    FROM categories
    WHERE parent_category = ?

    UNION ALL

    SELECT c.*
    FROM categories c
    INNER JOIN descendants d ON c.parent_category = d.id
),
all_related AS (
    SELECT * FROM categories WHERE id = ?
    UNION ALL
    SELECT * FROM descendants
)
SELECT 
    p.id AS product_id,
    p.title AS name,
    p.short_description,
    p.long_description,
    IFNULL(NULLIF(p.img_url, ''), 'public/images/productimages/default.jpg') AS img_url
    
FROM all_related ar
INNER JOIN products p ON p.category = ar.id;
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $id, $id);
$stmt->execute();
$result_products = $stmt->get_result();
$conn->close();
?>

