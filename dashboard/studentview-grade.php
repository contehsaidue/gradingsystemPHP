<?php include 'dashboard-header.php';

// this method reads the data from the database
$studentID =  $_SESSION['studentID'];
$readquery = $Controller->readSpecificStudentGrade($studentID);

?>

<?php include 'dashboard-sidebar.php';?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard - My Grades</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
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

  <!-- User Registeration Modal -->
<div class="modal fade" id="adminAdd">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title text-uppercase"><strong> Add Grade Portal </strong> <i class="bi bi-building"></i></h5>
		</div>
		<form action="" method="POST">
		<div class="modal-body">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="course">
     <option selected>Course</option>
      <?php
        $readqueryrun = $Controller->readCourse();
        while($row = mysqli_fetch_assoc($readqueryrun)){ ?>

     <option value="<?php echo $row['courseid'];?>"><?php echo $row['coursename'];?></option>

    <?php } ?>
    </select>
        </div>
    </div> <!-- col 1 ends -->

    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Grade" name="grade">
        </div>
    </div> <!-- col 1 ends -->

    </div> <!-- row 1 ends -->

    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="student">
     <option selected>Student per course</option>
      <?php
        $readqueryrun = $Controller->readStudentOnly();
        while($row = mysqli_fetch_assoc($readqueryrun)){ ?>

     <option value="<?php echo $row['id'];?>"><?php echo $row['fname'].' '.$row['lname'];?></option>

    <?php } ?>
    </select>
        </div>
    </div> <!-- col 1 ends -->

    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="semester">
     <option selected>Semester</option>
     <option value="First Semester">First Semester</option>
     <option value="Second Semester">Second Semester</option>
    </select>
        </div>
    </div> <!-- col 1 ends -->

    </div> <!-- row 1 ends -->
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary fw-bold" name="adddata">Add Grade</button>
		  <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Close</button>
		</div>
		</form>
	  </div>
	</div>
  </div>
