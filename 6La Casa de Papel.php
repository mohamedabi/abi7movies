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
    <link rel="stylesheet" type="text/css" href="abilo.css">
    <title>abilofilm</title>
  </head>
  <body >
    <div class="container-fluid" style="direction: rtl;">
      <br>
      <div class="card mb-3" style="max-width: 1040px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/series1/a1.jpg" style="opacity: 0.8;" onmouseover="ol2(this);"
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
                    <td colspan="2"><i class="fas fa-language"></i>&nbsp;ألاسبانية</td>
                    <td></td>
                    <td> </td>
                  </tr>
                  <tr>
                    <th scope="row">النوع</th>
                    <td colspan="2"><i class="fas fa-theater-masks"></i>&nbsp;أ كشن, جريمة</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">التقييم</th>
                    <td colspan="2"><i class="fas fa-star-half-alt"style="color: yellow;"></i>

<i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i> &nbsp;8,6/10 &nbsp;<i class="fab fa-imdb" style="font-size: 30px; float: left;"></i>

 </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">المدى</th>
                    <td colspan="2"> <i class="far fa-clock"></i>&nbsp; 1h 10min </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">الجودة</th>
                    <td colspan="2"><div class="rounded" style="width: 120px;  background-color:rgba(44, 183, 58, 0.7); letter-spacing: 1px;  text-align: center; float: left; ">Webrip 720p</div></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <p class="card-text">مشاهدة مسلسل La Casa De Papel الموسم 3 الحلقة 6  فى اطار من الجريمة والاثاره حول مجموعه من اللصوص يعتدون على مصنع مونيدا وينفذون سطو اكثر مثالية فى تاريخ اسبانيا واخذ المنزل 2.400 مليون يورو

</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>


<!-------  -->
<div class="card text-center" style="width: 250px;  float: left; margin-top: -525px;">
  

    <h5 class="card-title"><a href="series.php"><button type="button" class="btn btn-outline-danger" style="margin-top: 10px;" ><i class="fas fa-undo"></i>    الرجوع      </button></a>
      <hr>


      <a href="https://openload.co/f/g4bjnddQJ8M/%5BCimaClub.Com%5D-La.casa.de.papel.S03E06.1080p.NF.WEB-DL.mkv.mp4"><button type="button" class="btn btn-outline-success" style="text-align: center;"><i class="fas fa-download"></i>


    التحميل الان      </button></a>
    <hr>


    <a href="abilofilm.php"><button type="button" class="btn btn-outline-dark" ><i class="fas fa-home"></i>&nbsp; الصفحة الرئيسية</button></a>

    </h5>


  </div>

 </div>
<!--   -->

      <div class="card"  style="width: 250px; margin-left: 15px; margin-top: -315px; float: left;" >
        <h5 class="card-header" style="text-align: center;">مشاهدة اعلان الفيلم
        </h5>
        <div class="card-body">
    <iframe width="200" height="200" src="https://www.youtube.com/embed/QgyU50vlbnU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="card text-center">
      <div class="card-header" style="font-family: serif; font-size: 30px;">
        جميع الحلقات
      </div>
      <div class="card-body" >
        <!-- 1--->
 <div  class="btn btn-secondary btn-lg active"  style="float: left; width: 70px; height: 70px;  display: block;
          margin-left: 20px;">
          <a href="1la casa de papel.php" style=" text-decoration: none;">
            <span  id="one" style=" color: #423A3A; font-size: 40px; font-family: sans-serif;">1</span>
          </a>
        </div>
        <!-- 1--->
        <!-- 2--->
        <div  class="btn btn-secondary btn-lg active"role="button"aria-pressed="true"  style="float: left; width: 70px; height: 70px;  display: block;
          margin-left: 20px;"
          >
          <a href="2la casa de papel.php" style=" text-decoration: none;">
            <span style=" color: #423A3A; font-size: 40px; font-family: sans-serif; ">2</span>
          </a>
        </div>
        <!-- 2--->
        <!-- 3--->
        <div class="btn btn-secondary btn-lg active"  style="float: left; width: 70px; height: 70px;  display: block;
          margin-left: 20px;"
          >
          <a href="3la casa de papel.php" style=" text-decoration: none;">
            <span style=" color: #423A3A; font-size: 40px; font-family: sans-serif; ">3</span>
          </a>
        </div>
        <!-- 3--->
        <!-- 4--->
        <div  class="btn btn-secondary btn-lg active"   style="float: left; width: 70px; height: 70px; display: block;
          margin-left: 20px;"
          >
          <a href="4la casa de papel.php" style=" text-decoration: none;">
            <span style=" color: #423A3A; font-size: 40px; font-family: sans-serif; ">4</span>
          </a>
        </div>
        <!-- 4--->
        <!-- 5--->
        <div  class="btn btn-secondary btn-lg active"   style="float: left; width: 70px; height: 70px; display: block;
          margin-left: 20px;"
          >
          <a href="5la casa de papel.php" style=" text-decoration: none;">
            <span style=" color: #423A3A; font-size: 40px; font-family: sans-serif; ">5</span>
          </a>
        </div>
        <!-- 5--->
        <!-- 6--->
        <div  class="btn btn-secondary btn-lg active"   style="float: left; width: 70px; height: 70px; display: block;
          margin-left: 20px;"
          >
          <a href="6la casa de papel.php" style=" text-decoration: none;">
            <span style=" color: #423A3A; font-size: 40px; font-family: sans-serif; ">6</span>
          </a>
        </div>
        <!-- 6--->
        <!-- 7--->
        <div  class="btn btn-secondary btn-lg active"  style="float: left; width: 70px; height: 70px; display: block;
          margin-left: 20px;"
          >
          <a href="7la casa de papel.php" style=" text-decoration: none;">
            <span style=" color: #423A3A; font-size: 40px; font-family: sans-serif; ">7</span>
          </a>
        </div>
        <!-- 7--->
        <!-- 8--->
        <div  class="btn btn-secondary btn-lg active"   style="float: left; width: 70px; height: 70px;  display: block;
          margin-left: 20px;"
          >
          <a href="8la casa de papel.php" style=" text-decoration: none;">
            <span style=" color: #423A3A; font-size: 40px; font-family: sans-serif; ">8</span>
          </a>
        </div>
        <!-- 8--->

      </div>
    </div>
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <div class="card text-center">
      <div class="card-header" style="font-family: serif; font-size: 30px;">
           La Casa de Pape 6
      </div>
      <div class="card-body">
  <iframe src="https://openload.co/embed/g4bjnddQJ8M/" scrolling="no" frameborder="0" width="700" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
  </div>
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