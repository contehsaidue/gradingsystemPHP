<?php include 'dashboard-header.php';


if(isset($_POST['adddata'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $studentID = '';
  $image = '';
  $gender = '';
  $program = '';
  $level = '';

  // this method inserts the data into the database
  $insertquery = $Controller->createUser($username,$password,$role,$fname,$mname,$lname,$studentID,$image,$gender,$program,$level);
 
if($insertquery){
  $_SESSION['status'] = "User successfully resgistered into the system!";
  $_SESSION['type'] = "success";

}else{
  $_SESSION['status'] = "Failed to register this user!";
  $_SESSION['type'] = "error";
}

}

// this method reads the data from the database

$readquery = $Controller->readAllUsers();

// this uses the $_GET superglobals to get the id for a particular data for delete
if (isset($_GET['deletedata'])){

$id = $_GET['deletedata'];
$deletequery = $Controller->deleteUser($id);

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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="btn-group me-2">
            <button  class="btn btn-sm btn-primary fw-bold"  data-bs-toggle="modal" data-bs-target="#register">CREATE NEW USER  <i class="bi bi-people"></i> </button>
          </div>
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

<table class="table table-striped table-bordered table-hover table-responsive datatable" style="font-size:12px" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th>No.</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
    <?php 
     $i = 1; // table count iteration
      while($row = mysqli_fetch_assoc($readquery)){ ?>
    <td><?php echo $i++?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['lname'];?></td>
    <td><?php echo $row['role'];?></td>
<td>
  <a href="user-register.php?deletedata=" class="text-white mr-2 text-decoration-none btn btn-danger btn-sm" onclick="return confirm('Do you want to remove this data?')";
    title="Delete"><i class="bi bi-trash"></i> </a>
    <a href="user-edit.php?editdata=" class="text-white mr-2 text-decoration-none btn btn-success btn-sm" onclick="return confirm('Do you want to edit this data?')";
    title="Delete"><i class="bi bi-pen"></i> </a>
</td>
</tr>
<?php } ?>
          </tbody>
        </table>

  </main><!-- End #main -->
  <?php include 'dashboard-footer.php';?>

  <!-- User Registeration Modal -->
<div class="modal fade" id="register">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title text-uppercase"><strong> User Registeration Portal </strong> <i class="bi bi-people"></i></h5>
		</div>
		<form action="" method="POST">
		<div class="modal-body">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <select class="form-select" name="role">
        <option selected>User Role</option>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "Superadmin"){?>
        <option value="Superadmin">Super Admin</option>
        <option value="Schooladmin">School Admin</option>
        <option value="Departmentadmin">Department Admin</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Student">Student</option>

        <?php }elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Schooladmin"){?>
        <option value="Departmentadmin">Department Admin</option>

        <?php } elseif (isset($_SESSION['role']) && $_SESSION['role'] == "Departmentadmin"){?>
        <option value="Lecturer">Lecturer</option>
        <option value="Student">Student</option>

        <?php } ?>

    </select>
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="First Name" name="fname">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->

    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Middle Name" name="mname">
        </div>
    </div> <!-- col 1 ends -->
    <div class="col-md-6">
        <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Last Name" name="lname">
        </div>
    </div> <!-- col 1 ends -->
    </div> <!-- row 1 ends -->
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary fw-bold" name="adddata">Register</button>
		  <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Close</button>
		</div>
		</form>
	  </div>
	</div>
  </div>
