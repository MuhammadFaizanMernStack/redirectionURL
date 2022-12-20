<?php


$conn = mysqli_connect("localhost", "root", "", "redirecturl");

if (isset($_POST['command'])) {
    $command = $_POST['command'];
    if ($command == 'add') {
        $url = $_POST['url'];
        $q = "INSERT INTO `urls` (url) VALUES ('$url')";
        echo $q;
        $result = mysqli_query($conn, $q);
        if ($result) {
            echo "Data Inserted";
            header('Location: ../index.php?msg=success');
        } else {
            echo "Data Not Inserted";
        }
    }
}
