<?php include('path.php');?>
<?php include(ROOT_PATH . "/users.php");
guestOnly();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Importo libreria per js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- Custom css file link -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Custom js file link -->
    <script type="text/javascript" src="../js/script.js"></script>

    <!-- Favicon link -->
    <link rel="icon" type="image/png" href="../images/icon.png">
       
</head>
<body>

<!-- includo il file header -->
<?php include(ROOT_PATH . "/../php/header.php") ?> 

<div class="auth-content">
    <form action="register.php" method="post">
        <h2 class="form-title">Register</h2>

        <?php include(ROOT_PATH . "/../php/formError.php") ?> 


        <div>
            <label>Username</label>
            <input type="text" name="username"  value="<?php echo $username; ?>" class="text-input">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>"class="text-input">
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
            <button type="submit" name="register-btn" class="btn">Register</button>
        </div>
        <br>
        <p>Or <a href="<?php echo BASE_URL . '/../php/login.php'?>">Sing In</a></p>
         
    </form>
</div>





<!--  Swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Includo il file footer -->
<?php include(ROOT_PATH . "/../php/footer.php") ?> 

</body>

</html>