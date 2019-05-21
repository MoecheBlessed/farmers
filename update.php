<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost", "root", "IAMHEADEDFOR", "farmers") or die(mysqli_error($conn));
$query=mysqli_query($conn, "select * from farmtb where id='$id'") or die(mysqli_error($conn));
foreach($query as $record){
    $fname=$record['fname'];
    $lname=$record['lname'];
    $location=$record['location'];
    $gender=$record['gender'];
    $crops=$record['crops'];
    $animals=$record['animals'];
}
?>


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Farmer</h4>
                    </div>
                    <div class="content">
                        <form name="farmer-form" action="" method="POST">
                            <div class="row">
                            <div class="col-md-5">
                            <div class="form-group">
                            <label>Farmer Id</label>
                            <input type="text" name="id" value="<?php echo$id?>" readonly=true>
                            </div>
                            
                            </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control"  name="fname" value="<?php echo$fname ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control"  name="lname" value="<?php echo$lname ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control"  name="location" value="<?php echo$location ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="text" class="form-control"  name="gender" value="<?php echo$gender ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Crops Grown</label>
                                        <input type="text" class="form-control"  name="crops" value="<?php echo$crops ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Animals Reared</label>
                                        <input type="text" class="form-control"  name="animals" value="<?php echo$animals ?>">
                                    </div>
                                </div>
                                
                                
                            </div>

                            <input type="submit" name="submit" value="add"class="btn btn-info btn-fill pull-right" >
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


<?php
if(isset($_POST['submit'])){
    $upfname=$_POST['fname'];
    $uplname=$_POST['lname'];
    $uplocation=$_POST['location'];
    $upgender=$_POST['gender'];
    $upcrops=$_POST['crops'];
    $upanimals=$_POST['animals'];
    $update=mysqli_query($conn,"update farmer set fname='$upname', lname='$uplname', location='$uplocation', gender='$upgender', crops='$upcrops', animals='$upanimals'  where id='$id'")
    or die(mysqli_error($conn));

    if($update){
        ?>
        <script>
        windows.alert("success");
        windows.location.href="list.php";
        </script>
        
        
        <?php
    }else{
        echo "fail";
    }
}

?>