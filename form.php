<?php
$conn=mysqli_connect("localhost", "root", "IAMHEADEDFOR", "farmers")or die(mysqli_error($conn));

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $location=$_POST['location'];
    $gender=$_POST['gender'];
    $crops=$_POST['crops'];
    $animal=$_POST['animal'];
}
$query=mysqli_query($conn,"INSERT INTO farmtb(id,fname,lname,location,gender,crops_grown,animals_reared)
 VALUES(null,'$fname','$lname','$location', '$gender', '$crops', '$animal')") or die(mysqli_error($conn));

 if($query){
    ?>
    <script>
        window.alert("success");
        window.location.href="list.php";
    </script>
    <?php
 }else{
     echo"failed";
 }

?>