<?php

function getAllUsers()
{
    $filename = '../dataset/users.json';
    $data = file_get_contents($filename);
    return $users = json_decode($data, true);
}

function deleteUser($id)
{
    $users = getAllUsers();

    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }
    saveData($users);
}

function saveData($users)
{
    file_put_contents('../dataset/users.json', json_encode($users, JSON_PRETTY_PRINT));
}