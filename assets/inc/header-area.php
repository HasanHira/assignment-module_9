<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/images/favicon-myblog.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon-myblog.png">

	<!-- Google fonts -->
	<!-- Outfit -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;700&display=swap" rel="stylesheet">

	<!-- Nunito -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

	<title><?php echo $page_title; ?> | MyBlog</title>
</head>
<body>
	<!-- header start -->
	<header>
        <div class="container">
            <div class="header--area">
                <a class="header-logo" href="index.php">
                    <img src="assets/images/logo-myblog.svg" alt="" >
                </a>
                <!-- main navigation -->
                <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
                    <span class="visually-hidden">Menu</span>
                </button>
                <nav class="primary-navigation" id="primary-navigation">
                    <ul class="main-menu" role="list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
	<!-- header end -->