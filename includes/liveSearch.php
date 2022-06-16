<?php

include "connDB.php";

$data = "k";
if (isset($_GET['q'])) {
    $data = $_GET['q'];
}
//$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST['valueToSearch']);
//$replace_string = '<b>' . $condition . '</b>';

$query = "SELECT name, images FROM products WHERE name LIKE '%" . $data . "%' LIMIT 3";
$result = mysqli_query($GLOBALS['conn'],$query);

if ($result) {

//    $row = $result->fetch_assoc();



    foreach ($result as $row) {

        echo "<div id='img-drop'><img src='".$row['images']."' style='height: 90px; width: 90px;' /></div>";
        echo "<div id='title-drop'>".$row['name']."</div>";
    }

}

return json_encode($data);
