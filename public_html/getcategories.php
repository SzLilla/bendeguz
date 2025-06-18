<?php
$sql = 
"SELECT id, name, IFNULL(NULLIF(img_url, ''), 'public/images/cardimages/default.jpg') AS img_url 
FROM categories
WHERE parent_category IS NULL
ORDER BY name ASC";
$result = $conn->query($sql);
$conn->close();

?>