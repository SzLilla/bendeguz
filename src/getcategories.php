<?php
$sql = "SELECT id, name, img_url FROM categories";
$result = $conn->query($sql);
$conn->close();

?>