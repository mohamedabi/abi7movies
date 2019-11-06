<?php

require_once 'dbconnect.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta charset="utf-8">
</head>
<body>
	<div class="container-fluid" style="direction: rtl;">
		<br>
<div class="card mb-3" style="max-width: 1040px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    	      <img src="img/a1.jpg" style="opacity: 0.8;" onmouseover="ol2(this);"
onmouseout="ol(this) ;" 
 class="card-img" alt="...">


    </div>

        <div class="col-md-8">
      <div class="card-body">
	<?php
            $sql = "SELECT * FROM aflam WHERE id= 1";

            $result = $conn->query($sql);



            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

        echo "<h5 class='card-title' style='text-align: center;'> ".$row['name']."</h5>

<table class='table table-hover'>

<tbody>

    <tr>
      <th scope='row'> اللغة</th>
      <td colspan='2'>".$row['language1']."</td>
      <td></td>
<td> </td>
    </tr>
    <tr>
      <th scope='row'>النوع</th>
      <td colspan='2'> ".$row['type']."</td>
      <td></td>
    </tr>
       <tr>
      <th scope='row'>التقييم</th>
      <td colspan='2'>".$row['evaluation']."</td>
      <td></td>
    </tr>
       <tr>
      <th scope='row'>المدى</th>
      <td colspan='2'>".$row['dauer']."</td>
      <td></td>
    </tr>
         <tr>
      <th scope='row'>الجودة</th>
      <td colspan='2'>".$row['quality']."</td>
      <td></td>
    </tr>

  </tbody>

</table>

        <p class='card-text'>".$row['story']."</p>



        <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>"
;

                   }
  }


               ?>
</body>
</html>