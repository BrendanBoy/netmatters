<?php
require("inc/functions.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $your_name = trim(filter_input(INPUT_POST, 'your_name', FILTER_SANITIZE_STRING));
    $company_name = trim(filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    $telephone = trim(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING));
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    $error_message = [];
    if (empty($your_name)) {
        $error_message[] = "The name field is required.";
    }
    if (empty($telephone)) {
        $error_message[] = "The telephone field is required.";
    } elseif (!preg_match("/^(?:0|\+?44)(?:\d\s?){9,10}$/", $telephone)) {
        $error_message[] = "The telephone format is invalid.";
    }
    if (empty($email)) {
        $error_message[] = "The email field is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message[] = "The email format is invalid.";
    }
    if (empty($subject)) {
        $error_message[] = "The subject field is required.";
    }
    if (empty($message)) {
        $error_message[] = "The message field is required.";
    } elseif (strlen($message) < 6) {
        $error_message[] = "The message must be at least 5 characters.";
    }
    if (empty($error_message)) {
        if(add_contact($your_name, $company_name, $email, $telephone, $subject, $message)) {
            $success_message = "Your message has been sent.";
        } else {
            $error_message[] = "Could not deliver your message.";
        }
    }
}

$pageTitle = "Contact Us | Netmatters";

include("inc/header.php");

?>


            <section id="breadcrumb">
                <div class="container">
                <a href="./"><strong>Home</strong></a> / Our Offices
                </div>
            </section>

            <section id="page-title">
                <div class="container">
                    <h1>Our Offices</h1>
                </div>
            </section>

            <section id="office-cards">
                <div class="container">
                    
                    <div class="row mb-4">

                        <div class="col-lg-4 pt-4">
                            <div class="office-card card h-100">
                                <div class="image-container">
                                    <a href="#"><img src="img/offices/cambridge.jpg" class="card-img-top" alt=""></a>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title">
                                        <a href="#">Cambridge Office</a>
                                    </h3>
                                    <address class="card-text">
                                        Unit 1.28,<br>
                                        St John's Innovation Centre,<br>
                                        Cowley Road,<br>
                                        Cambridge,<br>
                                        CB4 0WS<br>
                                    </address>
                                    <span class="tel emphasis"><a href="#">01223 37 57 72</a></span>
                                    <span class="mt-auto">
                                        <a class="card-link btn btn-design" href="#">View More</a>
                                    </span>
                                </div>
                                <div id="map1" class="maps"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 pt-4">
                            <div class="office-card card h-100">
                                <div class="image-container">
                                    <a href="#"><img src="img/offices/wymondham.jpg" class="card-img-top" alt=""></a>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title">
                                        <a href="#">Wymondham Office</a>
                                    </h3>
                                    <address class="card-text">
                                        Unit 15,<br>
                                        Penfold Drive,<br>
                                        Gateway 11 Business Park,<br>
                                        Wymondham, Norfolk,<br>
                                        NR18 0WZ<br>
                                    </address>
                                    <span class="tel emphasis"><a href="#">01603 70 40 20</a></span>
                                    <span class="mt-auto">
                                        <a class="card-link btn btn-design" href="#">View More</a>
                                    </span>
                                </div>
                                <div id="map2" class="maps"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 pt-4">
                            <div class="office-card card h-100">
                                <div class="image-container">
                                    <a href="#"><img src="img/offices/yarmouth-2.jpg" class="card-img-top" alt=""></a>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title">
                                        <a href="#">Great Yarmouth Office</a>
                                    </h3>
                                    <address class="card-text">
                                        Suite F23,<br>
                                        Beacon Innovation Centre,<br>
                                        Beacon Park, Gorleston,<br>
                                        Great Yarmouth,m Norfolk,<br>
                                        NR31 7RA<br>
                                    </address>
                                    <span class="tel emphasis"><a href="#">01493 60 32 04</a></span>
                                    <span class="mt-auto">
                                        <a class="card-link btn btn-design" href="#">View More</a>
                                    </span>
                                </div>
                                <div id="map3" class="maps"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section id="contact-details">
                <div class="container">
                    <div class="contact-area row">
                    
                        <div class="col-xl-4">
                            <div>
                                <p><strong>Email us on:</strong></p>
                                <p class="emphasis"><a href="#">sales@netmatters.com</a></p>
                                <p><strong>Business hours:</strong></p>
                                <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                                <a href="#contact-details" onclick="ooh()"><p><strong>Out of Hours IT Support <i class="fas fa-chevron-down"></strong></i></p></a>
                            </div>
                            <div id="out-of-hours">
                                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks</p>
                                <p><strong>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>
                                Sunday 10:00 - 18:00</strong></p>
                                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                            </div>
                        </div>

                        <form id="contact-form" class="col-xl-8" action="contact-us.php#contact-form" method="post" novalidate>
                            <div class="messages">
                                <?php
                                if (!empty($error_message)) {
                                    echo "<ul>";
                                    foreach ($error_message as $item){
                                        echo "<li>$item</li>";
                                    }
                                    echo "</ul>";
                                }
                                if (!empty($success_message)) {
                                    echo "<ul><li>$success_message</li></ul>";
                                }
                                ?>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="contactName">Your Name <span class="asterisk">*</span></label>
                                    <input class="form-control" type="text" name="your_name" id="contactName">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="contactCompany">Company Name</label>
                                    <input class="form-control" type="text" name="company_name" id="contactCompany">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="contactEmail">Your Email <span class="asterisk">*</span></label>
                                    <input class="form-control" type="email" name="email" id="contactEmail">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="contactTelephone">Your Telephone Number <span class="asterisk">*</span></label>
                                    <input class="form-control" type="tel" name="telephone" id="contactTelephone">
                                </div>
                                <div class="form-group">
                                    <label for="contactSubject">Subject <span class="asterisk">*</span></label>
                                    <input class="form-control" type="text" name="subject" id="contactSubject">
                                </div>
                            </div>
                            <label for="contactMessage">Message <span class="asterisk">*</span></label>
                            <textarea class="form-control" name="message" id="contactMessage" cols="50" rows="10"></textarea>
                            <div class="form-check ms-2 mb-3">
                                <input type="checkbox" class="form-check-input" value="" id="marketing">
                                <label for="marketing" class="form-check-label">Please tick this box if you want to receive
                                    marketing information from us. Please see our <a href="#">Privacy Policy</a> for more
                                    information on how we use your data.</label>
                            </div>
                            <button type="submit" class="btn btn-design">Send Enquiry</button>
                        </form>

                    </div>
                </div>
            </section>

<?php include("inc/footer.php"); ?>