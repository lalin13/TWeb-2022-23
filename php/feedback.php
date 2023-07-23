<?php include('path.php');?>
<?php include(ROOT_PATH . "/topics.php");
usersOnly();?>

<?php 

$posts = array();
$postsTitle = 'feedback';

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
    <script type="text/javascript" src="../js/feedback.js"></script>

    <!-- Favicon link -->
    <link rel="icon" type="image/png" href="../images/icon.png">
       
</head>
<body>

    <!-- includo il file header -->
    <?php include(ROOT_PATH . "/../php/header.php") ?> 
    <?php include(ROOT_PATH . "/../php/message.php") ?> 

    <!-- Feedback starts -->
    <section class="home-post clearfix">

        <div class="box-container">

            <h1 class="heading-title"><?php echo $postsTitle ?></h1>

            <h2>Lascia il tuo Feedback</h2>
            <form method="post" id="feedback_form">
            
            <input type="hidden" name="name" id="name" value="<?= $_SESSION['username']; ?>">
            
            
                
                <label for="rating">Valutazione:</label>
                &nbsp;
                <select name="rating" id="rating"  required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br><br>
                
                <label for="comment">Commento:</label>
                &nbsp;
                <textarea name="comment" id="comment" required></textarea>
                <br><br>
                
                <input type="submit" name="create_comm" id="create_comm" class="btn-feedback" value="Pubblica">

            </form>


            <h1></h1>	
                        <div class="all_comments_by_post">						
                    
                            <div class="comment_box" id="show_feedback"></div><!--Mostro i feedback pubblicati-->
                        </div>

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







    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--  Swiper Js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Includo il file footer -->
    <?php include(ROOT_PATH . "/../php/footer.php") ?> 

   
</body>

</html>