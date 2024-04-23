

<?php 
     include 'config.php';
        include 'navheader.php';
    ?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image: url(images/bg/hotel-grid.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hotels</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hotel</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  


    <!-- blog starts -->
    <section class="blog destination-b trending pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-4">
                    <div class="trend-box">
                       
                        <div class="container">

                        <div class="row" id="hotelList">

                        <?php
                        
                        $sql = "SELECT * FROM `hotel`  ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>


<div class="col-lg-4 col-md-4 mb-4" >
    <div class="trend-item">
        <div class="trend-image">
            <img src="dashmin-1.0.0/img/userImages/<?php echo $row['featureImg']; ?>" class="img-fluid" width="300px" height="500px" alt="image">
            <div class="deal-item bg-pink py-1 px-2">
                <p class="mb-0 white"><i class="fa fa-map-marker mr-2"></i> <?php echo $row['city']; ?> </p>
            </div>
        </div>
        <div class="trend-content-main">
            <div class="trend-content">
                <div class="rating-main d-flex align-items-center pb-1">
                    <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                    <span class="ml-2">38 Reviews</span>
                </div>
                <h4 class="bordernone pt-1"><a href="hotel-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['hotelName']; ?></a></h4>
                <p class="mb-2">
                    From: <span class="font-weight-bold pink">Rs.<?php echo $row['price'] ?>/-</span>/ Night
                </p>

                <div class="description-container">
                 
               

                
                                    
             
                  
                   
            
                </div>
            </div>
        </div>
    </div>
</div>

                             <?php } ?>

                        </div>
                        </div>

                        <div class="text-center">
                            <a href="#" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

             
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

   <?php
    include 'footer.php';
   ?>