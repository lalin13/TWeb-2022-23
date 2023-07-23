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
    <title>Admin Section- Edit Post</title>

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
    <script src="https://cdn.tiny.cloud/1/y287esejyiy2xr4p7wwvtgwt3sewkxgnd4yrjbe11dkaos2h/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="../js/editor.js"></script>
    
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

            <h2 class="page-title">Edit Post</h2>

            <?php include(ROOT_PATH . "/../php/formError.php") ?> 
            
            <form action="edit-post.php" method="post" enctype="multipart/form-data">
  
            <input type="hidden" name="id" value="<?php echo $id; ?>" class="text-input">

            <div>
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                </div>

                <div>
                    <label>Body</label>
                    <textarea id="myTextarea" name="body"><?php echo $body; ?>"</textarea>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image" class="text-input">
                </div>

                <div>
                    <label>Topics</label>
                    <select name="topic_id" class="text-input">
                        <option value=""></option>

                        <?php foreach ($topics as $key => $topic): ?>
                            <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select> 
                </div>

                <div>
                    <?php if (empty($published) && $published == 0): ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                        </label>
                    <?php endif; ?>

                </div>

                <div>
                    <button type="submit" name="update-post" class="btn">Update Post</button>
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