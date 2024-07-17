<!DOCTYPE html>
<html>

<head>
    <title>Fashion & style guide</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="menu1">
                <div class="header-menu">
                    <a href="#"><i class="fas fa-user-plus" style="color: white;"></i></a>
                    <i class="submenu fas fa-bars">
                        <ul class="menu-options">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Inscription</a></li>
                        </ul>
                    </i>
                </div>

                <div class="header-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>

            </div>

            <nav class="nav-one">
                <i onclick="showAndHideMenu()" class="icon fas fa-bars"></i>
                <ul class="nav-menu">
                    <li><a class="active" href="home.php">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">History & Features</a></li>
                    <li><a href="Fashionstyleguide.php">Fashion & Styling guide</a></li>
                    <li><a href="#">Lifestyle & fashion</a></li>
                    <li><a href="#">Designers</a></li>
                    <li><a href="#">Brands</a></li>
                </ul>
            </nav>


            <nav class="tablet-nav">
                <ul class="nav-list">
                    <i onclick="showAndHideMenus()" class="fas fa-bars"></i>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Designers</a></li>
                    <li><a href="#">Brands</a></li>
                </ul>
                <ol class="nav-menus">
                    <i onclick="showAndHideMenus()" class="fas fa-bars"></i>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Designers</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">History & Features</a></li>
                    <li><a href="#">Fashion & Styling guide</a></li>
                    <li><a href="#">Lifestyle & fashion</a></li>
                </ol>
            </nav>

        </div>
    </header>


    <?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'espace_membre';
    
    // Connexion à la base de données
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        die('Erreur de connexion à la base de données : ' . $conn->connect_error);
    }
    
    // Récupération des articles de la section "Featured Blog Post" de la page "Fashionstyleguide"
    $section = "Featured Blog Post";
    $page = "Fashionstyleguide";
    $sql = "SELECT * FROM articles WHERE section='$section' AND page='$page'";
    $result = $conn->query($sql);
    ?>

    <section class="blog-landing">
        <div class="container">
            <h3 class="sub-title"><?php echo $section; ?></h3>
            <?php
            while ($row = $result->fetch_assoc()) {
                $titre = $row['titre'];
                $contenu = $row['contenu'];
                $imagePath = $row['image'];
                $date = $row['date'];
            ?>
            <h1 class="main-title"><?php echo $titre; ?></h1>
            <p><?php echo $contenu; ?></p>
            <p>Date: <?php echo $date; ?></p>
            <?php
            }
            ?>
            <a href="#" class="btn">read more</a>
        </div>
    </section>

    <?php
    $conn->close();
    ?>


    <section class="blog-content-section">
        <div class="container">
            <div class="description">
                <h3 class="name">Hi, I'm Daniel</h3>
                <h2 class="job-desc">I am a Blockchain technology expert who writes about blockchain and its new trends
                </h2>
                <p class="history">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nunc pharetra nibh enim. Suspendisse potenti. Nullam
                    venenatis metus augue, et ullamcorper lorem consequat sit
                    amet. Sed ac odio elementum, hendrerit lacus eget, feugiat
                    ante. Quisque fermentum tempus pharetra. In semper ipsum
                    quis varius fermentum. Pellentesque aliquam elit molestie
                    lacinia imperdiet. In mi erat, condimentum vel elit vel,
                    mattis porttitor eros. Quisque suscipit gravida sem, eget
                    tincidunt ligula. Vivamus faucibus vulputate magna ac
                    aliquam. Pellentesque pulvinar tincidunt tortor,
                    sed finibus velit consequat scelerisque.
                </p>
                <a href="#" class="btn">more about me</a>
            </div>
            <div class="posts-section">
                <h2 class="title">Latest Blog Posts</h2>
                <div class="blog-posts">
                    <?php
        // Connexion à la base de données
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'espace_membre';

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
        if ($conn->connect_error) {
            die('Erreur de connexion à la base de données : ' . $conn->connect_error);
        }

        // Récupérer les articles de blog de la base de données avec la section "Latest Blog Posts"
        $section = "Latest Blog Posts";
        $sql = "SELECT * FROM articles WHERE section = 'Latest Blog Posts' ORDER BY date DESC ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $titre = $row['titre'];
                $date = $row['date'];
                $contenu = $row['contenu'];
                ?>

                    <div class="single-post">
                        <img src="espace_admin/uploads<?php echo $imagePath; ?>" alt="">
                        <div class="content">
                            <h3><?php echo $titre; ?></h3>
                            <div class="info">
                                <span class="date"><i class="fa fa-calendar"></i> <?php echo $date; ?></span>
                                <span class="comments"><i class="fa fa-comments"></i> No Comments</span>
                            </div>
                            <p><?php echo $contenu; ?></p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                    <?php
            }
        } else {
            echo "<p>Aucun article de blog trouvé.</p>";
        }

        $conn->close();
        ?>
                </div>
            </div>

    </section>

    <div class="ads-section">
        <div class="container">
            <div class="info">
                <div class="block">
                    <div class="line"></div>
                    <h2>Grow your crypto portfolio fast!</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nunc pharetra nibh enim. Suspendisse potenti.
                        Nullam venenatis metus augue, et ullamcorper lorem.
                    </p>
                    <a href="#" class="btn">Start Today</a>
                </div>
            </div>
            <div class="video">
                <a href="#" class="video-link"><i class="far fa-play-circle"></i></a>
            </div>
        </div>
    </div>

    <section class="blog-content-section blog-content-section2">
        <div class="container">
            <div class="posts-section">
                <h2 class="title">Blog Posts</h2>
                <div class="blog-posts">
                    <?php
                // Connexion à la base de données
                $dbHost = 'localhost';
                $dbUser = 'root';
                $dbPass = '';
                $dbName = 'espace_membre';

                $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
                if ($conn->connect_error) {
                    die('Erreur de connexion à la base de données : ' . $conn->connect_error);
                }

                // Récupérer les articles de blog de la base de données avec la section "Blog Posts"
                $section = "Blog Posts";
                $sql = "SELECT * FROM articles WHERE section = 'Blog Posts' ORDER BY date DESC ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $titre = $row['titre'];
                        $date = $row['date'];
                        $contenu = $row['contenu'];
                        ?>

                    <div class="single-post">
                        <img src="espace_admin/uploads<?php echo $imagePath; ?>" alt="">
                        <div class="content">
                            <h3><?php echo $titre; ?></h3>
                            <div class="info">
                                <span class="date"><i class="fa fa-calendar"></i> <?php echo $date; ?></span>
                                <span class="comments"><i class="fa fa-comments"></i> No Comments</span>
                            </div>
                            <p><?php echo $contenu; ?></p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                    <?php
                    }
                } else {
                    echo "<p>Aucun article de blog trouvé.</p>";
                }

                $conn->close();
                ?>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-container">
        <div class="container">
            <div class="footer-column">
                <h4>Catégories</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">History & Features</a></li>
                    <li><a href="#">Fashion & Styling guide</a></li>
                    <li><a href="#">Lifestyle & fashion</a></li>
                    <li><a href="#">Designers</a></li>
                    <li><a href="#">Brands</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Réseaux sociaux</h4>
                <ul>
                    <li><a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>Facebook</li>
                    <li><a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>Twitter</li>
                    <li><a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>Instagram</li>
                    <li><a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>Pinterest</li>

                </ul>
            </div>
            <div class="footer-column">
                <h4>Contactez-nous</h4>
                <p>Adresse : 123 rue Example, Ville, Pays</p>
                <p>Téléphone : +1 234 567 890</p>
                <p>Email : info@example.com</p>
            </div>
        </div>
        <div class="copyright">
            <ul>
                <h3> CopyRight &copy;Bendjeddou Nourhane</h3>
            </ul>
        </div>
    </footer>


</body>

</html>