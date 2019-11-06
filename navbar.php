
   <?php
include("index.php");
include("link.php");



   ?>
<!DOCTYPE html>
<html>
<head>
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
    <a class="navbar-brand" href="#" onclick="msgthanks();" id="thanksname" style="font-size: 25px; font-family: fantasy;">abi7movies

</a>
&nbsp;&nbsp;
<iframe class="rounded-pill" src="https://giphy.com/embed/hrFNXb3nZIGm4Aua4U" width="100"  height="50" frameBorder="0"  ></iframe>  

<!--  
<iframe class="rounded-pill" src="https://giphy.com/embed/3osxYzXXuBSzXZ1Np6"  width="90"  height="50" frameBorder="0" ></iframe>

-->
 &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
<a href="contact.php" class="btn btn-outline-dark" style="font-family: fantasy; font-size: 20px;">للتواصل</a>
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
           
          
            
            <input type="email" name="email" class="form-control mr-sm-2" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
        
            <span class="text-danger"><?php echo $emailError; ?></span>
  
          
            <input type="password" name="pass"class="form-control mr-sm-2" placeholder="Your Password" maxlength="15" />
        
           <span class="text-danger"><?php echo $passError; ?></span>
&nbsp;&nbsp;&nbsp;
            <button type="submit" name="btn-login" class="btn btn-warning my-2 my-sm-0">Sign In</button>
          &nbsp;&nbsp;&nbsp;
              <a  class="btn btn-danger my-2 my-sm-0" href="register.php" >Sign Up</a>



    </form>

  </div>
  </div>
</nav>



<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style=" height: 415px;">

  <div class="carousel-inner">
   <br>
<br>

    <div class="carousel-item active">
                    <h1 style="float:right; font-family: cursive; margin: 50px 50px; color: #f2f7f9;">
                    <i class="fas fa-laptop-code"></i>

الموقع قيد التطوير  <br>

<br>
</h1>

      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Aquaman 2018<br>
                 Bluray الجودة</h4>
              <p>يُدرك (آرثر كاري) أنه وريث مملكة (أتلانتيس) تحت الماء، وعليه أن يرنو إلى قيادة شعبه ليصبح بطلهم الأول، ومن ثَم بطل العالم.<br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="Aquaman.php"> <i class="far fa-eye"></i>   المشاهدة   الان </a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/a11.png"class="mx-auto" alt="slide">
            </div>

          </div>

        </div>

      </div>
    </div>



    <div class="carousel-item">
                          <h1 style="float:right; font-family: cursive; margin: 50px 50px; color: #f2f7f9;">
                    <i class="fas fa-laptop-code"></i>

الموقع قيد التطوير </h1>
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Bumblebee 2018 <br>
                  Bluray الجودة</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="mumblebee.php"><i class="far fa-eye"></i>    المشاهدة   الان </a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/a22.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="carousel-item">
                          <h1 style="float:right; font-family: cursive; margin: 50px 50px; color: #f2f7f9;">
                    <i class="fas fa-laptop-code"></i>

الموقع قيد التطوير </h1>
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>spider man 2018 <br>
                  Bluray الجودة</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="spiderman2017.php"> <i class="far fa-eye"></i>   المشاهدة   الان </a> </div>
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
                          <h1 style="float:right; font-family: cursive; margin: 50px 50px; color: #f2f7f9;">
                    <i class="fas fa-laptop-code"></i>

الموقع قيد التطوير </h1>
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Avengers: Endgame<br>
                 Bluray الجودة</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
               اذا كان لديك اي اراء او مقترحات حول الموقع يرجى التواصل معي اما الان اتركك لمشاهدة ممتعة.</p>
              <a href="Avengers.php"> <i class="far fa-eye"></i>   المشاهدة   الان </a> </div>
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

<body>
  


<script type="text/javascript" src="mein.js"></script>



