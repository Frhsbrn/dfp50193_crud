<?php
// include connection
include 'db_connection.php';

// check if url contain id, if not redirect to index page
if (isset($_GET["idStudent"]) && !empty(trim($_GET["idStudent"]))) {
    // get id from url
    $id = trim($_GET["idStudent"]);

    $sql = "DELETE FROM students WHERE idStudent='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='http://localhost/PHP-MySQL/';</script>";
        exit();
    }
    // close connection
    mysqli_close($conn);
} else {
    echo "<script>alert('Please select record to delete');</script>";
    echo "<script>window.location.href='http://localhost/PHP-MySQL/';</script>";
}
