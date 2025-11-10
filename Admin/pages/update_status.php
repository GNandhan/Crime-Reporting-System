<?php
include './connect.php';

if (isset($_POST['com_id']) && isset($_POST['com_status'])) {
    $com_id = $_POST['com_id'];
    $com_status = $_POST['com_status'];

    $query = "UPDATE complaint SET com_status='$com_status' WHERE com_id='$com_id'";
    if (mysqli_query($conn, $query)) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
}
