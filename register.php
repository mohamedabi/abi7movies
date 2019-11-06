<?php
ob_start();
session_start(); // start a new session or continues the previous
if( isset($_SESSION['users'])!="" ){
header("Location: home.php"); // redirects to home.php
}
include_once 'dbconnect.php';
$error = false;
$name=" ";
$email=" ";
$pass=" ";
if ( isset($_POST['btn-signup']) ) {

$name = trim($_POST['name']);
$name = strip_tags($name);

$name = htmlspecialchars($name);
$email = trim($_POST['email']);
$email = strip_tags($email);
$email = htmlspecialchars($email);
$pass = trim($_POST['pass']);
$pass = strip_tags($pass);
$pass = htmlspecialchars($pass);
if (empty($name)) {
$error = true;
$nameError = "Please enter your full name.";
} else if (strlen($name) < 3) {
$error = true;
$nameError = "Name must have at least 3 characters.";
} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$error = true;
$nameError = "Name must contain alphabets and space.";
}
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
$error = true;
$emailError = "Please enter valid email address.";
} else {
$query = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$count =mysqli_num_rows($result);
if($count!=0){
$error = true;
$emailError = "Provided Email is already in use.";
}
}
if (empty($pass)){
$error = true;
$passError = "Please enter password.";
} else if(strlen($pass) < 6) {
$error = true;
$passError = "Password must have atleast 6 characters.";
}
$password = hash('sha256', $pass);
if( !$error ) {

$query = "INSERT INTO users(name,email,pass) VALUES('$name','$email','$password')";
$res = mysqli_query($conn, $query);

if ($res) {
$errTyp = "success";
$errMSG = "Successfully registered, you may login now";
unset($name);
unset($email);
unset($pass);
} else {
$errTyp = "danger";
$errMSG = "Something went wrong, try again later...";
}

}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
      <h2 style="margin-left: 200px;">Sign Up</h2>
      <?php
      if ( isset($errMSG) ) {
      
      ?>
      <div class="alert alert-<?php echo $errTyp ?>">
        <?php echo $errMSG; ?>
      </div>
      <?php
      }
      ?>
      
      <div style="width: 450px; height: 350px; margin: 35px ; background-color: rgba(90,32,32,0.2); border-radius: 30px;" ><br>
        <div class="form-group row" style="text-align: center; ">
          <label for="inputPassword3" class="col-sm-2 col-form-label"> &nbsp;&nbsp;Username</label>
          <div class="col-sm-8">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>">
            <span class="text-danger"><?php echo $nameError; ?></span>
          </div>
        </div>
        <div class="form-group row" style="text-align: center;">
          <label for="inputEmail3" class="col-sm-2 col-form-label">&nbsp;&nbsp;Email</label>
          <div class="col-sm-8">
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
            
            <span class="text-danger"><?php echo $emailError; ?></span>
          </div>
        </div>
        <div class="form-group row" style="text-align: center;">
          <label for="inputPassword3" class="col-sm-2 col-form-label">&nbsp;&nbsp;Password</label>
          <div class="col-sm-8">
            <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
            
            <span class="text-danger"><?php echo $passError; ?></span>
          </div>
        </div>
        <br>
        <div class="form-group row"style="text-align: center;">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success" name="btn-signup" style="font-size: 20px;">Sign Up</button>
          </div>
        </div>
        <hr>
        &nbsp;&nbsp;     <a href="abilofilm.php" style="font-size: 25px;">Sign In Here...</a>
      </div>
    </form>