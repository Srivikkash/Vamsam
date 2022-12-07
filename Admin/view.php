<!-- Header -->
<?php  include "../header.php" ?>  
</head>
<body>     

<div class="container">
<h1 class="text-center" >Vamsam Registered People (ADMIN)</h1>

<button type="button" class="btn btn-warning" onclick="window.location='../index.php' " style="display:block;">Home</button>
  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th  scope="col">Plot ID</th>
        <th  scope="col">Square Feet</th>
        <th  scope="col">Rate</th>
        <th  scope="col">Leader Name</th>
        <th  scope="col">Phone Number</th>
        <th  scope="col">Date</th>
        <th  scope="col">Status</th>
        </tr>  
    </thead>
      <tbody>
        <tr>

        <?php
        //  first we check using 'isset() function if the variable is set or not'
        //Processing form data when form is submitted
        if(!isset($_GET['user_id']))
    {
    header("Location: ../login.php");
    }
        if (isset($_GET['user_id'])) {
            $userid = $_GET['user_id']; 


            $query="SELECT * FROM land WHERE landid = '{$userid}' ";  
            $view_users= mysqli_query($conn,$query);            

      //  displaying all the data retrieved from the database using while loop
      while($row= mysqli_fetch_assoc($view_users)){
        $id = $row['landid'];                
        $sqfeet = $row['sqfeet'];        
        $prize = $row['prize'];
        $rname = $row['rname'];
        $rphone = $row['rphone'];
        $rdate = $row['rdate']; 
        $status = $row['rstatus'];  
        if ($status == 1){
          $rstatus = 'Registered';
        }
        elseif ($status == 0) {
          $rstatus = 'NOT Registered';
        }
        elseif ($status == -1) {
          $rstatus = 'Block';
        }
        else{
          break;
        }    

        echo "<tr >";
        echo " <th scope='row' >{$id}</th>";
        echo " <td > {$sqfeet}</td>";
        echo " <td > {$prize}</td>";
        echo " <td > {$rname}</td>";
        echo " <td > {$rphone}</td>";
        echo " <td > {$rdate}</td>";
        echo " <td > {$rstatus}</td>";
            }  
          }
          ?>
        </tr>  
      </tbody>
  </table>
</div>

<form action="home.php?user=admin" id="back" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-5" value="Back">
        </div>
    </form>
<!-- Footer -->
<?php include "../footer.php" ?>