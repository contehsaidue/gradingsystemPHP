<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php if (isset($_SESSION['status']) && ($_SESSION['type'] == "error")){ ?>
                    
<div class="alert alert-danger alert-dismissible fade show fw-bold fst-italic" role="alert">
        <strong><?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php unset($_SESSION['status']); } ?>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                <?php 
                            
                            // this method reads the data from the database 
                            $table = 'tblslider';
                            $readquery = $Controller->readImage($table);
                            
                            $i = 0;
                            while($row = mysqli_fetch_assoc($readquery)){
                                $active = '';
                                if ($i == 0){
                                    $active = 'active' ;
                                }
                            ?>
                                    <div class="carousel-item <?= $active; ?>">
                                        <img src="<?php echo $row['image'];?>" class="img-fluid" alt="">
                                    </div>
                                    <?php $i++ ;} ?>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    Grading System for
                                    <div class="animated-info">
                                        <span class="animated-item">Schools</span>
                                        <span class="animated-item">Departments</span>
                                        <span class="animated-item">Students</span>
                                    </div>
                                </h1>

                                <p class="mb-4">Provides easier and efficient means of Seamless Data collection
                                    used by the university in creating a working model for developmental purposes
                                    as well as student welfare.
                                     Serves as one of the components of the university management system</p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4 btn-primary text-light rounded" href="#about" data-hover="Learn More">Learn More</a>

                                    <p class="contact-phone mb-0"><i class="bi-phone"></i> +232 - 7702 - 8023</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">Njala University </h2>
                            <h4 class="mb-lg-3 mb-3">Grading System <i class="bi-back"></i> </h4>

                            <p>A rural research university. Njala University is committed to providing the highest standards of excellence in higher education · Has two campuses Njala Campus and BO Campus with series of locations across the country.</p>

                            <p>The University has nine Schools: Agriculture, Education, Environmental Sciences, Social Sciences, Community Health Sciences, Technology, Forestry and Horticulture, Medical Sciences and the newly formed school of Basic Sciences.</p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                            <img src="assets/images/nulogo.JPEG" class="img-fluid galleryImage" alt="Njala Grdaing System" title="Njala University grading system">
                            
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">
                    <?php  
                    
                    // this method reads the data from the database 
                    $table = 'tblgallery';
                    $limit = 2;
                    $readgalleryqueryrun = $Controller->readGallery($table, $limit);
  
                    while ($row = mysqli_fetch_assoc($readgalleryqueryrun)) {?>

                        <div class="col-lg-6 col-6 ps-0">
                            <img src="<?php echo $row['image'];?>" class="img-fluid galleryImage rounded" alt="grading system images" >
                        </div>
                        <?php }?>
                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4 fst-italic fw-bold">the grading system architecture <i class="bi-back"></i>  </h2>
                        
                        <div class="timeline">
                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Super Admin</h3>

                                    <p>Donec facilisis urna dui, a dignissim mauris pretium a. Quisque quis libero fermentum, tempus felis eu, consequat nibh.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-patch-check-fill timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-07-31 Saturday</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">School Admin</h3>

                                    <p>You are fully permitted to use this template for your commercial or personal website. You are not permitted to redistribute the template ZIP file for a download purpose on any other <a href="https://www.google.com/search?q=free+css" target="_blank">Free CSS collection</a> website.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-book timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-07-15 Thursday</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Department Admin</h3>

                                    <p>Phasellus eleifend, urna interdum congue viverra, arcu neque ultrices ligula, id pulvinar nisi nibh et lacus. Vivamus gravida, ipsum non euismod tincidunt, sapien elit fermentum mi, quis iaculis enim ligula at arcu.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-file-medical timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-06-28 Monday</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Lecturer</h3>

                                    <p class="mb-0 pb-0">Fusce vestibulum euismod nulla sed ultrices. Praesent rutrum nulla vel sapien euismod, quis tempus dui placerat.</p>
                                    
                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-globe timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-05-30 Sunday</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Student</h3>

                                    <p>If you need a working contact form that submits email to your inbox, please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">visit our contact page</a> for more information.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-person timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-05-18 Tuesday</time>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="reviews">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4 fst-italic">System usability feedback</h2>

                            <div class="owl-carousel reviews-carousel">
                            <?php 
                            
                            // this method reads the data from the database 
                            $readquery = $Controller->readReview();
                            
                            $i = 0;
                            while($row = mysqli_fetch_assoc($readquery)){
                                $active = '';
                                if ($i == 0){
                                    $active = 'active' ;
                                }
                            ?>
                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                   
                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong><?php echo $row['title'];?></strong></p>

                                    <p class="reviews-text w-100"><?php echo $row['review'];?></p>

                                    <img src="<?php echo $row['image'];?>" class="img-fluid reviews-image" alt="<?php echo $row['name'];?>">

                                    <figcaption class="ms-4">
                                        <strong><?php echo $row['name'];?></strong>

                                        <span class="text-muted"><?php echo $row['role'];?></span>
                                    </figcaption>
                                </figure>
                         <?php $i++ ;} ?>
                           
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <?php include 'includes/footer.php';?>