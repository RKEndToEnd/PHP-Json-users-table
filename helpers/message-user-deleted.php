<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'del') {
        echo '<div id="user-deleted" class="alert alert-danger alert-dismissible fade show d-flex container col-md-4 justify-content-center" role="alert" style="margin-top: 30px">' . $messageDel . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}