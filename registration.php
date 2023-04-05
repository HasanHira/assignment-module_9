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

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = trim($_POST["fname"]);
        $email = trim($_POST["email"]);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        if(empty($fname) || empty($email) || empty($subject) || empty($message)) {
            echo "All fields are required and must not be empty.";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } else {; ?>

        <div class="container">
            <h2 class="sucess-text">
                <?php echo "Registration successful. Welcome, $fname!"; ?>
            </h2>
        </div>
            
        <?php
        }
        $user_data = [$fname, $email, $subject, $message];
        $fp = fopen('users.csv', 'a');
        fputcsv($fp, $user_data);
        fclose($fp);
    }
?>


</section>

</main>
<!-- main end -->

<?php
	include "assets/inc/footer-area.php";
?>
