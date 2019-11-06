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
<body>
	<div class="container-fluid" style="direction: rtl;">

	<br>
<div class="card mb-3" style="max-width: 1040px;">
  <div class="row no-gutters">
    <div class="col-md-4">

      <img src="img/a2.jpg" style="opacity: 0.8;" onmouseover="ol2(this);"
onmouseout="ol(this) ;" 
 class="card-img" alt="...">


    </div>
    <div class="col-md-8">
      <div class="card-body">

               <h5 class="card-title" style="text-align: center;"> Bumblebee </h5>



<table class="table table-hover">

  <tbody>

    <tr>
      <th scope="row">اللغة</th>
      <td colspan="2">English</td>
      <td></td>
<td> </td>
    </tr>
    <tr>
      <th scope="row">النوع</th>
      <td colspan="2"> Action, Adventure, Fantasy</td>
      <td></td>
    </tr>
       <tr>
      <th scope="row">التقييم</th>
      <td colspan="2">7.3/10</td>
      <td></td>
    </tr>
       <tr>
      <th scope="row">المدى</th>
      <td colspan="2"> 1h 54min </td>
      <td></td>
    </tr>
         <tr>
      <th scope="row">الجودة</th>
      <td colspan="2">BluRay 1080p</td>
      <td></td>
    </tr>

  </tbody>

</table>

        <p class="card-text">تدور أحداث الفيلم عام 1987، أثناء رحلة هروب بامبلبي من المطاردة حيث يجد مأوى في مخبأ خردة ببلدة شاطئية صغيرة بكاليفورنيا، في الوقت نفسه تحاول تشارلي وهي في مطلع الـ18 سنة أن تجد مكانًا لها في العالم، فتكتشف بامبلي محطم وبه آثار معارك كثيرة، وعندما تتمكن من تجديد أجزاءه وإعادته للحياة تدرك سريعًا إنه ليس مجرد سيارة فولكس فاغن صفراء تقليدية.</p>



        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


<div class="card text-center" style="width: 250px;  float: left; margin-top: -530px;">
  

    <h5 class="card-title"><a href="abilofilm.php"><button type="button" class="btn btn-outline-danger" style="margin-top: 10px;" ><i class="fas fa-undo"></i>    الرجوع      </button></a>
      <hr>


      <a href="https://openload.co/f/md1_rh23avg/%5BCimaClub.Com%5D-Bumblebee.2018.720p.BluRay.mkv"><button type="button" class="btn btn-outline-success" style="text-align: center;"><i class="fas fa-download"></i>


    التحميل الان      </button></a>
    <hr>


    <a href="abilofilm.php"><button type="button" class="btn btn-outline-dark" ><i class="fas fa-home"></i>&nbsp; الصفحة الرئيسية</button></a>

    </h5>


  </div>

 </div>

<div class="card"  style="width: 250px; float: left ;margin-top: -315px; margin-left: 15px;" >
  <h5 class="card-header" style="text-align: center;">مشاهدة اعلان الفيلم
</h5>
  <div class="card-body">
   
<div class="td pda vat"><div id="yt_trailer" class="player">
 <iframe width="227" height="209" src="https://www.youtube.com/embed/lcwmDAYt22k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div></div>


  </div>
</div>


<div class="card text-center">
  <div class="card-header" style="font-family: serif; font-size: 30px;">
Bumblebee 2018
  </div>
  <div class="card-body">
<iframe src="https://openload.co/embed/md1_rh23avg/" scrolling="no" frameborder="0" width="700" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>


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