<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section- Magage Posts</title>

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
    <script type="text/javascript" src="../js/script.js"></script>

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
            <a href="create-post.php" class="btn">Add Post</a>
            <a href="index-post.php" class="btn">Manage Posts</a>
        </div>

        <div class="content">

            <h2 class="page-title">Manage Posts</h2>

            <?php include(ROOT_PATH . "/../php/message.php") ?> 

            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th colspan="3">Action</th>
                </thead>

                <tbody>
                    <?php foreach ($posts as $key => $post): ?>
                    <tr>
                        <td><?php echo $key +1; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><a href="edit-post.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                        <td><a href="edit-post.php?del_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                        
                        <?php if ($post['published']): ?>
                            <td><a href="edit-post.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a></td>
                        <?php else: ?>
                            <td><a href="edit-post.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a></td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach?>
                   
                </tbody> 

            </table>

        </div>
    </div>
    <!-- Admin Content ends -->

</div>
<!-- Post-Slider ends -->







<!--  Swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</body>

</html>