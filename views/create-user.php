<?php
include "../views/layouts/header.php";
include "../controllers/create-user-controller.php";

?>

    <body class="bg-secondary">
    <main>
        <div class="d-flex align-items-center justify-content-center" style="margin-top: 30px">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><i class="fas fa-user-plus"></i> Create new user</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php
                            if (isset($error)) {
                                echo $error;
                            }
                            ?>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="name" class="form-label"></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="User name and surname"/>
                                </div>
                                <div class="col mb-3">
                                    <label for="username" class="form-label"></label>
                                    <input type="text" name="username" id="username" class="form-control"
                                           placeholder="Username"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="email" class="form-label"></label>
                                    <input type="" name="email" id="email" class="form-control"
                                           placeholder="Email"/>
                                </div>
                                <div class="col mb-3">
                                    <label for="phone" class="form-label"></label>
                                    <input type="" name="phone" id="phone" class="form-control"
                                           placeholder="Phone number"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="address-street" class="form-label"></label>
                                    <input type="text" name="address-street" id="address-street" class="form-control"
                                           placeholder="Address: street"/>
                                </div>
                                <div class="col mb-3">
                                    <label for="address-zipcode" class="form-label"></label>
                                    <input type="text" name="address-zipcode" id="address-zipcode" class="form-control"
                                           placeholder="Address: zipcode"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="address-city" class="form-label"></label>
                                    <input type="text" name="address-city" id="address-city" class="form-control"
                                           placeholder="Address: city"/>
                                </div>
                                <div class="col mb-3">
                                    <label for="company" class="form-label"></label>
                                    <input type="text" name="company" id="company" class="form-control"
                                           placeholder="Company: name"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="../index.php" type="button" class="btn btn-sm btn-outline-secondary">Back</a>
                                <input type="submit" name="createUserBtn" class="btn btn-sm btn-outline-primary"
                                       value="Add user"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </body>

<?php
include "../views/layouts/footer.php";
