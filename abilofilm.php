<?php
include("navbar.php");
require_once 'dbconnect.php';
include("link.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
<!-- Search Link -->
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
  </head>
  <body style="height:auto;">
    <div style="direction: rtl;"> 
      <div class="container-fluid">
      </div>
     <nav class="navbar sticky-top navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <a style="font-family: unset;"  class="btn btn-outline-dark my-2 my-sm-0" href="abilofilm.php"><h7><i class="fas fa-home"></i>&nbsp;

الصفحة الرئيسية </h7></a>
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

     <!--
        <ul class="navbar-nav mr-auto">
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  size="25"   onkeyup="showResult(this.value)" > 
 
             &nbsp;
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search" ></i>

البحث</button>
    </form>
    
        </ul>
-->


        <ul class="navbar-nav mr-auto">

<a href="#search" style="font-size: 20px; ">
  <i class="fa fa-search"></i> Search
</a>


<div id="search"> 

  <span class="close">X</span>
  <form role="search"  action="/search" method="get">
    <input value=""  type="search" placeholder="type to search" 
     onkeyup=" showResult(this.value)"/>
 <div id="livesearch" class="rounded-lg" style="color: #793535; background-color: rgba(217, 229, 219,0.5); margin-top: 350px; float: left; margin-left: 270px; text-align: left; width: 800px; font-family: sans-serif; " ></div>
  </form>
   

</div>
     </ul>

  </div>

</nav>




      <div class="container-fluid"><br>

            <h1 class="rounded" style=" width: 350px; text-align: center; font-family: cursive;  margin-right: 500px;
background-color: rgba(0,130,153,0.8);" ><i class="fas fa-medal" style="color: #E3D021;"></i>

 الافلام الاكثر مشاهدة</h1>

        <?php
        include("mbox.php");
        ?>
                <script>
          
          $(document).ready(function(){
  $('a[href="#search"]').on('click', function(event) {                    
    $('#search').addClass('open');
    $('#search > form > input[type="search"]').focus();
  });            
  $('#search, #search button.close').on('click keyup', function(event) {
    if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
      $(this).removeClass('open');
    }
  });            
});

        </script>
              <script type="text/javascript" src="mein.js"></script>
         <script type="text/javascript" src="scripts.js"></script>
      </div>
    </div>
  </body>
</html>