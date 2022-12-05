<?php include "header.php"?>

<?php include "nav.html" ?>
</head>

<body>
    <div class="container">
<h1 class="text-center">Admin Login</h1>
  <div class="container ">
    <form action="validate.php" method="post">
      <div class="form-group">
        <label for="uname" >User Name</label>
        <input type="text" name="uname" class="form-control" required='' autocomplete="off">
      </div>

      <div class="form-group">
        <label for="sqfeet" >PassWord</label>
        <input type="password" name="pwd"  class="form-control" required='' autocomplete="off">
      </div>

      <div class="form-group">
         <input type="submit"  name="submit" class="btn btn-primary mt-2" value="submit">
      </div>
    </form>    

    <div class="container text-center mt-5">
      <a href="index.php" class="btn btn-warning mt-5"> Back </a>
    <div>
  </div>
</div>
</div>
</body>

</html>