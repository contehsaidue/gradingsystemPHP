<?php include 'dashboard-header.php';



if(isset($_POST['updatedata'])){

  if (isset($_SESSION['role']) && $_SESSION['role'] == "Departmentadmin" || isset($_SESSION['role']) && $_SESSION['role'] == "Lecturer" ){
  
    $id = $_SESSION['id'];
    $department = $_POST['department'];
    $school = $_POST['school'];
  
   // this method inserts the data into the database
   $queryrun = $Controller->updateSpecificUser($id,$department,$school);
  
  if($queryrun){
    $_SESSION['status'] = "Successfully set your Department and School inside the system!";
    $_SESSION['type'] = "success";
  
  }else{
    $_SESSION['status'] = "Failed to set Department and School!";
    $_SESSION['type'] = "error";
  }
  
  }

}
  
  
// this method reads the data from the database
$id = $_SESSION['id'];
$readquery = $Controller->readSpecificUser($id);

 // this uses the $_GET superglobals to get the id for a particular data for delete
if (isset($_GET['deletedata'])){

  $id = $_GET['deletedata'];
  $table = 'tblprogram';
  $deletequery = $Controller->deleteGeneralComponent($id, $table);

if($deletequery){
  $_SESSION['status'] = "Data successfully deleted!";
  $_SESSION['type'] = "success";
}else{
  $_SESSION['status'] = "Failed to delete data!";
  $_SESSION['type'] = "error";
}
}

unset($_GET['deletedata']);

?>

<?php include 'dashboard-sidebar.php';?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard - Set Department & School</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="btn-group me-2">
            <button  class="btn btn-sm btn-primary fw-bold"  data-bs-toggle="modal" data-bs-target="#adminAdd">SET <i class="bi bi-building"></i> </button>
          </div>
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
              <th>Department</th>
              <th>School</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
    <?php 
     $i = 1; // table count iteration
     while($row = mysqli_fetch_assoc($readquery)){ ?>
     <td><?php echo $i++?></td>
    <td><?php echo $row['department'];?></td>
    <td><?php echo $row['school'];?></td>
<td>
  <a href="setdepschool.php?deletedata=<?php echo $row['id'];?>" class="text-white mr-2 text-decoration-none btn btn-danger btn-sm" onclick="return confirm('Do you want to remove this data?')";
    title="Delete"><i class="bi bi-trash"></i> </a>
    <a href="edit-program.php?editdata=<?php echo $row['id'];?>" class="text-white mr-2 text-decoration-none btn btn-success btn-sm" onclick="return confirm('Do you want to edit this data?')";
    title="Delete"><i class="bi bi-pen"></i> </a>
</td>
</tr>
<?php } ?>
          </tbody>
        </table>

  </main><!-- End #main -->
  <?php include 'dashboard-footer.php';?>

  <!-- User Registeration Modal -->
<div class="modal fade" id="adminAdd">
	<div class="modal-dialog modal-md">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title text-uppercase"><strong> Set Program & School Portal </strong> <i class="bi bi-building"></i></h5>
		</div>
		<form action="" method="POST">
		<div class="modal-body">
  
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

    <div class="row">
    <div class="col-md-12">
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
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary fw-bold" name="updatedata">Add Data</button>
		  <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Close</button>
		</div>
		</form>
	  </div>
	</div>
  </div>
