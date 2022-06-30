<?php
$conn = $conn ?? null;

$query = $query ?? null;

$sql = "SELECT * FROM products WHERE name LIKE '%" . $query . "%' ORDER BY price";
$result = mysqli_query($conn, $sql);
$number_of_products = $result->num_rows;
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);


