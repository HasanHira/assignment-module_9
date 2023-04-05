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
                <img src="assets/images/single-blog-img_02.jpg" alt="computer">
            </div>
            <h2 class="primary-heading">Robots can be divided into different categories based on their functionss</h2>
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
                Robotics is an interdisciplinary field of science and technology that involves designing, constructing, and operating robots. A robot is a machine that can be programmed to perform a wide range of tasks automatically, and it can be controlled either autonomously or by a human operator. Robotics has revolutionized various industries, including manufacturing, healthcare, and agriculture, by improving productivity, efficiency, and safety.
            </p>
            <p>
                The development of robotics has been driven by advances in computer science, electronics, and artificial intelligence. The use of sensors and algorithms allows robots to interact with their environment, sense their surroundings, and make decisions based on the data they collect. This technology has enabled robots to perform tasks that were previously difficult or impossible for humans, such as exploring space or performing surgeries.
            </p>
            <p>
                Robots can be divided into different categories based on their functions, including industrial robots, medical robots, service robots, and military robots. Industrial robots are used in manufacturing to automate repetitive tasks and improve efficiency, while medical robots are used to perform surgeries with greater precision and accuracy. Service robots are designed to assist humans in daily tasks, such as cleaning and cooking, while military robots are used for reconnaissance, surveillance, and combat.
            </p>
            <p>
                The potential of robotics is vast, and the field is constantly evolving. The integration of robotics with other emerging technologies, such as 5G networks, machine learning, and augmented reality, is expected to open up new possibilities for innovation and growth. As robots become more advanced and affordable, they have the potential to transform many aspects of our daily lives.
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
