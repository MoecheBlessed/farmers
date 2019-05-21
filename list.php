<?php
  $conn=mysqli_connect("localhost","root","IAMHEADEDFOR","farmers")or die(mysqli_error($conn));
  $query=mysqli_query($conn,"select * from farmtb")or die(mysqli_error($conn));
  
?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Farmers</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-bordered" >
                                    <thead>
                                        <th>id</th>
                                        <th>fname</th>
                                    	<th>lname</th>
                                    	<th>location</th>
                                    	<th>gender</th>
                                        <th>crops_grown</th>
                                        <th>animals_reared</th>
                                    	
                                    </thead>
                                    <tbody>
                                    <?php foreach($query as $record){?>
                                        <tr>
                                        	<td><?php echo$record['id']?></td>
                                        	<td><?php echo$record['fname']?></td>
                                        	<td><?php echo$record['lname']?></td>
                                            <td><?php echo$record['location']?></td>
                                            <td><?php echo$record['gender']?></td>
                                            <td><?php echo$record['crops_grown']?></td>
                                            <td><?php echo$record['animals_reared']?></td>
                                        
                        
                                            <td> 
                                              <a href="update.php ?id=<?php echo$record['id']?>" class="btn btn-success">Update</a> 
                                              <a href="delete.php ?id=<?php echo$record['id']?>" class="btn btn-danger">Delete</a> 
                                            <td>
                                        </tr>
                                        <?php } ?>    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
</div>

