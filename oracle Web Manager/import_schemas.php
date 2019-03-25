

<?php 

include "process.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Import Schemas </title>
		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="cqd1zwqkhmx1t3b"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	div {
  position: relative;
  overflow: hidden;
}
.fi {
  position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
  width="100%;
}



</style>
</head>
<body background="69.png">
<form action="" method="POST" enctype="multipart/form-data">
	<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px" > IMPORT SCHEMAS </h3>

<div class="container" style="margin-top:20%;width:50%;height:50%;">

<label  style="margin-right:5px">Schema Name : </label><input width="100%" class="form-control" type="text" name="schemas"/> 
<br><br>
<div class="file btn btn-lg btn-primary">
							
							<input id="fi" type="file" name="file"/>
						</div><br><br>

<input type="submit" style="margin-left:100px;width:40%;font-size:20px" class="btn btn-primary " name="submit" value="import" />
</div>

</form>
</body>
</html>

<?php 
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$table=isset($_POST['schemas'])?$_POST['schemas']:null;



if(isset($_POST['submit'])) {

$filename=$_FILES["file"]['name'];
if (move_uploaded_file($_FILES['file']['tmp_name'], __DIR__.'\\'. $filename)) {
    echo "\n\n\nUpload Succeded\n\n";
} else {
   echo "\n\n\nFile was not uploaded\n\n";
}

$cmd= "impdp test/test@orcl schemas=$table directory=dpdir dumpfile=$filename logfile=exp.log";
system($cmd,$return);
if($return === 0) {

echo "<script>alert(\"$table Import Succeded\")</script>";
} else {


	echo "<script>alert(\" $table Already Exists Its Imported Check Log File\")</script>";

}



}

?>