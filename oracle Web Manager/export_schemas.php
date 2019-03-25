<?php 

include "process.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Export Schemas </title>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body background="69.png">
<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px">EXPORT SCHEMAS</h3>
<form action="" method="POST">
<table class="table table-hover">
	
<th  style="font-size:20px" scope="col">
SCHEMAS</th>
<th  style="font-size:20px" scope="col" >
SELECTION</th>


<?php 	
ini_set('max_execution_time', 1000); //300 seconds = 5 minutes


$tables=ListerSchemas();
foreach ($tables as $key => $value) {
echo "<tr><td scope=\"row\" ><label>$value </label> </td>" ;
echo "<td><input type='radio' name='schemas' value=$value /></td></tr>" ;
}
?>


</table>
<center>
<input type="submit" name="submit"  style="width:30%;font-size:20px" class="btn btn-primary " value="Export" />
</center>
</form>
</body>
</html>

<?php 

if(isset($_POST['submit'])) {


if(empty($_POST['schemas']) ) {


echo '<script>alert("Select One Schemas")</script>';
} else {

$schemas=$_POST['schemas'];

$cmd= "expdp system/tr@orcl schemas=$schemas directory=dpdir dumpfile=$schemas.sch logfile=exp.log";
system($cmd,$return);
if($return === 0) {

sleep(5);
echo "<script>alert('Export Succeded')</script>";


header("location:$schemas.sch");
}

else {

echo "<script>alert(\"$schemas Already Exported \")</script>";


}
}

}

?>