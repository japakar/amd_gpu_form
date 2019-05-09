<?php
$counterFile = 'clickcount.txt' ;
include ('data.php');
$counter = @file_get_contents($counterFile);
?>
<!DOCTYPE html>
<html>
<head>
<title>GPU Hashrates for Turtlecoin</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.1/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<body>
<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
              
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">TurtleCoin GPU Hashrates</h3>
      </div>

<div class="container">

<div class="row table">
<div class="col-lg-12">
<table id="example" class="table table-striped table-bordered" style="width:100%">
   <thead>
  <tr>
  
  
     <th>GPU</th>
     <th>RAM</th>
     <th>Intensity</th>
     <th>Work Size</th>
     <th>Threads</th>
     <th>Total Hashrate</th>
	 <th>Mining Software</th>
  </tr>
  </thead>
   <tbody> 
	<?php 
	$counter2= ($counter  -1);
	$n = 0;
	
	for( $i = 0; $i < intval($counter2); $i++ )
	{
	$n++;
	$a1 = ${'gpu'.$n};
	$a2 = ${'ram'.$n};
	$a3 = ${'int'.$n};
	$a4 = ${'wrk'.$n};
	$a5 = ${'thr'.$n};
	$a6 = ${'hash'.$n};
	$a7 = ${'soft'.$n};
	
	echo '<tr><td>'.$a1.'</td>';
	echo '<td>'.$a2.'</td>';
	echo '<td>'.$a3.'</td>';
	echo '<td>'.$a4.'</td>';
	echo '<td>'.$a5.'</td>';
	echo '<td>'.$a6.'</td>';
	echo '<td>'.$a7.'</td></tr>';
	}  ?>

  

	
</tbody>	
</table>
</div></div></div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
