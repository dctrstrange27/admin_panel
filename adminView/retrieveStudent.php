<?php
include_once "../config/dbconnect.php";

$id = $_POST["id"];

$sql = "UPDATE students SET bool = 1 WHERE user_id = $id";


if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}

$conn->close();
?>
