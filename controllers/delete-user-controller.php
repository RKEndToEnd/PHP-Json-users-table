<?php

include "../partials/main.php";

if (isset($_POST['id'])) {
    $userId = $_POST['id'];
    deleteUser($userId);
    header('location: ../index.php?msg=del');
}





