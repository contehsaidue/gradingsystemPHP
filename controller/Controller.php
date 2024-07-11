<?php
include 'DBConfig.php'; // including the connection script

class Controller extends DBConfig {

// ------- Create user Method Starts -------- 
public function createUser($username,$password,$role,$fname,$mname,$lname,$studentID,$image,$gender,$program,$level){
    $query = "INSERT INTO tbladmin (username,password,role,fname,mname,lname,studentID,image,gender,program,level) 
    VALUES ('$username','$password','$role','$fname','$mname','$lname','$studentID','$image','$gender','$program','$level')";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }
    
    // Method used to update the student record

    public function updateStudentUser($id,$username,$password,$fname,$mname,$lname,$studentID,$db_path,$gender,$program,$level,$school,$department){
        $query = "UPDATE tbladmin SET username = '$username',password = '$password',
                 fname = '$fname',mname = '$mname',lname = '$lname',
                 studentID = '$studentID',image = '$db_path',gender = '$gender'
                 ,program = '$program',level = '$level' ,school = '$school' ,department = '$department'  WHERE id = '$id'";
        $queryrun = mysqli_query($this->conn, $query);
        
            if ($queryrun){
                return true;
            }else{
                return false;
            }
        
        }
    
        // Method used to update the record of all the other admins

        public function updateUser($id,$username,$password,$fname,$lname,$db_path,$gender){
            $query = "UPDATE tbladmin SET username = '$username',password = '$password',
                     fname = '$fname',lname = '$lname',image = '$db_path',gender = '$gender'
                     WHERE id = '$id'";
            $queryrun = mysqli_query($this->conn, $query);
            
                if ($queryrun){
                    return true;
                }else{
                    return false;
                }
            
            }
    
            // Method used to update the record of specific users

            public function updateSpecificUser($id,$department,$school){
            $query = "UPDATE tbladmin SET department = '$department',school = '$school' WHERE id = '$id'";
            $queryrun = mysqli_query($this->conn, $query);
            
                if ($queryrun){
                    return true;
                }else{
                    return false;
                }
                
                }
    
            public function readSpecificUser($id = null){
                $query = "SELECT * FROM tbladmin";
            
                if($id){
                    $query .= " WHERE id = $id";
                }
            
                $queryrun = mysqli_query($this->conn, $query);
                return $queryrun;
                
            }

      public function readAllUsers($id = null){
        $query = "SELECT * FROM tbladmin ORDER BY id DESC";
    
        if($id){
            $query .= " WHERE id = $id";
        }
    
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
        
    }

    public function readLecturerOnly($id = null){
        $query = "SELECT * FROM tbladmin WHERE role = 'lecturer'";
    
        if($id){
            $query .= " WHERE id = $id";
        }
    
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
        
    }


    // Read only department 
    public function readDepartmentLecturerOnly($department){
        $query = "SELECT * FROM tbladmin WHERE role = 'lecturer' AND department = $department";
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
        
    }


    public function readStudentOnly($id = null){
        $query = "SELECT * FROM tbladmin WHERE role = 'Student'";
    
        if($id){
            $query .= " WHERE id = $id";
        }
    
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
        
    }


    public function deleteUser ($id){
        $query = "DELETE FROM tbladmin WHERE id = '$id'";
        $queryrun = mysqli_query($this->conn, $query);
        
            if ($queryrun){
                return true;
            }else{
                return false;
            }
        
        }
       
// ------- User Method ends -------- 

// User Login Method
public function userLogin ($username, $password){

$query = "SELECT * FROM tbladmin WHERE username = '$username' AND password = '$password'";
$queryrun = mysqli_query($this->conn, $query);
$rowCount = mysqli_num_rows($queryrun);

    if ($rowCount > 0){
        //Data input comparisson
        $queryRowFetch = mysqli_fetch_assoc($queryrun);
        if($queryRowFetch['username'] == $username AND $queryRowFetch['password'] == $password ){

            // Store user session data
            $_SESSION['id'] = $queryRowFetch['id'];
            $_SESSION['username'] = $queryRowFetch['username'];
            $_SESSION['role'] = $queryRowFetch['role'];
            $_SESSION['fname'] = $queryRowFetch['fname'];
            $_SESSION['mname'] = $queryRowFetch['mname'];
            $_SESSION['lname'] = $queryRowFetch['lname'];
            $_SESSION['studentID'] = $queryRowFetch['studentID'];
            $_SESSION['image'] = $queryRowFetch['image'];
            $_SESSION['gender'] = $queryRowFetch['gender'];
            $_SESSION['program'] = $queryRowFetch['program'];
            $_SESSION['level'] = $queryRowFetch['level'];
            $_SESSION['department'] = $queryRowFetch['department'];
            $_SESSION['school'] = $queryRowFetch['school'];

            // Redirecting the user
            header('Location: dashboard/dashboard.php');
        }

    }else{
            
        // Redirecting the user
        header('Location: ./index.php');
       
 }

}


// ------- Grade Method Starts -------- 
public function insertGrade($grade,$course,$student,$semester){
    $query = "INSERT INTO tblgrades (grade,course,student,semester) VALUES ('$grade','$course','$student','$semester')";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }
    
      public function readGrade($id = null){
        $query = "SELECT * FROM tblgrades JOIN tbladmin ON tblgrades.student = tbladmin.id 
                JOIN tblcourses ON  tblgrades.course = tblcourses.courseid";
    
        if($id){
            $query .= " WHERE gradeid = $id";
        }
    
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
    
    }

    public function readSpecificStudentGrade($studentID){
        $query = "SELECT * FROM tblgrades JOIN tbladmin ON tblgrades.student = tbladmin.id 
                JOIN tblcourses ON  tblgrades.course = tblcourses.courseid WHERE studentID = '$studentID'";
    
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
    
    }


    public function deleteGrade($id){
        $query = "DELETE FROM tblgrades WHERE gradeid = '$id'";
        $queryrun = mysqli_query($this->conn, $query);
        
            if ($queryrun){
                return true;
            }else{
                return false;
            }
        
        }
    
       
     // ------- Grade component Method ends -------- 

     

// ------- School component Method Starts -------- 
public function createSchoolComponent($school){
$query = "INSERT INTO tblschool (school) VALUES ('$school')";
$queryrun = mysqli_query($this->conn, $query);

    if ($queryrun){
        return true;
    }else{
        return false;
    }

}

  public function readSchoolComponent($id = null){
    $query = "SELECT * FROM tblschool";

    if($id){
        $query .= " WHERE id = $id";
    }

    $queryrun = mysqli_query($this->conn, $query);
    return $queryrun;

}
   
 // ------- School component Method ends -------- 

// ------- Department component Method Starts -------- 
public function createDepartmentComponent($department){
    $query = "INSERT INTO tbldepartment (department) VALUES ('$department')";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }
    
    public function readDepartmentComponent($id = null){
    $query = "SELECT * FROM tbldepartment";

    if($id){
        $query .= " WHERE id = $id";
    }

    $queryrun = mysqli_query($this->conn, $query);
    return $queryrun;

}
        
 // ------- Department component Method ends -------- 
 
// ------- Program component Method Starts -------- 
public function createProgramComponent($program,$department,$school){
    $query = "INSERT INTO tblprogram (program, department, school) 
              VALUES ('$program','$department','$school')";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }
    
    public function readProgramComponent($id = null){
    $query = "SELECT * FROM tblprogram tblprog JOIN tbldepartment tbldep ON tblprog.department = tbldep.id 
             JOIN tblschool tblsch ON tblprog.school = tblsch.id";

    if($id){
        $query .= " WHERE id = $id";
    }

    $queryrun = mysqli_query($this->conn, $query);
    return $queryrun;

}
        
 // ------- Program component Method ends -------- 



public function deleteGeneralComponent($id, $table){
    $query = "DELETE FROM {$table} WHERE id = '$id'";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }

    



// ------- Admin Image Insert Method -------- //
public function insertImage($table,$db_path) {
    $query = "INSERT INTO {$table} (image) VALUES ('$db_path')";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }
    
    //Admin read image Method
    public function readImage($table){
        $query = "SELECT * FROM {$table}";
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
    
    }


// Admin delete component Method
public function deleteImage($id, $table){
    $query = "DELETE FROM {$table} WHERE id = '$id'";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }

// Method to read Gallery (specific) query from Database 
public function readGallery( $table ,$limit = null ){
    $query = "SELECT * FROM {$table} ORDER BY RAND()";

    if($limit){
        $query .= " LIMIT {$limit}";
    }

    $queryrun = mysqli_query($this->conn, $query);
    return $queryrun;

}



//------- Review method begins -------------

public function insertReview($title,$review,$name,$db_path,$role){
    $query = "INSERT INTO tblreview (title,review,name,image,role) VALUES 
    ('$title','$review','$name','$db_path','$role')";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }
    
    public function readReview($id = null){
    $query = "SELECT * FROM tblreview";

    if($id){
        $query .= " WHERE id = $id";
    }

    $queryrun = mysqli_query($this->conn, $query);
    return $queryrun;

}
 
public function deleteReview($id, $table){
    $query = "DELETE FROM {$table} WHERE id = '$id'";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }

    
    
// ------- Course component Method Starts -------- 
public function createCourse($coursecode, $coursename){
    $query = "INSERT INTO tblcourses (coursecode, coursename) VALUES ('$coursecode', '$coursename')";
    $queryrun = mysqli_query($this->conn, $query);
    
        if ($queryrun){
            return true;
        }else{
            return false;
        }
    
    }
    
      public function readCourse($id = null){
        $query = "SELECT * FROM tblcourses";
    
        if($id){
            $query .= " WHERE courseid = $id";
        }
    
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
    
    }

    public function deleteCourse($id){
        $query = "DELETE FROM tblcourses WHERE courseid = '$id'";
    
        $queryrun = mysqli_query($this->conn, $query);
        return $queryrun;
    
    }
       
     // ------- Course component Method ends -------- 
    

}// end of class









// Object instantiation in the same PHP Script
$Controller = new Controller ();
?>