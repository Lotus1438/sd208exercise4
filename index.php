<?php
session_start();
if (isset($_POST["btn"])){

$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['email'] = $_POST['email'];

$Fname = strlen($_POST['fname']);
$Lname = strlen($_POST['lname']);


if ($Fname < 2 || $Fname > 25){
    $fNameError = "First Name must not atleast 2 or exceed 25 characters";
}
if ($Lname < 2 || $Lname > 25){
    $lnameError = "Last Name must not atleast 2 or exceed 25 characters";
}
//email validation function:
// $name = test_input($_POST["name"]);
// if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//   $nameErr = "Only letters and white space allowed";
// }

}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="bg container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="POST" style="width:32%" action="index.php">
            <div class="form-group ">
                <label>First Name</label>
                <p style = "color:red"><?php echo $fNameError??""?></p>
                <input type="text" name="fname" class="form-control" place-holder="First Name" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <p style = "color:red"><?php echo $lNameError??""?></p>
                <input type="text" name="lname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <p style = "color:red"><?php echo $emailError??""?></p>
                <input type="email" name="email" class="form-control" required>
            </div>
            
            <div class="input-group">
                <button type="submit" name="btn" class="btn">Register </button>
            </div>
        
        </form>
    </div>


</body>
</html>