<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">


<?php 



if(isset($_POST['submit'])){
    include"includes/config.php";


    $id = mysqli_real_escape_string($conection, $_POST['id']);
    $fname = mysqli_real_escape_string($conection, $_POST['fname']);
    $lname = mysqli_real_escape_string($conection, $_POST['lname']);
    $email = mysqli_real_escape_string($conection, $_POST['email']);
    $pass = mysqli_real_escape_string($conection, md5($_POST['pass']));
    $cpass = mysqli_real_escape_string($conection, md5($_POST['cpass']));
    $role = mysqli_real_escape_string($conection, $_POST['role']);

    //UPDATE `admins` SET `fname` = 'mahmud', `lname` = 'kabir' WHERE `admins`.`id` = 10; 

    $query = "UPDATE admins SET 
    fname = '{$fname}', 
    lname = '{$lname}', 
    email = '{$email}', 
    pass = '{$pass}', 
    cpass = '{$cpass}', 
    role = '{$role}' WHERE id = '{$id}'";

    $result1 = mysqli_query($conection,$query) or die ("query faild.");
    if($result1){
        header("location: newuser.php");
    }

}



?>


<?php 

include"includes/config.php";

$user_id = $_REQUEST['id'];

$query2 = "SELECT * FROM admins WHERE id = {$user_id} ";
$result = mysqli_query($conection, $query2) or die ("Failed");
$count = mysqli_num_rows($result);

if($count > 0){
    while($row = mysqli_fetch_assoc($result)){


?>







                                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="id" class="form-control" id="inputFirstName" type="hidden" value="<?php echo $row ['id'] ?>"  />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="fname" class="form-control" id="inputFirstName" type="text" value="<?php echo $row ['fname'] ?>" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name="lname" class="form-control" id="inputLastName" value="<?php echo $row ['lname'] ?>" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="email" class="form-control" id="inputEmail" value="tayef@gmail.com" type="<?php echo $row ['email'] ?>" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="pass" class="form-control" id="inputPassword" value="<?php echo $row ['pass'] ?>" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="cpass" class="form-control" id="inputPasswordConfirm" value="<?php echo $row ['cpass'] ?>" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputPasswordConfirm">Role</label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        
                                                        <select name="role" value="<?php echo $row ['role'] ?>" class="form-control" id="inputPasswordConfirm" type="password"  >

                                                           <?php 
                                                           
                                                                if($row['role']== 1){

                                                                   echo "<option value='0' selected >Admin</option>";
                                                                   echo "<option value='1'>Moderator</option>";
                                                                
                                                                }else{

                                                                    echo "<option value='0'>Admin</option>";
                                                                    echo "<option value='1' selected >Moderator</option>";
                                                                
                                                                }
                                                           
                                                           ?>

                                                        </select>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                            
                                                <input type="submit" name="submit" value="Update Account"  class="btn info_btn bg-primary" >
                                            </div>
                                        </form>




<?php 

            }
        }


?>





                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
