<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/users.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section- Add Users</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Importo libreria per js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- Custom css file link -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Custom css admin file link -->
    <link rel="stylesheet" href="../css/admin.css">

    <!-- Custom js file link -->
    <script type="text/javascript" src="../../js/script.js"></script>

    <!-- Favicon link -->
    <link rel="icon" type="image/png" href="../images/icon.png">
       
</head>
<body>

<!-- includo il file header -->
<?php include(ROOT_PATH . '/header-admin.php') ?> 

<!-- Admin Page Wrapper strats -->
<div class="admin-wrapper">
    
    <?php include(ROOT_PATH . '/admin-slider.php') ?> 

    <!-- Admin Content starts -->
    <div class="admin-content">
        <div class="button-grup">
            <a href="create-user.php" class="btn">Add User</a>
            <a href="index-user.php" class="btn">Manage Users</a>
        </div>

        <div class="content">

            <h2 class="page-title">Edit User</h2>

            <?php include(ROOT_PATH . "/../php/formError.php") ?> 
            
            <form action="edit-user.php" method="post">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                </div>

                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                </div>

                <div>
                    <label>Password Confirmation</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                </div>

                <div>
                    <?php if (isset($admin) && $admin == 1): ?>
                        <label>                       
                            <input type="checkbox" name="admin" checked>    
                            Admin
                        </label>
                    <?php else: ?>
                        <label>                       
                            <input type="checkbox" name="admin">    
                            Admin
                        </label>

                    <?php endif; ?>
                       
                </div>


                <div>
                    <button type="submit" name="update-user" class="btn">Update User</button>
                </div>

            </form>

        </div>
    </div>
    <!-- Admin Content ends -->

</div>
<!-- Post-Slider ends -->






<!-- Ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<!--  Swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</body>

</html>