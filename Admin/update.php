<!-- Footer -->
<?php include "../header.php"?>
</head>
<body>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   
   if(!isset($_GET['user_id']))
    {
    header("Location: ../login.php");
    }
    $userid = $_GET['user_id']; 

      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM land WHERE landid = '$userid' ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['landid'];                
          $sqfeet = $row['sqfeet'];        
          $prize = $row['prize'];
          $rname = $row['rname'];
          $rphone = $row['rphone']; 
          $rdate = $row['rdate'];  
          $status = $row['rstatus'];  
          if ($status == 1){
            $rstatus = 'YES';
          }
          else{
            $rstatus = 'NO';
          }
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {              
        $sqfeet = $_POST['sqfeet'];        
        $prize = $_POST['prize'];
        $rname = $_POST['rname'];
        $rphone = $_POST['rphone'];  
        $rstatus = $_POST['rstatus'];  
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE `land` SET `sqfeet`='$sqfeet',`prize`='$prize',`rphone`=$rphone,`rdate`=current_timestamp(),`rname`='$rname',`rstatus`='$rstatus' WHERE landid = '$userid'";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Vamsam Registered People(Admin)</h1>

<button type="button" class="btn btn-warning" onclick="window.location='../index.php' " style="display:block;">Home</button>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
      <b> <label for="landid" >Plot Id:</label>
      <i><label for="landid"><?php echo $id  ?></label></i>
      </div>

      <div class="form-group">
        <label for="sqfeet" >Square Feet</label>
        <input type="text" name="sqfeet"  class="form-control" value="<?php echo $sqfeet  ?>">
      </div>

      <div class="form-group">
        <label for="prize" >Rate</label>
        <input type="text" name="prize"  class="form-control" value="<?php echo $prize  ?>">
      </div>    

      <div class="form-group">
        <label for="rname" >Leader Name</label>
        <input type="text" name="rname"  class="form-control" value="<?php echo $rname  ?>" required=''>
      </div> 
      
      <div class="form-group">
        <label for="rphone" >Phone Number </label>
        <input type="number" name="rphone"  class="form-control" value="<?php echo $rphone  ?>" required=''>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rstatus" id="rstatus1" value="0">
        <label class="form-check-label" for="rstatus1">Not Registered</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rstatus" id="rstatus2" value="1">
        <label class="form-check-label" for="rstatus2">Registered</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rstatus" id="rstatus3" value="-1">
        <label class="form-check-label" for="rstatus2">Block</label>
      </div>

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
       
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <form action="home.php?user=admin" id="back" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-5" value="Back">
        </div>
    </form>

<!-- Footer -->
<?php include "../footer.php" ?>