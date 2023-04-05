<?php
	$page_title = "Welcome Page";
	include "assets/inc/header-area.php";
?>

<!-- main start -->
<main>

    <section class="page-head">
        <div class="container">
            <h1 class="hero-heading"><?php echo $page_title; ?></h1>
        </div>
    </section>

    <section class="welcome-area">
        <div class="container">
            <h2 class="sucess-text">
                <?php echo "Loged in successful. Welcome! {$_GET["fname"]}"; ?>
            </h2>
        </div>        
    </section>

</main>
<!-- main end -->

<?php
	include "assets/inc/footer-area.php";
?>
