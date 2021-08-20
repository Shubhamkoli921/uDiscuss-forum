<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Contact</title>

</head>

<body>
  <?php require '/xamp/htdocs/myforum/partials/navbar.php'; ?>
  <h1>Enter Your Details And I Will Get Touch To You Soon!</h1>
  <div class="container">
    <form action="handlecontact.php" method="post">

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter name">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="Email" class="form-control" id="Email" name="Email" placeholder="Enter Email">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">phone</label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter number">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Description</label>
        <input type="text" class="form-control" id="Desc" name="Desc" placeholder="Add Description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
  <h1>Follow me</h1>
  <?php include '/xamp/htdocs/myforum/partials/follow.php' ?>
  <?php include '/xamp/htdocs/myforum/partials/footer.php'; ?>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>