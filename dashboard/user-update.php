<?php include 'dashboard-header.php';


if(isset($_POST['updatedata'])){

if (isset($_SESSION['role']) && $_SESSION['role'] == "Student"){

  $id = $_SESSION['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $studentID = $_POST['studentid'];
  $image = $_FILES['image']['name'];
  $image_tempname = $_FILES['image']['tmp_name'];
  $gender = $_POST['gender'];
  $program = $_POST['program'];
  $level = $_POST['level'];
  $school = $_POST['school'];
  $department = $_POST['department'];

}

  if (isset($_SESSION['role']) && $_SESSION['role'] == "Superadmin" || isset($_SESSION['role']) && $_SESSION['role'] == "Schooladmin" || isset($_SESSION['role']) &&  $_SESSION['role'] == "Departmentadmin" || isset($_SESSION['role']) && $_SESSION['role'] == "Lecturer"){

    $id = $_SESSION['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $image = $_FILES['image']['name'];
    $image_tempname = $_FILES['image']['tmp_name'];
    $gender = $_POST['gender'];

  }

  $image_type = strtolower(pathinfo($image, PATHINFO_EXTENSION)); // checking image file type
  $extensions_arr = array("jpg","jpeg","png"); // valid file extensions stored in an array

  $root_path = "../assets/images/user/".$image; // storing image path to folder in root directory
  $db_path = "assets/images/user/".$image; // storing image path into database

if(in_array($image_type, $extensions_arr)){

    if (isset($_SESSION['role']) && $_SESSION['role'] == "Superadmin" || isset($_SESSION['role']) && $_SESSION['role'] == "Schooladmin" || isset($_SESSION['role']) &&  $_SESSION['role'] == "Departmentadmin" || isset($_SESSION['role']) && $_SESSION['role'] == "Lecturer"){

 // this method inserts the data into the database
 $queryrun = $Controller->updateUser($id,$username,$password,$fname,$lname,$db_path,$gender);

 // this method moves the uploaded file into the root directory
 move_uploaded_file($image_tempname , $root_path);
 
if($queryrun){
  $_SESSION['status'] = "Successfully updated your details inside the system!";
  $_SESSION['type'] = "success";

}else{
  $_SESSION['status'] = "Failed to update details!";
  $_SESSION['type'] = "error";
}


}else if (isset($_SESSION['role']) && $_SESSION['role'] == "Student"){
     // this method inserts the data into the database
    $queryrun = $Controller->updateStudentUser($id,$username,$password,$fname,$mname,$lname,$studentID,$db_path,$gender,$program,$level,$school,$department);

    // this method moves the uploaded file into the root directory
    move_uploaded_file($image_tempname , $root_path);
    
    if($queryrun){
    $_SESSION['status'] = "Successfully updated your details inside the system!";
    $_SESSION['type'] = "success";

    }else{
    $_SESSION['status'] = "Failed to update details!";
    $_SESSION['type'] = "error";
}
    }



 }// end image array

}
?>

<?php include 'dashboard-sidebar.php';?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard - <?php echo $_SESSION['fname'];?> Update your details!</h1>
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
                            <strong>Web Master <?php echo $_SESSION['fname']; ?></strong> <?php echo $_SESSION['status']; ?>
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


<form action="" method="POST" enctype="multipart/form-data">
		<div class="modal-body">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $_SESSION['username'];?>">
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password" value = "<?php echo $_SESSION['password'];?>">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="First Name" name="fname" value = "<?php echo $_SESSION['fname'];?>">
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Last Name" name="lname" value = "<?php echo $_SESSION['lname'];?>">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "Student"){?>
    <div class="row">
    <div class="col-md-12">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Middle Name" name="mname" value = "<?php echo $_SESSION['mname'];?>">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->
    <?php };?>

    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "Superadmin"){?>
     <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="gender">
       <option selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
       </select>
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="file" class="form-control" name="image">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Schooladmin"){?>
        <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="gender">
       <option selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
       </select>
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="file" class="form-control" name="image">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    
    <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Departmentadmin"){?>
        <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="gender">
       <option selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
       </select>
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="file" class="form-control" name="image">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    
    <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Lecturer"){?>
        <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="gender">
       <option selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
       </select>
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="file" class="form-control" name="image">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    
    <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Student"){?>
    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="gender">
       <option selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
       </select>
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="file" class="form-control" name="image">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="level">
       <option selected>Level</option>
        <option value="1">First Year</option>
        <option value="2">Second Year</option>
        <option value="3">Third Year</option>
        <option value="4">Final Year</option>
       </select>
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="school">
     <option selected>School</option>
      <?php
        $readqueryrun = $Controller->readSchoolComponent();
        while($row = mysqli_fetch_assoc($readqueryrun)){ ?>

     <option value="<?php echo $row['school'];?>"><?php echo $row['school'];?></option>

    <?php } ?>
    </select>
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->


    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder = "Student ID NO." name="studentid">
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="program">
     <option selected>Program</option>
      <?php
        $readqueryrun = $Controller->readProgramComponent();
        while($row = mysqli_fetch_assoc($readqueryrun)){ ?>

     <option value="<?php echo $row['program'];?>"><?php echo $row['program'];?></option>

    <?php } ?>
    </select>
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    <div class="row">
    <div class="col-md-12">
        <div class="form-group mb-3">
    <select class="form-select" name="department">
     <option selected>Department</option>
      <?php
        $readqueryrun = $Controller->readDepartmentComponent();
        while($row = mysqli_fetch_assoc($readqueryrun)){ ?>

     <option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>

    <?php } ?>
    </select>
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

        <?php }?>

		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary fw-bold" name="updatedata">Update</button>
		</div>
		</form>

  </main><!-- End #main -->
  <?php include 'dashboard-footer.php';?>

