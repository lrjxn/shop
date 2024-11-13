<footer id="colophon" class="site-footer">



    <div class="bg-primary text-white pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">



<style>
.footer-contact-form {
    border-radius: 8px;
}

.footer-contact-form h3 {
    margin-bottom: 15px;
}

.footer-contact-form label {
    display: block;
    margin-bottom: 5px;
}

.footer-contact-form input,
.footer-contact-form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.footer-contact-form button {
    background-color: #0073aa;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.footer-contact-form button:hover {
    background-color: #005c8c;
}

.footer-contact-form .success-message {
    color: green;
}

.footer-contact-form .error-message {
    color: red;
}
</style>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = "All fields are required.";
    } elseif (!is_email($email)) {
        $error_message = "Please enter a valid email address.";
    } else {
        // Send the email
        $to = get_option('admin_email'); // Sends to the WordPress admin email
        $subject = "Contact Form Submission from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . $name . ' <' . $email . '>',
        );

        // Use WordPress' mail function to send the email
        if (wp_mail($to, $subject, $body, $headers)) {
            $success_message = "Thank you for reaching out! We'll get back to you shortly.";
        } else {
            $error_message = "There was an error sending your message. Please try again later.";
        }
    }
}
?>

<!-- HTML Form -->
<div class="footer-contact-form">
    <h3>Kirjuta meile</h3>

    <?php if (!empty($success_message)): ?>
        <div class="success-message"><?php echo esc_html($success_message); ?></div>
    <?php elseif (!empty($error_message)): ?>
        <div class="error-message"><?php echo esc_html($error_message); ?></div>
    <?php endif; ?>

    <form action="" method="post">
        <p>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="<?php echo isset($email) ? esc_attr($email) : ''; ?>" />
        </p>
        <p>
            <label for="message">Sõnum:</label>
            <textarea id="message" name="message" required><?php echo isset($message) ? esc_textarea($message) : ''; ?></textarea>
        </p>
        <p>
            <button type="submit">Saada sõnum</button>
        </p>
    </form>
</div>
</div>




<div class="footer-social-media col-md-3">


<style>
.footer-social-media {
    text-align: center;
}

.footer-social-media .social-icons {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.footer-social-media .social-icons li {
    display: inline-block;
}

.footer-social-media .social-icons a {
    display: inline-block;
    width: 48px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    background-color: #0073aa;
    color: #fff;
    border-radius: 50%;
    transition: background-color 0.3s;
}

.footer-social-media .social-icons a:hover {
    background-color: #005c8c;
}
</style>


    <h3>Jälgi meid</h3>
    <ul class="social-icons">
        <li><a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="bi bi-twitter"></i></a></li>
        <li><a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a></li>
    </ul>
</div>





                <div class="col-md-4 ms-auto">
                    <?php dynamic_sidebar('footer-widget-col-three');?>
                </div>
            </div>
        </div>
    </div>



    <div class="container pt-2 pb-2">
        <div class="row d-flex align-items-center">
            <div class="col">
                <p>&copy; <?php bloginfo( 'name' );?> <?php echo date('Y'); ?> / Created by <a href="link" target="_blank">lrjxn</a></p>
            </div>
            <div class="col h-25 d-inline-block text-end">
                <img src="<?php echo get_template_directory_uri();?>/img/payment.png" class="img-fluid" loading="lazy" alt="...">
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
