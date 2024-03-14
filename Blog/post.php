<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWAT Blog</title>
    <!-- linking to stylesheet -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style2.css">
    <!-- ------------------- font awesome -----------------  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <!-- ------------------- GOOGLE FONTS ---------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- ---------------- Navigation Panel ------------------------ -->
    <nav>
        <div class="container nav__container">
            <a href="index2.html" class="nav__logo">S.W.A.T blog</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="..\index.html" target="_blank">Contact</a></li>
                <li><a href="signin.html">Sign In</a></li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="images/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close__nav-btn"><i class="fa-solid fa-x"></i></button>
        </div>
    </nav>

    <!-- -------------------------------------------------- POST BODY --------------------------------------------------- -->

    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, dolorum?</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="images/avatar3.jpg" alt="">
                </div>
                <div class="post__author-info">
                    <h5>By: John Mills</h5>
                    <small>April 13, 2024</small>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="images/blog33.jpg" >
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ipsum facere optio vitae,
                 quidem ullam qui cum sed fugit harum et animi voluptatem doloremque eius repellendus.
                 Dolore quibusdam ut dolorem aperiam debitis inventore? Est quas animi ullam asperiores nesciunt itaque?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ipsum facere optio vitae,
                 quidem ullam qui cum sed fugit harum et animi voluptatem doloremque eius repellendus.
                 Dolore quibusdam ut dolorem aperiam debitis inventore? Est quas animi ullam asperiores nesciunt itaque?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Quas libero sunt, eius modi ex voluptatem impedit error 
                 doloremque eveniet aut quos molestias voluptates culpa nihil expedita neque illum veritatis? Voluptatem amet molestiae architecto reprehenderit unde perferendis fugit,
                  accusantium animi
                 vitae est numquam iure, quos impedit soluta suscipit dolores quisquam accusamus minima quasi laborum fuga? Dicta nobis optio sequi aliquid ad.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ipsum facere optio vitae,
                 quidem ullam qui cum sed fugit harum et animi voluptatem doloremque eius repellendus.
                 Dolore quibusdam ut dolorem aperiam debitis inventore? Est quas animi ullam asperiores nesciunt itaque?
            </p>
        </div>
    </section>

    <footer>
        <div class="footer__socials">
            <a href="https://www.linkedin.com/in/swatwa-kathane/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.linkedin.com/in/swatwa-kathane/" target="_blank"><i class="fa-brands fa-square-github"></i></a>
            <a href="https://www.linkedin.com/in/swatwa-kathane/" target="_blank"><i class="fa-solid fa-user"></i></a>
            <a href="https://www.linkedin.com/in/swatwa-kathane/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/swatwa-kathane/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Arts</a></li>
                    <li><a href="">Food</a></li>
                    <li><a href="">Wilf Life</a></li>
                    <li><a href="">Tech</a></li>
                    <li><a href="">Music</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online support</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                    <li><a href="">Custom Message</a></li>
                </ul>
            </article>

            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Categories</a></li>
                    <li><a href="">Services</a></li>
                </ul>
            </article>

            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; SWAT Blog - Swatwa Kathane</small>
        </div>
    </footer>


    <script src="main.js"></script>

</body>
</html>