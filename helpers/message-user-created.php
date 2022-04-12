<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'add') {
        echo '<div id="user-created" class="alert alert-success alert-dismissible fade show d-flex container col-md-4 justify-content-center" role="alert" style="margin-top: 30px">' . $message . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}