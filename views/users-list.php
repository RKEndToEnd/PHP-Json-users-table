<?php

if (file_exists('dataset/users.json')) {

    $filename = 'dataset/users.json';
    $data = file_get_contents($filename);
    $users = json_decode($data);
    $message = "<h3 class='text-success'></h3>";
} else {
    $message = "<h3 class='text-danger'>JSON file not found</h3>";
}

if (isset($message)) {
    echo $message;
}
?>

<div class="d-flex justify-content-center">
    <div class="d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card" style="margin-top:30px; margin-bottom:30px">
                <div class="card-header"><i class="fas fa-users"> Users list</i>
                    <div class="btn-group float-end">
                        <a href="./views/create-user.php" id="user-create" class="btn btn-sm btn-outline-success"
                           title="Add user"><i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>

                <table id="users-table" class="table table-sm table-responsive table-hover">
                    <tr>
                        <th data-field="id" data-sortable="true">Id</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Actions</th>
                    </tr>

                    <?php


                    foreach ($users as $user): ?>

                        <tr>
                            <td> <?= $user->id; ?> </td>
                            <td> <?= $user->name; ?> </td>
                            <td> <?= $user->username; ?> </td>
                            <td><a href="mailto:<?= $user->email; ?>"><?= $user->email; ?></a></td>
                            <td> <?= $user->address->street, ', ', $user->address->zipcode, ', ', $user->address->city ?> </td>
                            <td> <?= $user->phone; ?> </td>
                            <td> <?= $user->company->name; ?> </td>
                            <td>
                                <div class="btn-group">
                                    <form method="POST" action="./controllers/delete-user-controller.php">
                                        <input type="hidden" id="<?= $user->id; ?>" name="id" value="<?= $user->id; ?>"
                                               class="form-control">
                                        <button class="btn btn-sm btn-outline-danger" title="User delete"><i
                                                    class="fas fa-trash"></i></button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    <?php endforeach;; ?>

                </table>
