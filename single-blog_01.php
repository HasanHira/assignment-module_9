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
            <div class="blog-article--info single-blog-post">
                <span class="post_datetime">
                    <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo date("F j, Y, g:i a"); ?>
                </span>
                <div class="share-social-link">
                    <p>Share: </p>
                    <ul class="share-link" role="list">
					<li><a href="https://www.linkedin.com/in/hasanhira/" aria-label="linkedin_link"><img src="assets/images/icon-linkedin.svg" alt="Linkedin icon"></a></li>
					<li><a href="https://www.facebook.com/hz.hira" aria-label="facebook_link"><img src="assets/images/icon-facebook.svg" alt="Facebook icon"></a></li>
					<li><a href="https://github.com/HasanHira" aria-label="github_link"><img src="assets/images/icon-github.svg" alt="Github icon"></a></li>
				</ul>
                </div>
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
            <hr>

            <!-- single-post -->
            <div class="post-author">
                <h3 class="secondary-heading author-area-title">About author</h3>
                <div>
                    <div class="author-columns">
                        <div class="author-image">
                            <img src="assets/images/hasanhira-photo.jpg" alt="Myblog author">
                        </div>
                        <div class="author-details">
                            <h3>Md Hasanuzzaman Hira</h3>
                            <p>
                                Having 8+ years of great experience in graphic design & 4+ years in web design, In graphic design I am the expert in Brand Identity, Editorial, Pictorial design & templates. Also, I have a level of expertise in HTML5, CSS3, jQuery plugins integration, Bootstrap, SCSS. I have served many companies and person local-market and online marketplaces.<br /><br />

                                I am available for Consultancy, If you need I can share my best ideas about your Startup project and some tech insights before starting a project. From an eCommerce website to Blog, Business, Corporate, Portfolio, Startup you can just book a consultation with me to discuss further.
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
