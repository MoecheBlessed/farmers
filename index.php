<?php
$conn=mysqli_connect("localhost", "root", "IAMHEADEDFOR", "farmers")or die(mysqli_error($conn));

if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
}
$query=mysqli_query($conn,"INSERT INTO logintb(id,username,password)
 VALUES(null,'$user','$pass')") or die(mysqli_error($conn));


?>