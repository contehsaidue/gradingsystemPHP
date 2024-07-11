<?php include 'dashboard-header.php';

// this method reads the data from the database

$readquery = $Controller->readStudentOnly();

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
      <h1>Dashboard - Student Data </h1>
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

