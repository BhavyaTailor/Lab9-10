<?php
    require_once './db/conn.php'; 

    if (isset($_GET['deleteid']) && !empty($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

        $id = mysqli_real_escape_string($conn, $id);
        $id = (int)$id;
        if ($id <= 0) {
        header("Location: viewrecords.php?status=error&message=" . urlencode("Invalid record ID provided. ID must be a positive number."));
        exit();
        }

        $sql = "DELETE FROM `client_info` WHERE `client_info`.`client_id` = $id";

        if (mysqli_query($conn, $sql)) {
            header("Location: viewrecords.php?status=deleted");
            exit(); 
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "No record ID provided for deletion.";
    }
?>