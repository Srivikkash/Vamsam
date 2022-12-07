<!-- Header -->
<?php include "../header.php"?>
</head>
<body>

<?php
if (!isset($_GET['user']))
    header("Location: ../login.php");
?>
  <div class="container">
    <h1 class="text-center" >Vamsam Registered People (ADMIN)</h1>

<button type="button" class="btn btn-warning" onclick="window.location='../index.php' " style="display:block;">Home</button>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Plot ID Number</th>
              <th  scope="col">Square Feet</th>
              <th  scope="col">Rate</th>
              <th  scope="col">Status</th>
              <th  scope="col" colspan="3" class="text-center">Modify</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM land";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['landid'];                
              $sqfeet = $row['sqfeet'];        
              $prize = $row['prize'];  
              $status = $row['rstatus']; 
              $rstatus=''; 
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
              echo " <td > {$rstatus}</td>";

              echo " <td class='text-center'> <a href='view.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
              
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<form action="../index.php" id="back" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-5" value="Back">
        </div>
    </form>

<!-- Footer -->
<?php include "../footer.php" ?>