<?php
	$page_title = "Single Blog Page";
	include "assets/inc/header-area.php";
?>

<!-- main start -->
<main>

    <section class="page-head">
        <div class="container">
            <h1 class="hero-heading"><?php echo $page_title; ?></h1>
            <p class="bradcrumb-text">Home / Blog Page / <a href="blog.php"><?php echo $page_title; ?></a></p>
        </div>
    </section>

    <!-- blog post start -->
    <section class="single-blog-post section-padding-60">
        <div class="container">
            <div class="single-blog-image">
                <img src="assets/images/single-blog-img_01.jpg" alt="computer">
            </div>
            <h2 class="primary-heading">Programming requires a unique set of skills</h2>
            <div class="blog-article--info single-post">
                <span class="post_datetime">
                    <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo date("F j, Y, g:i a"); ?>
                </span>
            </div>
            <p>
                Programming is the process of designing, coding, testing, and debugging software or applications. It is an essential skill in today's world, as it is used in many different industries and applications. Programming requires a unique set of skills, including logical thinking, problem-solving, and communication.
            </p>
            <p>
                There are many different programming languages, each with its own syntax, rules, and requirements. Some of the most popular programming languages include Python, Java, C++, and JavaScript. Each language has its own unique features, and it is essential for programmers to understand the strengths and weaknesses of each language.
            </p>
            <p>
                Programming can lead to many exciting and rewarding career opportunities. In the healthcare industry, programming is used to develop applications that can help diagnose and treat diseases. In the finance industry, programming is used to create algorithms that can predict stock prices and make investment decisions. In the education industry, programming is used to develop educational software that can help students learn more effectively.
            </p>
            <p>
                Learning to program is not an easy task, and it requires a significant amount of time, effort, and dedication. However, there are many resources available to help people learn how to program, including online courses, tutorials, and books. With the right mindset and dedication, anyone can learn to program and open up a world of exciting opportunities.
            </p>
            <div class="blog-article--info">
                <span class="post_author_name">Hasan Hira </span>
            </div>

            <!-- single-post -->
            <div class="blog-post">
                <div class="even-columns">
                <h2 class="primary-heading">Latest posts</h2>
                    
                </div>
            </div>
        </div>
    </section>

</main>
<!-- main end -->

<?php
	include "assets/inc/footer-area.php";
?>
