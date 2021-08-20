<?php
// $showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '/xamp/htdocs/myforum/partials/_dbconnect.php';
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $mobile=$_POST['phone'];
    $Desc=$_POST['Desc'];

    $sql = "INSERT INTO `contact` (`name`, `email`, `mobile`, `descr`, `dt`) VALUES ('$name', '$email','$mobile', '$Desc', current_timestamp()); ";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: /myforum/contact.php?contactsuccess=true");

    }
    else{
        echo 'something went wrong';
    }
}
?>