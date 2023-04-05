<?php
	$page_title = "Blog Page";
	include "assets/inc/header-area.php";
?>

<!-- main start -->
<main>

    <section class="page-head">
        <div class="container">
            <h1 class="hero-heading"><?php echo $page_title; ?></h1>
            <p class="bradcrumb-text">Home / <a href="blog.php"><?php echo $page_title; ?></a></p>
        </div>
    </section>

    <!-- feature post start -->
    <section class="feature-posts section-padding-60">
        <div class="container two-part">
            <div class="side-bar">
                <h3 class="search-heading">Search:</h3>
                <form class="search-blog" action="#">
                    <input type="search" name="s" placeholder="Search...">
                </form>
                <h3 class="search-heading">Categories List:</h3>
                <ul class="categories" role="list">
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Robotics</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Ostad</a></li>
                </ul>
            </div>
            
            <!-- main content -->
            <div>
                <div class="block-column">
                    <div class="section-title--center">
                        <h2 class="primary-heading">Latest posts</h2>
                    </div>
                </div>

                <!-- single-post -->
                <div class="blog-post single-blog">
                    <div class="even-columns single-post">
                        <div class="blog-media blog-media--01"></div>
                        <div class="blog-details">
                            <h3 class="blog-article--title">Programming requires a unique set of skills</h3>
                            <div class="blog-article--info">
                                <span class="post_datetime">
                                    <?php 
                                    date_default_timezone_set("Asia/Dhaka");
                                    echo date("F j, Y, g:i a"); ?>
                                </span>
                                <span class="post_author_name">Hasan Hira </span>
                            </div>
                            <p class="blog-article--text">
                                Programming is the process of designing, coding, testing, and debugging software or applications. It is an essential skill in today's world, as it is used in many different industries and applications. <a class="button read-more-btn" href="single-blog_01.php">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
                

                <!-- single-post -->
                <div class="blog-post single-blog">
                    <div class="even-columns single-post">
                        <div class="blog-media blog-media--02"></div>
                        <div class="blog-details">
                            <h3 class="blog-article--title">Robots can be divided into different categories based on their functions</h3>
                            <div class="blog-article--info">
                                <span class="post_datetime">
                                    <?php 
                                    date_default_timezone_set("Asia/Dhaka");
                                    echo date("F j, Y, g:i a"); ?>
                                </span>
                                <span class="post_author_name">Hasan Hira </span>
                            </div>
                            <p class="blog-article--text">
                                Robotics is an interdisciplinary field of science and technology that involves designing, constructing, and operating robots. A robot is a machine that can be programmed to perform a wide range of tasks automatically. <a class="button read-more-btn" href="single-blog_02.php">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- single-post -->
                <div class="blog-post single-blog">
                    <div class="even-columns single-post">
                        <div class="blog-media blog-media--03"></div>
                        <div class="blog-details">
                            <h3 class="blog-article--title">Music is a universal language that has the power to bring people together</h3>
                            <div class="blog-article--info">
                                <span class="post_datetime">
                                    <?php 
                                    date_default_timezone_set("Asia/Dhaka");
                                    echo date("F j, Y, g:i a"); ?>
                                </span>
                                <span class="post_author_name">Hasan Hira </span>
                            </div>
                            <p class="blog-article--text">
                            Music is an art form that has been an integral part of human culture for centuries. It has the ability to express emotions, connect people from different backgrounds, and transcend language barriers. <a class="button read-more-btn" href="single-blog_03.php">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
<!-- main end -->

<?php
	include "assets/inc/footer-area.php";
?>