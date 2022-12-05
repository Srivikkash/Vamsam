
<?php include "header.php" ?>
<?php include "nav.html"?>


    
</head>
<body>
    <button type="button" class="btn btn-warning" id="608" onclick="window.location='view360.php?landid=608'">608 <br> view</button>
    <button type="button" class="btn btn-warning" id="609" onclick="window.location='view360.php?landid=609'">609 <br> view</button>
    <button type="button" class="btn btn-warning" id="610" onclick="window.location='view360.php?landid=610'">610 <br> view</button>
    <button type="button" class="btn btn-warning" id="637" onclick="window.location='view360.php?landid=637'">637 <br> view</button>


    <script>
        var users = new Array;
       
    <?php
$sql= "SELECT landid from land where rstatus = 1 ";

      //  displaying all the data retrieved from the database using while loop
      if ($result = $conn -> query($sql)) {
        $i=0;
        while ($row = $result -> fetch_row()) {
            echo "users[$i]='".$row[0]."';";
            // echo "console.log(users['$i']);";
            $i++;

        }

    }
          
?>

for(i=0;i<=users.length; i++) 
{
    document.getElementById(users[i]).classList.add("btn-danger");
}   
    </script>
   
</body>
</html>