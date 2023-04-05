<?php
	$page_title = "Homepage";
	include "assets/inc/header-area.php";
?>

	<!-- main start -->
	<main>

		<!-- hero area start -->
		<section class="hero-area">
			<div class="container">
				<div class="even-columns">
					<div class="left-column hero-section--myblog">
						<h1 class="hero-heading">This is <span>MyBlog </span>to tell you <span>success</span> stories.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum recusandae consequatur debitis laudantium, deserunt animi.</p>
						<a class="button hero-btn" role="button" href="blog.php">view blogs</a>
					</div>
					<div class="hero-section--myblog--img">
						<img src="assets/images/section-img-hero.svg" alt="myblog hero image" class="section-img">
					</div>
				</div>
			</div>
		</section>
		<!-- hero area end -->

		<!-- feature post start -->
		<section class="feature-posts section-padding-60">
			<div class="container">
				<div class="block-column">
					<div class="section-title--center">
						<h2 class="primary-heading">featured posts</h2>
					</div>
				</div>

				<!-- single-post -->
				<a href="blog.php" class="blog-post single-blog">
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
								Programming is the process of designing, coding, testing, and debugging software or applications. It is an essential skill in today's world, as it is used in many different industries and applications.
							</p>
						</div>
					</div>
				</a>
				

				<!-- single-post -->
				<a href="blog.php" class="blog-post single-blog">
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
								Robotics is an interdisciplinary field of science and technology that involves designing, constructing, and operating robots. A robot is a machine that can be programmed to perform a wide range of tasks automatically.
							</p>
						</div>
					</div>
				</a>

				<!-- single-post -->
				<a href="blog.php" class="blog-post single-blog">
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
								Music is an art form that has been an integral part of human culture for centuries. It has the ability to express emotions, connect people from different backgrounds, and transcend language barriers.
							</p>
						</div>
					</div>
				</a>

			</div>
		</section>
		<!-- feature post end -->

	</main>
	<!-- main end -->

<?php
	include "assets/inc/footer-area.php";
?>

