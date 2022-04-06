<?php
$pageTitle = "Contact Us | Netmatters";
include("inc/header.php"); ?>


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
                    <div>
                    <p><strong>Email us on:</strong></p>
                    <p class="emphasis"><a href="#">sales@netmatters.com</a></p>
                    <p><strong>Business hours:</strong></p>
                    <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                    <p><strong>Out of Hours IT Support</strong></p>
                    </div>
                    <div>
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks</p>
                        <p><strong>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>
                        Sunday 10:00 - 18:00</strong></p>
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
                            <button type="submit" class="btn btn-design">Send Enquiry</button>
                </form>
                </div>
            </section>

<?php include("inc/footer.php"); ?>