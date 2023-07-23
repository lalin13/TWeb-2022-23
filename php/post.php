<?php include('path.php')?>
<?php include(ROOT_PATH . "/posts.php"); 
usersOnly();?>

<?php 
if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $post['title']; ?> | ProCurly</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Importo libreria per js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
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

<!-- Content Single Post starts -->
<section class="home-post clearfix">

    <div class="box-container single ">
        <h1 class="post-title"><?php echo $post['title']; ?></h1>

        <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
        </div>

        


    </div>


    <div class="sidebar single">
        
        <div class="section popular">
      <h2 class="section-title">Popular</h2>
    
      <?php $count = 0; ?>
      <?php foreach ($posts as $post): ?>
        <?php if ($count < 3): ?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '../blog/images/' . $post['image']; ?>" alt="">
            <a href="post.php?id=<?php echo $post['id']; ?>" class="title">
              <h4><?php echo $post['title']; ?></h4>
            </a>
          </div>
        <?php endif; ?>
        <?php $count++; ?>
      <?php endforeach; ?>
                
    </div>

        <div class="section topics">
            <h2 class="section-titile">Topics</h2>
            <ul>
                <?php foreach ($topics as $topic): ?>
                    <li><a href="<?php echo BASE_URL . 'php/index.php?topic_id=' . $topic['id'] . '&name' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                <?php endforeach; ?>
            </div>
    </div>

</section>
<!-- Content Single Post ends -->


<!--  swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- includo il file js -->
<script type="text/javascript" src="../js/script.js"></script>
<!-- includo il file footer -->
<?php include(ROOT_PATH . "/../php/footer.php") ?> 

</body>

</html>