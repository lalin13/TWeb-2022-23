<?php

function validateUsers($user)
{
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username è vuoto');
    }

    if (empty($user['email'])){
        array_push($errors, 'Email è vuoto');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password è vuoto');
    }

    if ($user['passwordConf'] !== $user['password']){
        array_push($errors, 'Le password non coincidono');
    }


    $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser){
        array_push($errors, 'Email è già registrata');
    }


    $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser){
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email già registrata');
        }

        if (isset($topic['create-admin'])) {
            array_push($errors, 'Email già registrata');
        }
    }

    return $errors;
}

function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username è vuoto');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password è vuoto');
    }

    return $errors;
}


?>