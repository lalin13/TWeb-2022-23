<?php 

function usersOnly($redirect = 'php/register.php'){
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = 'Devi fare il login';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function adminOnly($redirect = 'php/index.php'){
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['message'] = 'Non sei autorizzato';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function guestOnly($redirect = 'php/index.php'){
    if (isset($_SESSION['id'])) {
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

?>