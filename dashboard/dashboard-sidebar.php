
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Super Admin Navbar -->

      <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "Superadmin"){?>

        <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard [<?php echo $_SESSION['role'];?>]</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-back"></i><span>School</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-school.php">
              <i class="bi bi-circle"></i><span>School Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-building"></i><span>Department</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-department.php">
              <i class="bi bi-circle"></i><span>Department Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#form-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book"></i><span>Programs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="form-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-program.php">
              <i class="bi bi-circle"></i><span>Program Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#table-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Lecturer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="table-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="lecturer-data.php">
              <i class="bi bi-circle"></i><span>View Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Student</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
          <a href="student-data.php">
              <i class="bi bi-circle"></i><span>View Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

        
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#site-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tools"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="site-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="slider-data.php">
              <i class="bi bi-circle"></i><span>Slider Data</span>
            </a>
          </li>
          <li>
            <a href="gallery-data.php">
              <i class="bi bi-circle"></i><span>Gallery Data</span>
            </a>
          </li>
          <li>
            <a href="review-data.php">
              <i class="bi bi-circle"></i><span>Review Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    
      <li class="nav-heading">Sub Menu</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-journal-text"></i>
          <span>Admin Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tab1-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-layout-text-window-reverse"></i><span>Status</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tab1-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="user-update.php?viewdata=<?php echo $_SESSION['id'];?>">
             <i class="bi bi-circle"></i><span>Complete Registeration</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tab-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-window"></i><span>User Registeration</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tab-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="user-register.php">
              <i class="bi bi-circle"></i><span>User Registeration</span>
            </a>
          </li>

        </ul>
      </li><!-- End Register Page Nav -->
    </ul>

      <!-- School Admin Navbar -->

      <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Schooladmin"){?>

        <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard [<?php echo $_SESSION['role'];?>]</span>
        </a>
      </li><!-- End Dashboard Nav -->
     
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Department</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-department.php">
              <i class="bi bi-circle"></i><span>Department Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Lecturer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Student</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    
      <li class="nav-heading">Sub Menu</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Admin Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tab2-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-layout-text-window-reverse"></i><span>Status</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tab2-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="user-update.php?viewdata=<?php echo $_SESSION['id'];?>">
             <i class="bi bi-circle"></i><span>Complete Registeration</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tab1-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>User Registeration</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tab1-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="user-register.php">
              <i class="bi bi-circle"></i><span>User Registeration</span>
            </a>
          </li>
          
    </ul>

      <!-- Department Admin Navbar -->

      <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Departmentadmin"){?>
     
        <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard [<?php echo $_SESSION['role'];?>]</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Programs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-program.php">
              <i class="bi bi-circle"></i><span>Program Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#form-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="form-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-course.php">
              <i class="bi bi-circle"></i><span>Add Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tab-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Lecturer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tab-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="lecturer-data.php">
              <i class="bi bi-circle"></i><span>View Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Student</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tab-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tab-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="set.php">
              <i class="bi bi-circle"></i><span>Set Department & School</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    
      <li class="nav-heading">Sub Menu</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Admin Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tab2-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-layout-text-window-reverse"></i><span>Status</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tab2-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="user-update.php?viewdata=<?php echo $_SESSION['id'];?>">
             <i class="bi bi-circle"></i><span>Complete Registeration</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->
 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tab1-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>User Registeration</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tab1-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="user-register.php">
              <i class="bi bi-circle"></i><span>User Registeration</span>
            </a>
          </li>

    </ul>

     <!-- Lecturer Admin Navbar -->

     <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Lecturer"){?>
   
      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard [<?php echo $_SESSION['role'];?>]</span>
        </a>
      </li><!-- End Dashboard Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-journal-text"></i><span>Grades</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="add-grades.php">
             <i class="bi bi-circle"></i><span>Add Data</span>
           </a>
         </li>
       </ul>
     </li><!-- End Forms Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#form-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-journal-text"></i><span>Programs</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="form-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
         <li>
           <a href="add-program.php">
             <i class="bi bi-circle"></i><span>View Programs</span>
           </a>
         </li>
       </ul>
     </li><!-- End Forms Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#form1-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-journal-text"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="form1-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="add-course.php">
             <i class="bi bi-circle"></i><span>View Courses</sptan>
           </a>
         </li>
       </ul>
     </li><!-- End Forms Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#form1-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-journal-text"></i><span>Notes</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="form1-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="forms-elements.html">
             <i class="bi bi-circle"></i><span>Form Elements</span>
           </a>
         </li>
       </ul>
     </li><!-- End Forms Nav -->
     
     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-people"></i><span>Student</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="student-data.php">
             <i class="bi bi-circle"></i><span>View Data</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#table-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-people"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="table-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       <li>
            <a href="set.php">
              <i class="bi bi-circle"></i><span>Set Department & School</span>
            </a>
          </li>
       </ul>
     </li><!-- End Tables Nav -->
   
     <li class="nav-heading">Sub Menu</li>

     <li class="nav-item">
       <a class="nav-link collapsed" href="users-profile.php">
         <i class="bi bi-person"></i>
         <span>Lecturer Profile</span>
       </a>
     </li><!-- End Profile Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tab1-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-layout-text-window-reverse"></i><span>Status</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tab1-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="user-update.php?viewdata=<?php echo $_SESSION['id'];?>">
             <i class="bi bi-circle"></i><span>Complete Registeration</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->

   </ul>


    <!-- Student Admin Navbar -->

    <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Student"){?>
     
      
      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard [<?php echo $_SESSION['role'];?>]</span>
        </a>
      </li><!-- End Dashboard Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#form-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-back"></i><span>Grades</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="form-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="studentview-grade.php">
             <i class="bi bi-circle"></i><span>View Grades</span>
           </a>
         </li>
       </ul>
     </li><!-- End Forms Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-book"></i><span>My Courses</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="forms-elements.html">
             <i class="bi bi-circle"></i><span>Form Elements</span>
           </a>
         </li>
       </ul>
     </li><!-- End Forms Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-layout-text-window-reverse"></i><span>Progress Report</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="student-progressreport.php">
             <i class="bi bi-circle"></i><span>Print Progress Report</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->

     
     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-pen"></i><span>View Notes </span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="tables-general.html">
             <i class="bi bi-circle"></i><span>General Tables</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->
   
     <li class="nav-heading">Sub Menu</li>

     <li class="nav-item">
       <a class="nav-link collapsed" href="users-profile.php">
         <i class="bi bi-journal-text"></i>
         <span>My Profile</span>
       </a>
     </li><!-- End Profile Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tab-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-window"></i><span>Status</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tab-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="user-update.php?viewdata=<?php echo $_SESSION['id'];?>">
             <i class="bi bi-circle"></i><span>Complete Registeration</span>
           </a>
         </li>
       </ul>
     </li><!-- End Tables Nav -->

   </ul>

    
    <?php };?>
     

  </aside><!-- End Sidebar-->