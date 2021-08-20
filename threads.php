<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>uDiscuss</title>
</head>

<body>
  <!-- navbar  -->
  <?php require '/xamp/htdocs/myforum/partials/navbar.php'; ?>
  <?php include '/xamp/htdocs/myforum/partials/_dbconnect.php' ?>
  <!-- corousal -->
  <?php 
  $id=$_GET['catid'];
  $sql= "SELECT * FROM `categories` WHERE categories_id=$id ";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)){
    $catname=$row['categories_name'];
    $catdesc=$row['categories_des'];

  }
  ?>

  <div class="container my-4">
    <div class="jumbotron">
      <h1 class="display-4">Welcome to <?php echo $catname?> forums!</h1>
      <p class="lead"><?php echo $catdesc?></p>
      <hr class="my-4">
      <p>No Spam / Advertising / Self-promote in the forums. ...<br>
        Do not post copyright-infringing material. ...<br>
        Do not post “offensive” posts, links or images. ...<br>
        Do not cross post questions. ...<br>
        Do not PM users asking for help. ...<br>
        Remain respectful of other members at all times.<br></p>
      <p>this is peer to peer forum for discussing knowledge between each other</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="https://www.google.com" role="button">Learn more</a>
      </p>
    </div>
  </div>

  <div class="container">
    <h2 class="py-2">Browse Question</h2>
    <div class="media">
      <img src="download.jpg" class="mr-3" width="40px" alt="image not found">
      <div class="media-body">
        <h5 class="mt-0">Unalbe to insatll perl module in windows</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
    <div class="media">
      <img src="download.jpg" class="mr-3" width="40px" alt="image not found">
      <div class="media-body">
        <h5 class="mt-0">Unalbe to insatll perl module in windows</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
  </div>

  <?php include '/xamp/htdocs/myforum/partials/footer.php'; ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</body>

</html>