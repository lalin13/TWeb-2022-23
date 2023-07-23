<?php include(ROOT_PATH . "/db.php"); ?>
<?php include(ROOT_PATH . "/validatePost.php");?>
<?php include(ROOT_PATH . "/middleware.php"); ?>
<?php

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = "";
$title = "";
$body = "";
$topic_id = "";
$published = "";

if (isset($_GET['del_id'])) {
    adminOnly();
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'Post eliminato con successo!';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . 'php/index-post.php');
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = 'Modifica stato di pubblicazione!';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . 'php/index-post.php');
    exit();
}

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}

/* Add Post */
if (isset($_POST['add-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '../../images/' .  $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Upload dell'immagine fallito!");
        }
        
    } else {
        array_push($errors, "Post immagine necessaria");
    }

    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'] ;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']); 

        $post_id = create($table, $_POST);
        $_SESSION['message'] = 'Post creato con successo!';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . 'php/index-post.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0; 
    }

}

/* Upload Post */
if (isset($_POST['update-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '../../images/' .  $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Modifica dell'immagine fallita!");
        }
        
    } else {
        array_push($errors, "Post immagine necessaria");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'] ;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']); 

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Post modificato con successo!';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . 'php/index-post.php');

    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0; 
    }
}

/* Likes Post */

