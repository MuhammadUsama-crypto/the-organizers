<?php

    include 'config.php';
    include 'navheader.php';

?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg11.jpg">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-10">Client Reviews </h2>
                    
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    
    <!-- testomonial start -->

    <?php
    $sql = "SELECT * FROM testimonial";
    $result = $conn->query($sql);

?>

<section class="testimonial pb-6">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">What <span>People Say About Us</span></h2>
            <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div> 
        <div class="row review-slider">
            <?php
            // Check if there are testimonials
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-sm-4 item">
                <div class="testimonial-item1 text-center">
                    <div class="details">
                        <p class="m-0"><?php echo $row["para"]; ?></p>
                    </div>
                    <div class="author-info mt-2">
                        <a href="#"><img src="dashmin-1.0.0/img/userImages/<?php echo $row["image"]; ?>" alt=""></a>
                        <div class="author-title">
                            <h4 class="m-0 pink"><?php echo $row["cname"]; ?></h4>
                            <span><?php echo $row["position"]; ?></span>
                        </div>
                    </div>
                    <i class="fa fa-quote-left mb-2"></i>
                </div>
            </div>
            <?php
                }
            } else {
                echo "0 results";
            }
            // Close database connection
            
            ?>
        </div>
    </div>
</section>
    <!-- <section class="testimonial pb-6">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">What <span>People Say About Us</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div> 
            <div class="row review-slider">
                <div class="col-sm-4 item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img1.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 pink">Jared Erondu</h4>
                                <span>Supervisor</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem  Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img2.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 pink">Cadic Vegeta</h4>
                                <span>Sr. Chef</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img3.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 pink">Jonathan Beri</h4>
                                <span>Manager</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- testimonial ends --> 

    <!-- client start -->
    <div class="partners bg-grey pt-4 pb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Our Partners</h1>
                </div>
            </div>
            <div class="row attract-slider">
                <div class="col-sm-2">
                    <div class="client-logo item">
                    <a href="#">
                        <img src="images/clients/logo-01.png" alt="" />
                    </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-02.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-03.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-04.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-02.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-03.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-04.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-01.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="client-logo item">
                        <a href="#">
                            <img src="images/clients/logo-02.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client ends -->

    <?php
        include 'footer.php';
    ?>







