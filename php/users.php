<?php //per register

include(ROOT_PATH . "/db.php");
include(ROOT_PATH . "/validateUser.php");
include(ROOT_PATH . "/middleware.php"); 

$table = 'users';
$admin_users = selectAll($table);

$errors = array();
$id = '';
$username = '';
$admin = '';
$email = '';
$password = '';
$passwordConf = '';

function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Ora sei loggato!';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']){
            header('location: ' . BASE_URL . 'php/dashboard.php');
    }else{
        header('location: ' . BASE_URL . 'php/index.php');
    }
    exit();
}

if(isset($_POST['register-btn']) || isset($_POST['create-admin'])){
    $errors = validateUsers($_POST);

    //mostrare errore: dd($errors); 

    if(count($errors) === 0){
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = 'Admin creato con successo';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . 'php/dashboard.php');
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);

            loginUser($user); // come cambiare
        }
    } else { // NO 
            $username = $_POST['username'];
            $admin = isset($_POST['admin']) ? 1 : 0;
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
        }
    }

if (isset($_POST['update-user'])) {
    adminOnly();
    $errors = validateUsers($_POST);

    //mostrare errore: dd($errors); 

    if(count($errors) === 0){
        $id = $_POST['id'];
        unset($_POST['passwordConf'], $_POST['update-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = 'Account creato con successo';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . 'php/index-user.php');
        exit();
    } else {
            $username = $_POST['username'];
            $admin = isset($_POST['admin']) ? 1 : 0;
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
        }
    
}

if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $admin = isset($user['admin']) ? 1 : 0;
    $email = $user['email'];
}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errors, 'Credenziali errate');
        }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'Account eliminato con successo';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . 'php/index-user.php');
    exit();
}

?>
