<?php

$conn = new mysqli('localhost', 'root', '', 'test');

// Check connection
if (!$conn) {
    die(mysqli_error($conn));
}

?>
