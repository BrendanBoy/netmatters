<?php
$pageTitle = "Contact Us | Netmatters";
include("inc/header.php"); ?>


            <section id="breadcrumb">
                <div class="container">
                Home / Our Offices
                </div>
            </section>
            <section id="office-addresses">
                <div class="container">
                <h1>Our Offices</h1>
                </div>
            </section>
            <section id="contact-details">
                <div class="container">
                    <div>
                    <p>Email us on:</p>
                    <p>sales@netmatters.com</p>
                    <p>Business hours:</p>
                    <p>Monday - Friday 07:00 - 18:00</p>
                    <p>Out of Hours IT Support</p>
                    </div>
                    <div>
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks</p>
                        <p>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00</p>
                        <p>Sunday 10:00 - 18:00</p>
                        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="container">
                <form id="contact-form" action="contact-us.php" method="post">
                    <label for="contactName">Your Name <span class="asterisk">*</span></label>
                    <input class="form-control" type="text" name="contactName" id="contactName">
                    <label for="contactCompany">Company Name</label>
                    <input class="form-control" type="text" name="contactCompany" id="contactCompany">
                    <label for="contactEmail">Your Email <span class="asterisk">*</span></label>
                    <input class="form-control" type="email" name="contactEmail" id="contactEmail">
                    <label for="contactTelephone">Your Telephone Number <span class="asterisk">*</span></label>
                    <input class="form-control" type="tel" name="contactTelephone" id="contactTelephone">
                    <label for="contactSubject">Subject <span class="asterisk">*</span></label>
                    <input class="form-control" type="text" name="contactSubject" id="contactSubject">
                    <label for="contactMessage">Message <span class="asterisk">*</span></label>
                    <input class="form-control" type="text" name="contactMessage" id="contactMessage">
                    <div class="form-check ms-2 mb-3">
                                <input type="checkbox" class="form-check-input" value="" id="marketing">
                                <label for="marketing" class="form-check-label">Please tick this box if you want to receive
                                    marketing information from us. Please see our <a href="#">Privacy Policy</a> for more
                                    information on how we use your data.</label>
                            </div>
                            <button type="submit" class="btn btn-design">Subscribe</button>
                </form>
                </div>
            </section>

<?php include("inc/footer.php"); ?>