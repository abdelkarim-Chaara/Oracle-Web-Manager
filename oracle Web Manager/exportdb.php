

<!DOCTYPE html>
<html>
<head>
	<title>Export Schemas </title>
		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="cqd1zwqkhmx1t3b"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body background="69.png">
<div class="container">
<form action="" method="POST">
<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px"> EXPORT FULL DATABASE</h3></br>
<center><input type="submit" style="width:60%;height:60%;font-size:20px; margin-top: 20%;font-family: OCR A Std, monospace ; text-align: center; font-size: 50px" class="btn btn-danger "  name="submit" value="EXPORT NOW" /></center>
<br/><br/>

</form>

</div>
</body>
</html>

<?php 


ini_set('max_execution_time', 300); //300 seconds = 5 minutes

if(isset($_POST['submit'])) {
sleep(15);
$cmd= "expdp system/tr@orcl full=yes directory=dpdir dumpfile='dumpdb.dbf' logfile=exp.log";
system($cmd,$return);
if($return === 0) {



echo "<script>alert('Full Export Succeded')</script>";


header("location:dumpdb.dbf");
}
else {

	echo "<script>alert('Full Export failed')</script>";

}


}



?>