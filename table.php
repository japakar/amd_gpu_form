<?php
$counterFile = 'clickcount.txt' ;
include ('data.php');
$counter = @file_get_contents($counterFile);
?>
<!DOCTYPE html>
<html>
<head>
<title>GPU Hashrates for Turtlecoin</title>
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>
<body>


<table id="myTable">
  <tr>
   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
    <th onclick="sortTable(0)">GPU</th>
    <th onclick="sortTable(1)">RAM</th>
    <th onclick="sortTable(2)">Intensity</th>
    <th onclick="sortTable(3)">Work Size</th>
    <th onclick="sortTable(4)">Threads</th>
    <th onclick="sortTable(5)">Total Hashrate</th>
	 <th onclick="sortTable(6)">Mining Software</th>
  </tr>
  <tr>
    
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

  </tr>

	
	
</table>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

</body>
</html>