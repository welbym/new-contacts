<?php
    $conn = mysqli_connect("localhost", "root", "", "new-contacts");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
