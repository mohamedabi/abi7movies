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

      <img src="img/2019/a12.jpg" style="opacity: 0.8;" onmouseover="ol2(this);"
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
      <td colspan="2">English</td>
      <td></td>
<td> </td>
    </tr>
    <tr>
      <th scope="row">النوع</th>
      <td colspan="2">  أكشن , مغامرة , خيال علمي    </td>
      <td></td>
    </tr>
       <tr>
      <th scope="row">التقييم</th>
      <td colspan="2">6,1/10</td>
      <td></td>
    </tr>
       <tr>
      <th scope="row">المدى</th>
      <td colspan="2"> 1h 53min  </td>
      <td></td>
    </tr>
         <tr>
      <th scope="row">الجودة</th>
      <td colspan="2">BluRay 1080p</td>
      <td></td>
    </tr>

  </tbody>

</table>

        <p class="card-text">تحميل و مشاهدة فيلم X-Men: Dark Phoenix 2019 مترجم فى اطار من الاكشن والمغامرات والخيال تقع الأحداث عام 1992، قبل عشرة أعوام من أحداث فيلم (X-Men: Apocalypse)، وبعد انضمام (جين جراي) إلى فريق (المتحولون إكس). حيث تطور (جين جراي) قدراتها الخارقة، لدرجة أن هذه القدرات تفسدها وتحولها إلى (فينيكس المُظلمة)؛ فيصبح فريق المتحولين إكس أمام خيار صعب في أن يحسموا قرارهم بأن حياة أحد أفرادهم ليست أكثر قيمة من حياة البشر أجمعين.
     </p>



        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


<div class="card text-center" style="width: 250px;  float: left; margin-top: -530px;">
  

    <h5 class="card-title"><a href="series.php"><button type="button" class="btn btn-outline-danger" style="margin-top: 10px;" ><i class="fas fa-undo"></i>    الرجوع      </button></a>
      <hr>


      <a href="https://openload.co/f/UZhG0PyiznQ/Aquaman"><button type="button" class="btn btn-outline-success" style="text-align: center;"><i class="fas fa-download"></i>


    التحميل الان      </button></a>
    <hr>


    <a href="abilofilm.php"><button type="button" class="btn btn-outline-dark" ><i class="fas fa-home"></i>&nbsp; الصفحة الرئيسية</button></a>

    </h5>


  </div>

 </div>
  <div class="card-body">
   
<div class="td pda vat"><div id="yt_trailer" class="player"><iframe width="200" height="200" src="https://www.youtube.com/embed/whbar1UW1cs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>

  </div>
</div>


<div class="card text-center">
  <div class="card-header" style="font-family: serif; font-size: 30px;">
Dark Phoenix</div>
  <div class="card-body">
<iframe src="https://openload.co/embed/hmFfVmNV1xA/" scrolling="no" frameborder="0" width="700" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

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