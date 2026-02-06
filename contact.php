<?php
$message_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real scenario, you would send an email here using mail() or PHPMailer
    // $to = "info@rioholdings.lk";
    // $subject = "New Inquiry: " . $_POST['subject'];
    // $body = "Name: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\n\n" . $_POST['message'];
    // mail($to, $subject, $body);

    $message_sent = true;
}
?>
<?php include 'includes/header.php'; ?>

<div class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch for quotes, support, or general inquiries.</p>
    </div>
</div>

<section style="padding: 80px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 50px;">

            <!-- Contact Info -->
            <div>
                <h2 style="margin-bottom: 20px;">Get In Touch</h2>
                <div style="margin-bottom: 30px;">
                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fas fa-map-marker-alt"
                            style="font-size: 1.2rem; color: var(--secondary-blue); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4 style="margin-bottom: 5px;">Address</h4>
                            <p style="color: #666;">Sri Jayawardenepura Kotte,<br>Sri Lanka</p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fas fa-phone"
                            style="font-size: 1.2rem; color: var(--secondary-blue); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4 style="margin-bottom: 5px;">Phone / WhatsApp</h4>
                            <p style="color: #666;"><a href="tel:+94777100729">077 710 0729</a></p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start;">
                        <i class="fas fa-envelope"
                            style="font-size: 1.2rem; color: var(--secondary-blue); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4 style="margin-bottom: 5px;">Email</h4>
                            <p style="color: #666;"><a href="mailto:info@rioholdings.lk">info@rioholdings.lk</a></p>
                        </div>
                    </div>
                </div>

                <!-- Map Embed -->
                <div style="width: 100%; height: 300px; background-color: #eee; border-radius: 8px; overflow: hidden;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.803855984!2d79.8860268595717!3d6.92707938363878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593b4457e879%3A0x677b8e05fc8488e3!2sSri%20Jayawardenepura%20Kotte!5e0!3m2!1sen!2slk!4v1707123456789!5m2!1sen!2slk"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="card-box" style="padding: 40px;">
                <h2 style="margin-bottom: 20px;">Send a Message</h2>
                <?php if ($message_sent): ?>
                    <div
                        style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                        Thank you! Your message has been sent successfully. We will get back to you shortly.
                    </div>
                <?php endif; ?>
                <form action="contact.php" method="POST">
                    <div style="margin-bottom: 20px;">
                        <label for="name" style="display: block; margin-bottom: 8px; font-weight: 500;">Your
                            Name</label>
                        <input type="text" id="name" name="name" required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500;">Email
                            Address</label>
                        <input type="email" id="email" name="email" required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="subject"
                            style="display: block; margin-bottom: 8px; font-weight: 500;">Subject</label>
                        <select id="subject" name="subject"
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; background: white;">
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Quote Request">Request a Quote</option>
                            <option value="Service Booking">Book Maintenance</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="message"
                            style="display: block; margin-bottom: 8px; font-weight: 500;">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>