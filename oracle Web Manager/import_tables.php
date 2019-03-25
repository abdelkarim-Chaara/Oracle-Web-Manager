<?php 

include "process.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Import Tables </title>
		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="cqd1zwqkhmx1t3b"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body background="69.png">

<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px"> IMPORT TABLES </h3>
<form action="" method="POST" enctype="multipart/form-data">

<div class="container" style="margin-top:20%;width:50%;height:50%;">

<label style="margin-right:5px"> Table Name : </label><input width="100%" class="form-control"  type="text" name="tables"/>
<br><br>
<div class="file btn btn-lg btn-primary">
							
							<input id="fi" type="file" name="file"/>
						</div></br><br><br>



<input  type="submit"  style="margin-left:100px;width:40%;font-size:20px"  class="btn btn-primary " name="submit" value="import" />

</form>
</div>
</body>
</html>

<?php 
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$table=isset($_POST['tables'])?$_POST['tables']:null;



if(isset($_POST['submit'])) {

$filename=$_FILES["file"]['name'];
if (move_uploaded_file($_FILES['file']['tmp_name'], __DIR__.'\\'. $filename)) {
    echo "\n\n\nUpload Succeded\n\n\n";
} else {
   echo "\n\n\nFile was not uploaded\n\n";
}

$cmd= "impdp system/tr@orcl tables=$table  content=data_only directory=dpdir dumpfile=$filename logfile=exp.log";
system($cmd,$return);

if($return === 0) {

echo "<script>alert(\"$table Imported Successfuly  \")</script>";
} else {

echo "<script>alert(\"$table Already Exists But its Imported Check Log File  \")</script>";


}


}

?>