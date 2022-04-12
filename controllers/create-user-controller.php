<?php

$message = '';
$error = '';

if (isset($_POST["createUserBtn"])) {
    $new_user = array();
    if (empty($_POST['name'] && strlen($_POST['name']) < 50)) {
        $error .= '<li class="text-danger">User name and surname are required. Cannot be longer than 50 characters.</li>';
    } else {
        $new_user['name'] = trim($_POST['name']);
    }
    if (empty($_POST["username"] && strlen($_POST['username']) < 50)) {
        $error = '<li class="text-danger">Username is required. Cannot be longer than 50 characters.</li>';
    } else {
        $new_user['username'] = trim($_POST['username']);
    }
    if (empty($_POST["email"] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        $error .= '<li class="text-danger">Email is required. Remember to set correct email format.</li>';
    } else {
        $new_user['email'] = trim($_POST['email']);
    }
    if (empty($_POST["phone"] && filter_var($_POST['phone'], FILTER_VALIDATE_INT))) {
        $error .= '<li class="text-danger">Phone is required. Remember to set correct phone format.</li>';
    } else {
        $new_user['phone'] = trim($_POST['phone']);
    }
    if (empty($_POST["address-street"] && strlen($_POST['address-street']) < 50)) {
        $error .= '<li class="text-danger">Street is required. Cannot be longer than 50 characters.</li>';
    } else {
        $new_user['address-street'] = trim($_POST['address-street']);
    }
    if (empty($_POST["address-zipcode"] && strlen($_POST['address-zipcode']) < 10)) {
        $error .= '<li class="text-danger">Zipcode is required. Cannot be longer than 10 characters.</li>';
    } else {
        $new_user['address-zipcode'] = trim($_POST['address-zipcode']);
    }
    if (empty($_POST["address-city"] && strlen($_POST['address-city']) < 50)) {
        $error .= '<li class="text-danger">City is required. Cannot be longer than 50 characters.</li>';
    } else {
        $new_user['address-city'] = trim($_POST['address-city']);
    }
    if (empty($_POST["company"] && strlen($_POST['name']) < 50)) {
        $error .= '<li class="text-danger">Company name is required. Cannot be longer than 50 characters.</li>';
    } else {
        $new_user['company'] = trim($_POST['company']);
    }
    if ($error == '') {

        if (file_exists('../dataset/users.json')) {
            $file_data = file_get_contents('../dataset/users.json');
            $array_data = json_decode($file_data, true);
            $last_ids = end($array_data);
            $last_id = $last_ids['id'];
            $new_user = array(
                'id' => ++$last_id,
                'name' => $_POST['name'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => array('street' => $_POST['address-street'],
                    'zipcode' => $_POST['address-zipcode'],
                    'city' => $_POST['address-city']
                ),
                'company' => array('name' => $_POST['company'])
            );
            $array_data[] = $new_user;
            $save_data = json_encode($array_data, JSON_PRETTY_PRINT);
            if (file_put_contents('../dataset/users.json', $save_data)) {
            }
            header('location: ../index.php?msg=add');
        } else {
            $error = '<p class="alert-danger>Json file not exists.</p>';
        }
    }
}

