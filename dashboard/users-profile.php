<?php include 'dashboard-header.php';?>

<?php include 'dashboard-sidebar.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="../<?php echo $_SESSION['image'];?>" alt="<?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?>" class="rounded-circle">
              <h2><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></h2>
              <h3><?php echo $_SESSION['role'];?></h3>
            </div>
          </div>
        </div>

        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "Superadmin"){?>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['gender'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['username'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">User Role</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['role'];?></div>
                  </div>

                <?php } elseif(isset($_SESSION['role']) && $_SESSION['role'] == "Departmentadmin") {?>

                <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">Gender</div>
                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['gender'];?></div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">Username</div>
                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['username'];?></div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">User Role</div>
                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['role'];?></div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">Department</div>
                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['department'];?></div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">School</div>
                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['school'];?></div>
               </div>

               <?php } elseif(isset($_SESSION['role']) && $_SESSION['role'] == "Lecturer") {?>

              <div class="row">
              <div class="col-lg-3 col-md-4 label ">Full Name</div>
              <div class="col-lg-9 col-md-8"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></div>
              </div>

              <div class="row">
              <div class="col-lg-3 col-md-4 label">Gender</div>
              <div class="col-lg-9 col-md-8"><?php echo $_SESSION['gender'];?></div>
              </div>

              <div class="row">
              <div class="col-lg-3 col-md-4 label">Username</div>
              <div class="col-lg-9 col-md-8"><?php echo $_SESSION['username'];?></div>
              </div>

              <div class="row">
              <div class="col-lg-3 col-md-4 label">User Role</div>
              <div class="col-lg-9 col-md-8"><?php echo $_SESSION['role'];?></div>
              </div>

              <div class="row">
              <div class="col-lg-3 col-md-4 label">Department</div>
              <div class="col-lg-9 col-md-8"><?php echo $_SESSION['department'];?></div>
              </div>

              <div class="row">
              <div class="col-lg-3 col-md-4 label">School</div>
              <div class="col-lg-9 col-md-8"><?php echo $_SESSION['school'];?></div>
              </div>

               <?php } elseif(isset($_SESSION['role']) && $_SESSION['role'] == "Student") {?>

                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['gender'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['username'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">User Role</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['role'];?></div>
                  </div>
              
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Student ID</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['studentID'];?></div>
                  </div>
    
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Program</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['program'];?></div>
                  </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Level</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['level'];?></div>
                  </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Department</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['department'];?></div>
                  </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">School</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['school'];?></div>
                  </div>

                <?php }?>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php include 'dashboard-footer.php';?>