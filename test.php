


<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>DataTables</title>
<script src="https://ajax.googleapis.com/.../jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<body>
<!--
For DataTables to be able to enhance an HTML table, the table must be valid, well formatted HTML, with a header (thead) and a single body (tbody). An optional footer (tfoot) can also be used.
-->
<table id="table_id" class="display">
<thead>
<tr>
<th>tarek</th>
<th>amr</th>
</tr>
</thead>
<tbody>
<tr>
<td>age</td>
<td>Row 1 Data 2</td>
</tr>
<tr>
<td>Row 2 Data 1</td>
<td>Row 2 Data 2</td>
</tr>
</tbody>
</table>
<script>
$(document).ready( function () {
$('#table_id').DataTable();
} ); 
</script>


<br>

<input id="txt" type="button" name="ok" value="hello">

<script src="test.js"></script>
<br>
<br>

<script>
	
var v1 = "mohamed";
var v2 = "1995";
document.write( v1);

document.write("<br>");

document.write(v2);




document.write("<br>");
document.write("<br>");

document.write(v1 + "<br>"+ v2);
document.write("<br>");
 document.write("<br>");

 var vienna = {count:1700000 , place:"400m" , favorite:"tomatem"};

 document.write(vienna);
</script>


<br>
<br>


<h1 id="lbl"></h1>

<label>Username:</label>
<input id="txtName">

<button onclick="sayHello();">login
        </button>
<br> <br>



<!-- 

 <label>Password:</label>
<input type="Password" name="Password" id="pass">

-->





<script type="text/javascript" src="mein.js"></script>

</body>
