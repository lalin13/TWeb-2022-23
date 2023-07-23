<!-- inzio sezione header -->

<section class="header">
        
        <a href="<?php echo BASE_URL . '/php/index.php'; ?>" class="logo">Pro Curly</a>

        <nav class="navbar">
            <?php if (isset($_SESSION['username'])): ?>
                <a href="index.php">Publish</a>
                <a href="<?php echo BASE_URL . 'php/dashboard.php'; ?>"><?php echo $_SESSION['username']; ?></a>

                <div class="focus">
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/php/logout.php' ?>" class="logout">logout</a></li>
                    </ul>
                </div>
            <?php endif; ?>            
        </nav>

    </section>

    <!-- fine sezione header -->