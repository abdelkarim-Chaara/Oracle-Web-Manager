<?php 

include "process.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Import Schemas </title>
		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="cqd1zwqkhmx1t3b"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body background="69.png">
<div class="container" style="width:50%;height:50%;">

<form action="" method="POST" enctype="multipart/form-data">
<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 45px"> IMPORT FULL DATABASE </h3>
</br>
<label  class="form-control" style="margin-right:15%;margin-top: 15%; width:100%">Choose File : </label></br></br>
<div class="file btn btn-lg btn-danger">
							
							<input id="fi" type="file" name="file"/>
						</div></br></br>



<input type="submit" style="margin-left:50px;width:60%;font-size:20px"  class="btn btn-danger " name="submit" value="import" />

</form>
</div>
</body>
</html>

<?php 

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$table=isset($_POST['schemas'])?$_POST['schemas']:null;



if(isset($_POST['submit'])) {
$filename=$_FILES["file"]['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], __DIR__.'\\'. $filename)) {

$cmd= "impdp system/tr@orcl full=yes directory=dpdir dumpfile=$filename logfile=exp.log";

system($cmd,$return);

if($return === 0) {

echo "<script>alert(\ Import Succeded  \")</script>";
} 

} else {
echo "<script>alert(\" Import failed  \")</script>";
}




}

?>