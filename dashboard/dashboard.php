<?php include 'dashboard-header.php';?>
<?php include 'dashboard-sidebar.php';?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

       <!-- Feedback Message -->
 <?php 
                    if(isset($_SESSION['status']) && ($_SESSION['type'] == "success"))
                    {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show fw-bold fst-italic mt-3" role="alert">
                            <strong>Admin <?php echo $_SESSION['fname']; ?></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }else if (isset($_SESSION['status']) && ($_SESSION['type'] == "error")){
                        
                    ?>
                    
                    <div class="alert alert-danger alert-dismissible fade show fw-bold fst-italic" role="alert">
                            <strong>Admin <?php echo $_SESSION['fname']; ?></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                         unset($_SESSION['status']);
                    }     
                ?>

 <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "Superadmin"){?>

            <!-- School Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">School</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-back"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Department Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Department</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-building"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Program Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Program</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
          
<!-- School Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">
    <div class="card-body">
      <h5 class="card-title">Lecturer</h5>
      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-person"></i>
        </div>
        <div class="ps-3">
          <h6>145</h6>
          <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Sales Card -->

<!-- Department Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">
    <div class="card-body">
      <h5 class="card-title">Students</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
          <h6>$3,264</h6>
          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Revenue Card -->

<?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Student"){?>

              <!-- Grades Card -->
              <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
              <div class="card-body">
                  <h5 class="card-title">Grades</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-back"></i>
                    </div>
                    <div class="ps-3">
                      <h6>4</h6>
                      <span class="text-success small pt-1 fw-bold">Grades available</span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Grades Card -->

            <!-- Courses Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Courses</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6>6</h6>
                      <span class="text-success small pt-1 fw-bold">Courses available </span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Courses Card -->

            
              <!-- Report Card -->
              <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
              <div class="card-body">
                  <h5 class="card-title">Progress Report</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-layout-text-window-reverse"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                      <span class="text-success small pt-1 fw-bold">Progress Report</span> 

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Progress Card -->

            <!-- Notes Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Notes</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-pen"></i>
                    </div>
                    <div class="ps-3">
                      <h6>4</h6>
                      <span class="text-success small pt-1 fw-bold"> Note Packs Submitted </span> 

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End notes Card -->

    <?php }?>

       </div>
      </div>
    </div>
  </section>

  </main><!-- End #main -->
  <?php include 'dashboard-footer.php';?>