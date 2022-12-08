<script>
  var reg = new Array;      
    <?php
      $sql= "SELECT landid from land where rstatus = 1 ";
      //  displaying all the data retrieved from the database using while loop
      if ($result = $conn -> query($sql)) {
        $i=0;
        while ($row = $result -> fetch_row()) {
            echo "reg[$i]='".$row[0]."';";
            // echo "console.log(reg['$i']);";
            $i++;
        }
    }
    ?>
  for(i=0;i<=reg.length-1; i++) 
  {
      document.getElementById(reg[i]).classList.add("btn-danger");
  }   
</script>

<script>
  var not_reg = new Array;      
    <?php
      $sql= "SELECT landid from land where rstatus = 0 ";
      //  displaying all the data retrieved from the database using while loop
      if ($result = $conn -> query($sql)) {
        $i=0;
        while ($row = $result -> fetch_row()) {
            echo "not_reg[$i]='".$row[0]."';";
            // echo "console.log(not_reg['$i']);";
            $i++;
        }
    }
    ?>
  for(i=0;i<=not_reg.length-1; i++) 
  {
      document.getElementById(not_reg[i]).classList.add("btn-success");
  }   
</script>

<script>
  var block = new Array;      
    <?php
      $sql= "SELECT landid from land where rstatus = -1 ";
      //  displaying all the data retrieved from the database using while loop
      if ($result = $conn -> query($sql)) {
        $i=0;
        while ($row = $result -> fetch_row()) {
            echo "block[$i]='".$row[0]."';";
            // echo "console.log(block['$i']);";
            $i++;
        }
    }
    ?>
  for(i=0;i<=block.length-1; i++) 
  {
      document.getElementById(block[i]).classList.add("btn-warning");
  }   
</script>