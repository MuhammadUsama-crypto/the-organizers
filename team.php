<?php

    include 'config.php';
    include 'navheader.php';

?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg11.jpg">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-8">Our Team</h2>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

   
    <!-- our teams starts -->

<?php
    // Select query to fetch team members
$sql = "SELECT * FROM `team`";
$result = $conn->query($sql);

?>

<section class="our-team pb-4">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Our <span>Team & Guide</span></h2>
            <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div>  
        <div class="team-main">
            <div class="row shop-slider">
                <?php
                // Check if there are team members
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list">
                        <div class="team-image">
                            <img src="dashmin-1.0.0/img/userImages/<?php echo $row["image"]; ?>" height="250px" width="250px"  alt="team">
                        </div>
                        <div class="team-content1 text-center">
                           <h4 class="mb-0 pink"><?php echo $row["tname"]; ?></h4>
                            <p class="mb-0"><?php echo $row["position"]; ?></p>
                        </div>
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
    </div>
</section>
    <!-- <section class="our-team pb-4">
  

    <?php
        include 'footer.php';
    ?>







