<?php include("path.php")?>
<?php include(ROOT_PATH . "/users.php"); 
usersOnly();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- custom js file link -->
    <script type="text/javascript" src="../js/script.js"></script>

    <!-- Favicon link -->
    <link rel="icon" type="image/png" href="../images/icon.png">
   
</head>
<body>

<!-- includo il file header -->
<?php include(ROOT_PATH . "/../php/header.php") ?> 

<div class="heading" style="background: url(../images/header-bg.png)">
    <h1>about us</h1>
</div>

<!-- About Us starts -->

<section class="about">

<div class="image">
    <img src="../images/icon-1.png" alt="">
</div>

<div class="content">
    <h3>Chi Siamo</h3>
    <p>Benvenuti nel nostro entusiasmante mondo dedicato ai capelli ricci! Se hai i capelli naturalmente ricci o stai cercando di scoprire come prenderti cura dei tuoi ricci, sei nel posto giusto. Qui troverai una fonte di ispirazione, consigli pratici e informazioni preziose per sfruttare al massimo la bellezza e la versatilità dei tuoi capelli ricci.
    <p>Sappiamo che i capelli ricci possono essere un dono meraviglioso, ma a volte possono sembrare un po' capricciosi. Il nostro obiettivo è aiutarti a imparare a lavorare in armonia con i tuoi ricci, scoprendo i migliori prodotti, gli strumenti di styling più efficaci e le tecniche di cura che ti faranno innamorare dei tuoi capelli ogni giorno.</p>
</p>

</div>
</section>

<!-- About Us ends -->

<!--  swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- includo il file js -->
<script type="text/javascript" src="../js/script.js"></script>
<!-- includo il file footer -->
<?php include(ROOT_PATH . "/../php/footer.php") ?> 

</body>

</html>