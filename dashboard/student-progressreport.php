<?php include 'dashboard-header.php';

// this method reads the data from the database
$studentID =  $_SESSION['studentID'];
$readquery = $Controller->readSpecificStudentGrade($studentID);

?>

<?php include 'dashboard-sidebar.php';?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard - Print Progress Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="btn-group me-2">
            <a href="student-progress-print.php" target="_blank" class="btn btn-sm btn-success fw-bold"><i class="bi bi-printer"></i> Print Result </a>
          </div>
      </nav>
    </div><!-- End Page Title -->

<table class="table table-striped table-bordered table-hover table-responsive datatable" style="font-size:12px" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th>No.</th>
              <th>Student Name</th>
              <th>Course Name</th>
              <th>Grade</th>
              <th>Semester</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
    <?php 
     $i = 1; // table count iteration
     while($row = mysqli_fetch_assoc($readquery)){ ?>
     <td><?php echo $i++?></td>
    <td><?php echo $row['fname'].' '.$row['lname'];?></td>
    <td><?php echo $row['coursename'];?></td>
    <td><?php echo $row['grade'];?></td>
    <td><?php echo $row['semester'];?></td>
</tr>
<?php } ?>
          </tbody>
        </table>

  </main><!-- End #main -->
  <?php include 'dashboard-footer.php';?>

 