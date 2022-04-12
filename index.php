<?php
include "views/layouts/header.php";
$message = 'New user created.';
$messageDel = 'User deleted';
include "helpers/message-user-created.php";
include "helpers/message-user-deleted.php";
include "partials/main.php";
include "controllers/delete-user-controller.php";

?>

    <body class="bg-secondary">

    <main>
        <?php require_once './views/users-list.php'; ?>
    </main>
    </body>
<?php
include "views/layouts/footer.php";
