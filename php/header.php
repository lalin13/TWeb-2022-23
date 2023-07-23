<!-- inzio sezione header -->


<section class="header">
        
  <a href="<?php echo BASE_URL . 'php/index.php'?>" class="logo">Pro Curly</a>

  <nav class="navbar">
    <a href="<?php echo BASE_URL . 'php/index.php' ?>">Home</a>
    <a href="<?php echo BASE_URL . 'php/about.php' ?>">About</a>
    <a href="<?php echo BASE_URL . 'php/feedback.php' ?>">Feedback</a>

    <?php if (isset($_SESSION['id'])): ?>

      <a href="#">
        <i class="fa fa-user"></i>
        <?php echo $_SESSION['username']; ?>  
      </a> 
      
      <div class="focus">
        <ul>
          <?php if($_SESSION['admin']): ?>
            <li><a href="<?php echo BASE_URL . 'php/dashboard.php'; ?>">Dashboard</a></li>
          <?php endif; ?>
          <li><a href="<?php echo BASE_URL . 'php/logout.php'; ?>">Logout</a></li> 
      </ul>       
      </div>


    <?php else: ?>

      <a href="<?php echo BASE_URL . 'php/register.php' ?>">Sign Up</a>
      <a href="<?php echo BASE_URL . 'php/login.php' ?>">Login Up</a>
      
    <?php endif; ?>

  </nav>

 
</section>

<!-- fine sezione header -->