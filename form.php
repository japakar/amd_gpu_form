<?php

$counterFile = 'clickcount.txt' ;
$counter = @file_get_contents($counterFile);
if ( ! $counter = @file_get_contents($counterFile) )
    {
        if ( ! $myfile = fopen($counterFile,'w') )
            die('Unable to create counter file !!') ;
        chmod($counterFile,0644);
        file_put_contents($counterFile,1) ;
    }

$clicsCount = 0 ;
if( isset($_POST['submit']) ) { 
    $clicsCount = clickInc();
}

function clickInc()
{
	$count = ("clickcount.txt");
	//$counter = @file_get_contents($count)
    

    $clicks = file($count);
    $clicks[0]++;

    $fp = fopen($count, "w") or die("Can't open file");
    fputs($fp, "$clicks[0]");
    fclose($fp);

    return $clicks[0];
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>AMD GPU</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>AMD GPU Only</a></h1>
		<form id="amd_gpu" class="xmrstak"  method="post" action="">
					<div class="form_description">
			<h2>AMD GPU Only</h2>
			<p>Please enter details for mining with you're GPU on the Turtle Network</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">AMD GPU  </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">RAM </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Intensity </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Work Size </label>
		<div>
			<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Threads </label>
		<div>
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Hash Rate </label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_6">Mining Software Used </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="amd_gpu" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>
<a href="http://trtl.se/form/table.php">Table Results</a>		
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	
	</body>
</html>
<?php


              
if(isset($_POST['element_1']))
{
$data= $_POST['element_1'];
$data2= $_POST['element_2'];
$data3= $_POST['element_3'];
$data4= $_POST['element_4'];
$data5= $_POST['element_5'];
$data6= $_POST['element_6'];
$data7= $_POST['element_7'];



$a= "<?php \n\n\$gpu$counter = '$data';\n\n";
$b = "\n\n\$ram$counter = '$data2';\n\n";
$c = "\n\n\$int$counter = '$data3';\n\n";
$d = "\n\n\$wrk$counter = '$data4';\n\n";
$e = "\n\n\$thr$counter = '$data5';\n\n";
$f = "\n\n\$hash$counter = '$data6';\n\n";
$g = "\n\n\$soft$counter = '$data7';\n\n?>";

$all = ("$a $b $c $d $e $f $g");

$fp = fopen('data.php', 'a');
fwrite($fp, $all);
fclose($fp);
}
?>