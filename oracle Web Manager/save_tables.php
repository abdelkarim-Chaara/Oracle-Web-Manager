
<!DOCTYPE html>
<html>
<head>
	<title></title>

		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="cqd1zwqkhmx1t3b"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

</head>
<body background="69.png">
<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px">SAVE TABLES TO CLOUD</h3>
<table class="table table-hover">
<th scope="col">TABLES</th>
<th scope="col">ACTION</th>
	
<?php
$i=0;

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'tbl')
        { 
$i=1;

        echo "<tr><td>$file</td>";
          echo "<td><a href=\"$file\" class=\"dropbox-saver\"></a></td></tr>";
       } 
    }
    closedir($handle);
}

if($i===0) {

  echo "\n No Table Found";
}




?>
</table>

</form>

</body>
</html>
