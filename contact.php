<?php
	$page_title = "Contact Page";
	include "assets/inc/header-area.php";
?>

<!-- main start -->
<main>

    <section class="page-head">
        <div class="container">
            <h1 class="hero-heading"><?php echo $page_title; ?></h1>
            <p class="bradcrumb-text">Home / <a href="contact.php"><?php echo $page_title; ?></a></p>
        </div>
    </section>

    <section class="contact-page section-padding-60">
        <div class="container">
            <div class="even-columns">
                <div class="contact-details-text">
                    <h2 class="primary-heading">Contact Details:</h2>
                    <p><span>Address: </span> Dorbarsharifroad, konapara, jatrabari, dhaka</p>
                    <p><span>Mobile: </span> 01922327879</p>
                    <p><span>Email: </span> hasanhira.me@gmail.com</p>
                </div>
                <div class="contact-form-area">
                    <form action="registration.php" method="post">
                        <label for="full-name">Name: <span>*</span></label>
                        <input type="text" name="fname" id="fname" placeholder="Your full name" required>
                        <label for="eamil">Email: <span>*</span></label>
                        <input type="email" name="email" id="eamil" placeholder="Enter your email" required>
                        <label for="subject">Subject: <span>*</span></label>
                        <input type="text" name="subject" id="subject" placeholder="Message about" required>
                        <label for="message">Message: <span>*</span></label>
                        <textarea name="message" id="message" rows="5" placeholder="Your message here..."></textarea>
                        <button type="submit" value="submit">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </section>

</main>
<!-- main end -->

<?php
	include "assets/inc/footer-area.php";
?>