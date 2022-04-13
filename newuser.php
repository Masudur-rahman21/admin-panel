<?php include"includes/header.php" ;?>

<?php 

if($_SESSION['role'] == '0'){
    header("location: index.php");
}

?>





            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Modaretor</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard / Modaretors</li>
                        </ol>
                        <div class="card mb-4">
                            
                            

<!-- sibscriber list ---------------------------------------------->

                        <div class="container-fluid">
                            <div class="row header subscriber">
                               <span>Add Modaretor</span>
                            </div>





<?php 

    include"includes/config.php";

    $query2 = "SELECT * FROM admins ORDER BY id ";
    $result = mysqli_query($conection, $query2) or die ("Failed");
    $count = mysqli_num_rows($result);

    if($count > 0){



?>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Role</th>
                                        <th>Add</th>
                                        <th>Remove</th>
                                </thead>
                                <tbody>
<?php 
    $serial = 1;
    while($row = mysqli_fetch_assoc($result)){
?>
                                    <tr>
                                        <td> <?php echo $serial++ ?> </td>
                                        <td> <?php echo $row ['fname']." ".$row ['lname'] ?> </td>
                                        <td><?php echo $row ['email'] ?></td>
                                        <td>
                                        <?php
                                        
                                        
                                        if($row['role']== 1){
                                            echo"Admin";
                                        }else{
                                            echo"Moderator";
                                        }
                                        
                                        ?>
                                        </td>
                                        <td><a class="btn info_btn"  href="updateid.php?id=<?php echo $row ['id'] ?>"><i class="fa-solid fa-plus"></i></a></td>
                                        <td><a onclick="return confirm ('yuo are sure')" class="btn info_btn"  href="delete.php?id=<?php echo $row ['id'] ?>"><i class="fa-regular fa-trash-can"></i></a></td>
                                    </tr>
<?php } ?>
                                    
                                </tbody>
                            </table>

<?php } ?>





                        </div>



                    </div>
                </main>
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
        <script src="js/dashbord.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
