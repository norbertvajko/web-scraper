<?php

include "connDB.php";

$data = "k";
if (isset($_GET['q'])) {
    $data = $_GET['q'];
}

$query = "SELECT name, images, id FROM products WHERE name LIKE '%" . $data . "%' ORDER BY price ASC LIMIT 3";
$result = mysqli_query($GLOBALS['conn'],$query);

if ($result) {

    foreach ($result as $row) {

        echo "<div class='drop-items d-flex flex-row align-items-center'>";
        echo "<div id='img-drop'><img src='" . $row['images'] . "' style='height: 90px; width: 90px;' /></div>";
        echo "<div id='title-drop' style='padding-left: 13px;padding-top: 7px;'><button onclick='saveSearch(" . $row['id'] . ")'>" . $row['name'] . " </button></div>";
        echo "</div>";
    }

}

return json_encode($data);




