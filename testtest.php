<?php
require_once 'dbconnect.php';
include("link.php");


?>
<?php
$sql = "SELECT * FROM customer ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>abilofilm</title>
  </head>
  <body >
          <br>

      <div class="container-fluid" style="direction: rtl;">

  <div class="col-12 .col-sm-6 .col-lg-8">


<div class="card text-center" >


    <h5 class="card-title"><a href="series.php"><button type="button" class="btn btn-outline-danger "><i class="fas fa-undo"></i>    الرجوع      </button></a>
      <hr>


      <a href="https://openload.co/f/7njN74NL4ro/Money.Heist.S03E02.1080p.WEB.Shahid4U.NeT.mkv.mp4"><button type="button" class="btn btn-outline-success" style="text-align: center;"><i class="fas fa-download"></i>


    التحميل الان      </button></a>
    <hr>


    <a href="abilofilm.php"><button type="button" class="btn btn-outline-dark" ><i class="fas fa-home"></i>&nbsp; الصفحة الرئيسية</button></a>

    </h5>

<div class="col-12 .col-sm-6 .col-lg-8">

    
        <h5 class="card-header" style="text-align: center;">مشاهدة اعلان الفيلم
        </h5>
        <div class="card-body">
<iframe width="200" height="200" src="https://www.youtube.com/embed/Pws-LN_-riM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
</div>
    
      </div>

  </div>
<!--   -->

  <div class="col-12 .col-sm-6 .col-lg-8">


      <div class="card "  style=" float: right; margin-left: 10px;" >
        <h5 class="card-header" style="text-align: center;">مشاهدة اعلان الفيلم
        </h5>
        <div class="card-body">
<iframe width="200" height="200" src="https://www.youtube.com/embed/Pws-LN_-riM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <br><hr>
        <br><hr>
        <hr><hr><br>
      </div>
    </div>
    <!--  -->
    <!--  -->


  

<!--  -->
  <div class="col-12 .col-sm-6 .col-lg-8">

      <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/series1/a2.jpg" style="opacity: 0.8;" onmouseover="ol2(this);"
            onmouseout="ol(this) ;"
            class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;"> <?php echo "[name]"; ?></h5>
              <table class="table table-hover">

                <tbody>
                  <tr>
                    <th scope="row">اللغة</th>
                    <td colspan="2"><i class="fas fa-language"></i>&nbsp;ألانكليزية    
                   
                  </td>

                  </tr>

                  <tr>
                    <th scope="row">النوع</th>
                    <td colspan="2"><i class="fas fa-theater-masks"></i>&nbsp; دراما, غموض</td>
                  </tr>
                  <tr>
                    <th scope="row">التقييم</th>
                    <td colspan="2"><i class="fas fa-star-half-alt"style="color: yellow;"></i>

<i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i> &nbsp;7,9/10 &nbsp;<i class="fab fa-imdb" style="font-size: 30px; float: left;"></i>

 </td>
                  </tr>
                  <tr>
                    <th scope="row">المدى</th>
                    <td colspan="2"> <i class="far fa-clock"></i>&nbsp; 1h  </td>
                  </tr>
                  <tr>
                    <th scope="row">الجودة</th>
                    <td colspan="2"><div class="rounded" style="width: 120px;  background-color:rgba(44, 183, 58, 0.7); letter-spacing: 1px;  text-align: center; float: left; ">Webrip 720p</div></td>
                  </tr>

                </tbody>
              </table>
              <p class="card-text">(كلاي جينسن) مراهق يعود إلى منزله بعد يومه المدرسي ليجد صندوقًا غامضًا مُعنوَّنًا بإسمه أمام عتبة المنزل.. يكتشف كلاي أن ما بداخل الصندوق مجموعة من شرائط الكاسيت المُسجلّة بواسطة زميلته وحبيبته السابقة (هانا بيكر)، والتي انتحرت منذ أسبوعين، وفي تلك الشرائط تكشف هانا عن قصة انتحارها والأسباب التي دفعتها لذلك والأشخاص التي ساهمت في اتخاذها قرار إنهاء حياتها.
</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  
 </div>
            </div>
          </div>
        </div>
      </div>

</div>
<!-------  -->

  



<div class="container text-center my-3" style="direction: rtl;" >
    <h3>مشاهدة جميع حلقات مسلسل 13 Reasons Why  الموسم الاول
</h3>
  <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100 " role="listbox" >
        <div class="carousel-item row no-gutters active">

 <div class="col-12 .col-sm-6 .col-lg-8">

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
  <div class="tabbable tabs-left">


   <a href="#about" data-toggle="tab">
           <div class="col-2 float-left">
   <img class="img-fluid rounded-pill" src="img/series1/a2.jpg?" style=" opacity: 0.5;" onmouseover="ol2(this);"
            onmouseout="ol(this) ;">  <h5>الحلقة (1)</h5>
           
          </div></a>


          <li><a href="#services" data-toggle="tab">Services</a></li>
          <li><a href="#contact" data-toggle="tab">Contact</a></li>
          <li class="active"><a href="#home" data-toggle="tab">Home</a></li>

        </ul>
        
              </div>
            </div>
    </div>
</div>


  

                <a href="https://bootsnipp.com/snippets/xZjR"><div class="col-2 float-left"><img class="img-fluid rounded-pill" src="img/series1/a2.jpg?" style="opacity: 0.5;" onmouseover="ol2(this);"
            onmouseout="ol(this) ;"><h5>الحلقة (2)</h5></div></a>

  </div>
            </div>
 
<!--   -->
   <div class="col-12 .col-sm-6 .col-lg-8">

    <div class="card text-center">
      <div class="card-header" style="font-family: serif; font-size: 30px;">
           13 Reasons Why 1
      </div>
    </div>
    <div class="col-12 .col-sm-6 .col-lg-8">

      <div class="card-body">
                <div class="tab-content">

  <div class="tab-pane" id="about"> 
            <div class="">
              <h1>About 1</h1>


     <iframe src="https://openload.co/embed/L9fVYDUNVyY/" scrolling="no" frameborder="0" width="700" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>                 
            </div>
          </div>
        
            <div class="tab-pane" id="contact"> 
            <div class="">
              <h1>Contact 3</h1>
      <iframe src="https://openload.co/embed/7njN74NL4ro/" scrolling="no" frameborder="0" width="700" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>              </div>
            </div>
          </div>
      </div>

       <div class="tab-pane" id="services"> 
            <div class="">
              <h1>Services 2</h1>
      <iframe src="https://openload.co/embed/7njN74NL4ro/" scrolling="no" frameborder="0" width="700" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>              </div>
            </div>
          </div>
      </div>
         <div class="col-12 .col-sm-6 .col-lg-8">

<div class="accordion" id="accordionExample" >
  <div class="card"style="float: right; margin-top: -20px;">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
المشاهدة ألان        </button>
      </h2>
    </div>
</div>

   <div class="col-12 .col-sm-6 .col-lg-8">

  <div class="card" >
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
sdfgfn
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
cvbcvb
      </div>
    </div>
  </div>
</div>
</div>


</div>
    </div>
  </div>
  <!--   -->
 






  <script>
  
  function ol(img) {
  img.style.opacity = 0.8;
  }
  function ol2(img) {
  img.style.opacity = 1;
  
  }




  </script>


</body>
</html>