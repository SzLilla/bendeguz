<?php
$sql = "SELECT id, name, IFNULL(NULLIF(img_url, ''), 'public/images/cardimages/default.jpg') AS img_url FROM categories";
$result = $conn->query($sql);
$conn->close();

?>