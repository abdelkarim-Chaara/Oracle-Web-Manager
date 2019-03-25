<?php 

include "process.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Export tables </title>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body background="69.png">
<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px">EXPORT TABLES</h3>
<form action="" method="POST">
<table class="table table-hover">
	
<th  style="font-size:20px" scope="col">
TABLES</th>
<th  style="font-size:20px" scope="col" >
SELECTION</th>

<?php 	
ini_set('max_execution_time', 1000); //300 seconds = 5 minutes


$tables=ListerTables();
foreach ($tables as $key => $value) {
echo "<tr scope=\"row\"><td><label>$value </label> </td>" ;
echo "<td><input type='radio' name='tables' value=$value /></td></tr>" ;
}
?>


</table>
<center>
<input type="submit" name="submit" style="width:30%;font-size:20px" class="btn btn-primary " value="Export" />
</center>
</form>
</body>
</html>

<?php 

if(isset($_POST['submit'])) {


if(empty($_POST['tables']) ) {


echo '<script>alert("Select One table")</script>';
} else {

$tables=$_POST['tables'];

$cmd= "expdp test/test@orcl tables=$tables directory=dpdir content=data_only dumpfile=$tables.tbl logfile=exp.log";
system($cmd,$return);
if($return === 0) {


header("location:$tables.tbl");

}
else {


echo "<script>alert(\"$tables Already Exported \")</script>";

}

}

}

?>