<?php
ob_start();
session_start();
require_once 'dbconnect.php';
include("link.php");

// if session is not set this will redirect to login page
if( !isset($_SESSION['users']) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE id=".$_SESSION['users']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Welcome - <?php echo $userRow['name']; ?></title>
  <meta charset="utf-8">


  <title>abilofilm</title>
<link rel="stylesheet" type="text/css" href="navbar.css">






<header>

  <div style="direction: rtl;">


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#" onclick="msgthanks();" id="thanksname">abilofilm</a>
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
        <ul class="navbar-nav mr-auto ">
          <span id="Head1" style="font-family: cursive; color: green; font-size: 30px;" >  مشاهدة   ممتعة  &nbsp;<?php echo $userRow['name']; ?>&nbsp; <i class="far fa-grin-hearts"style="color:#D12626;"></i>

</span>
    </ul>

<h7 id="thanksserr"></h7>
    <a class="navbar-brand"  id ="abi111"></a>  

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
    </ul>


   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" class="form-inline my-2 my-lg-0">
              
           <?php
  if ( isset($errMSG) ) {
echo $errMSG; ?>
              
               <?php
  }
  ?>
           


<i style="color: #47C421;" class="fas fa-user-alt"></i>

&nbsp;
           Welcome <?php echo $userRow['name']; ?>&nbsp;&nbsp;






            
           <a href="logout.php?logout" class="btn btn-danger my-2 my-sm-0">Sign Out</a>

    </form>

  </div>
  </div>
</nav>



<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style=" height: 415px;">

  <div class="carousel-inner">
   <br>
<br>

    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Aquaman 2018<br>
                 Bluray الجودة</h4>
              <p>يُدرك (آرثر كاري) أنه وريث مملكة (أتلانتيس) تحت الماء، وعليه أن يرنو إلى قيادة شعبه ليصبح بطلهم الأول، ومن ثَم بطل العالم.<br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>

              <a href="test2.php">    المشاهدة   الان </a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/a11.png"class="mx-auto" alt="slide"></div>

          </div>
        </div>
      </div>
    </div>



    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Bumblebee 2018 <br>
                  Bluray الجودة</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="test2.php">    المشاهدة   الان </a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/a22.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>spider man 2018 <br>
                  Bluray الجودة</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="test2.php">    المشاهدة   الان </a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/a44.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>

<!-- <<  reserve  >>

    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>aladdin 2019 <br>
                  Bluray الجودة</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="test2.php">    المشاهدة   الان </a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/a7.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>

-->

    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Avengers: Endgame<br>
                 Bluray الجودة</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="test2.php">    المشاهدة   الان </a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/a33.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="margin-top: 20px;"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only" >Previous</span> </a> 

  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"  style="margin-top: 20px;"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

<!--slide end--> 
</div>
</header>
   


<script > $('#myCarousel').carousel({
    interval: 3000,
 })</script>
</head>
<body style="height:auto;">

  
       





  <div style="direction: rtl;">

<div class="container-fluid">

</div>
     <nav class="navbar sticky-top navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <a  class="btn btn-outline-success my-2 my-sm-0" href="abilofilm.php"><h50><i class="fas fa-home"></i>&nbsp;

الصفحة الرئيسية </h50></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="btn btn-outline-info" href="movies.php" ><i class="fas fa-film"></i>&nbsp; ألافلام </a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="btn btn-outline-info" href="Series.php"><i class="fas fa-tv"></i>&nbsp; المسلسلات</a>
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    -->
    </ul>
        <ul class="navbar-nav mr-auto">

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">   
             &nbsp;
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>

البحث</button>
    </ul>
    </form>
  </div>
</nav>

<div class="container-fluid"><br>







<?php
include("mbox.php");

?>



<script type="text/javascript" src="mein.js"></script>
</div>
</div>


  
</body>
</html>
<?php ob_end_flush(); ?>