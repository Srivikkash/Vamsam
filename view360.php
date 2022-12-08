<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="image/vamsam_logo.png" type="image/x-icon">
<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>VASAM PROPERTY DEVELOPERS</title>
<link rel="stylesheet" type="text/css" href="style.css">


  <link rel="stylesheet" href="button/button.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aframe/0.7.1/aframe.min.js"></script>

</head>
<body>
	<?php $landid=$_GET["landid"]?>
<?php include "button/share.html" ?>
	<a-scene>
	<img id="panorama" src="<?php echo "image_land/l".$landid.".jpeg"?>"/>
	<a-sky src="#panorama" rotation="0 -90 0"></a-sky>
	</a-scene>

	<form action="index.php" id="back" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Back">
        </div>
    </form>
<!-- Footer -->
	</body>
	</html>