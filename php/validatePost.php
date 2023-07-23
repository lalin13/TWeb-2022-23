<?php 

function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])){
        array_push($errors, 'Titolo è vuoto');
    }

    if (empty($post['body'])){
        array_push($errors, 'Corpo è vuoto');
    }

    if (empty($post['topic_id'])){
        array_push($errors, 'Perfavore selezionare un topic');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if($existingPost){
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post con questo titolo è già registrata');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Post con questo titolo è già registrata');
        }
    }

    return $errors;
}