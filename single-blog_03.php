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
                <img src="assets/images/single-blog-img_03.jpg" alt="computer">
            </div>
            <h2 class="primary-heading">Music is a universal language that has the power to bring people together</h2>
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
                Music is an art form that has been an integral part of human culture for centuries. It has the ability to express emotions, connect people from different backgrounds, and transcend language barriers. Whether it’s classical, jazz, pop, or rock, music has the power to move people in ways that words alone cannot.
            <p>
                Music is not only enjoyable, but it has also been shown to have therapeutic benefits. It can help reduce stress, improve mood, and enhance cognitive function. Music therapy is used in hospitals, schools, and rehabilitation centers to help individuals with a variety of conditions, such as anxiety, depression, and autism.
            </p>
            <p>
                In addition to its therapeutic benefits, music has also been a driving force for social change. Throughout history, musicians have used their music to spread messages of peace, love, and unity. From Bob Dylan’s “Blowin’ in the Wind” to Marvin Gaye’s “What’s Going On,” music has served as a powerful tool for activism and social justice.
            </p>
            <p>
                Music is a universal language that has the power to bring people together, heal, and inspire change. It is an essential part of the human experience and will continue to be so for generations to come.
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
