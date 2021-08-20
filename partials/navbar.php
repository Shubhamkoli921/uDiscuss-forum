<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/myforum">uDiscuss</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/myforum">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '<form class="form-inline my-2 my-lg-0">
      <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
      </form>';
    }
    else echo'
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>
   
  </div>
</div>
</nav>';

include 'partials/loginmodal.php';
include 'partials/signup.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert" >
  <strong>Success!</strong> You can Login to website now.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if(isset($_GET['contactsuccess']) && ($_GET['contactsuccess']=="true")){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert" >
  Thank You for Your Response! Team uDiscuss
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
// else{
//   echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert" >
//   <strong>Success!</strong> you logged in, Thank u.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
 