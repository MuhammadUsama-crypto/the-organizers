<?php

    include 'navheader.php';

    if(isset($_POST['contact'])) {
        $fname = $_POST['fname'];
        echo $fname;
    }
?>

    <!-- contact starts -->
    <section class="contact-main pt-0 contact1 bg-grey">
        <div class="map mb-10">
            <div style="width: 100%">
                <iframe height="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.0432390337355!2d73.11236847383077!3d31.412934752445377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392269e2641657af%3A0xd31a62f7d6cbd377!2sTheOrganizer.pk!5e0!3m2!1sen!2s!4v1711454209178!5m2!1sen!2s"></iframe>
            </div>
        </div>
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-info">
                            <h3 class="">INFORMATION ABOUT US</h3>
                            <p class="mb-4">Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci.</p>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">Office # 26 , Kohinoor One Plaza , Near Mr Wingz Kohinoor Jaranwala, Road, </p>
                                    <p class="m-0">Faisalabad, 38000, Pakistan</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">03-111-123-004</p>
                                    <p class="m-0">0311-1807865</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">TheOrganizers07@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div id="" class="">
                            <h3 class="">Keep in Touch</h3>
                            <p class="mb-4">Fundpress site thoughtfully designed for real humans which means the best user experience for your entire community.</p>
                            
                            

                            <form action="contact.php"  method="POST" >
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control"  placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email"  class="form-control"  placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control"  placeholder="Phone">
                                </div>
                                <div class="textarea">
                                    <textarea name="comments" placeholder="Enter a message"></textarea>
                                </div>
                                <div class=" text-right mt-1">
                                    <input type="submit" class="nir-btn" name="contact">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact Ends -->

    <?php
    include 'footer.php';
    ?>