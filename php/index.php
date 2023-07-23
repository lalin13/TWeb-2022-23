<?php include('path.php');?>
<?php include(ROOT_PATH . "/topics.php");
usersOnly();?>

<?php 

$posts = array();
$postsTitle = 'Post';

if (isset($_GET['topic_id'])) {
    $posts = getPostsByTopicId($_GET['topic_id']);
    $postsTitle = "Hai cercato '" . $_GET['name'] . "'"; // controllo 
} else if (isset($_POST['search-term'])) {
    $postsTitle = "Hai cercato '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts(); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Importo libreria per js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    
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
<?php include(ROOT_PATH . "/../php/message.php") ?> 


<!-- Post-Slider strats -->
<div class="page-wrapper">
    <div class="post-slider">
        <h1 class="slider-title"> Trending Post</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>

        <div class="post-wrapper">

            <?php foreach ($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '../blog/images/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                        <i class="far fa-user"><?php echo $post['username']; ?></i>
                        &nbsp;
                        <i class="far fa calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>
<!-- Post-Slider ends -->
&nbsp;
<!-- Content starts -->
<section class="home-post clearfix">

    <div class="box-container">

        <h1 class="heading-title"><?php echo $postsTitle ?></h1>

        <?php foreach ($posts as $post): ?>
            <div class="box">
                <div class="image">
                    <img src="<?php echo BASE_URL . '../blog/images/' . $post['image']; ?>" alt="">
                </div>
                <div class="content">
                    <h3><?php echo $post['title']; ?></h3>
                    <i class="far fa-user"><?php echo $post['username']; ?></i>
                    <i class="far fa calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    <p><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></p>
                    <a href="post.php?id=<?php echo $post['id']; ?>" class="btn">Read More</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <div class="sidebar">
        <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.php" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search...">
            </form>
        </div>
        &nbsp;
        <div class="section topics">
            <h2 class="section-titile">Topics</h2>
            <ul>

                <?php foreach ($topics as $key => $topic): ?>
                    <li><a href="<?php echo BASE_URL . 'php/index.php?topic_id=' . $topic['id'] . '&name' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>

</section>
<!-- Content ends -->

<!-- Home About Us starts -->
<section class="home-about">
    <div class="image">
        <img src="../images/icon-1.png" >
    </div>
    
    <div class="content">
        <h3>About Us</h3>
        <p>Siamo convinti che ogni riccio sia unico e vogliamo incoraggiarti a celebrare la tua individualità.</p>
        <a href="about.php" class="btn">Read More</a>
</section>
<!-- Home About Us ends -->





<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!--  Swiper Js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Includo il file footer -->
<?php include(ROOT_PATH . "/../php/footer.php") ?> 

</body>

</html>