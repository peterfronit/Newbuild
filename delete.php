<?php
require_once "db_config.php";


$sql = "DELETE FROM subscriber_list  WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($link, $sql)) {
    header("location: subscriber_list.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
mysqli_close($link);
?>