<?php
include 'db_conn.php';
$id = $_GET['ID'];
echo $sql = "DELETE FROM `crud` WHERE `ID` = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}