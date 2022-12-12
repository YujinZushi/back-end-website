<header>
    <div class="container">
        <a href="index.php" class="logo"><img src="img/music.png" alt=""></a>
        <nav>
            <a href="index.php">Главная</a>
            <a href="page1.php">House</a>
            <a href="page2.php">Garage</a>
            <a href="page3.php">Breakbeat</a>
            <a href="page4.php">Ambient & Lo-Fi</a>
            <a href="forum.php">Форум</a>

            <!-- BUrger menu -->

            <div id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
        <div class="account">
            <a href="/auth.php">
                <?php 
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user']['nickname'];
                }
                else {
                    echo 'Войти';
                }?>
            </a>
        </div>
    </div>

    <ul id="nav">
        <li><a href="index.php">Главная</a></li>
        <li><a href="page1.php">House</a></li>
        <li><a href="page2.php">Garage</a></li>
        <li><a href="page3.php">Breakbeat</a></li>
        <li><a href="page4.php">Ambient & Lo-Fi</a></li>
        <li><a href="forum.php">Форум</a></li>
    </ul>

</header>