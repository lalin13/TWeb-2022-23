<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])){
        array_push($errors, 'Nome è vuoto');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if($existingTopic){
    if (isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']) {
        array_push($errors, 'Nome già registrata');
    }

    if (isset($topic['add-topic'])) {
        array_push($errors, 'Nome già registrata');
    }
}


    return $errors;
}

?>