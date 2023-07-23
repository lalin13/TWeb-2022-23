<?php include(ROOT_PATH . "/db.php"); ?>
<?php include(ROOT_PATH . "/validateTopic.php");?>
<?php include(ROOT_PATH . "/middleware.php"); ?>

<?php

$table = 'topics';

$errors = array();

$topics = selectAll($table);

/* Add-Topics */
if (isset($_POST['add-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-topic']);
        $topic_id = create('topics', $_POST);
        $_SESSION['message'] = 'Topic creato con successo!';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . 'php/index-topic.php');
        exit(); 
    } else {
        $name = $_POST['name'];
    } 
 
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
}

/* Delete Topics */ 
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Topic eliminato con successo!';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . 'php/index-topic.php');
    exit();
}

/* Update-Topics */
if (isset($_POST['update-topic'])) { 
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Topic modificato con successo!';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . 'php/index-topic.php');
        exit();  
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
    }

}



