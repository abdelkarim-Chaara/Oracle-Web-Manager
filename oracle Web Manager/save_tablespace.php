
<!DOCTYPE html>
<html>
<head>
	<title></title>

		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="cqd1zwqkhmx1t3b"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

</head>
<body background="69.png">
<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px">SAVE TABLESPACES TO CLOUD</h3>
<table class="table table-hover">
<th scope="col">TABLESPACES</th>
<th scope="col">ACTION</th>
	
<?php
$i=0;

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'tblspace')
        { 
$i=1;

        echo "<tr scope=\"row\"><td>$file</td>";
          echo "<td><a href=\"$file\" class=\"dropbox-saver\"></a></td></tr>";
       } 
    }
    closedir($handle);
}

if($i===0) {

  echo "\n No Tablespace Found";
}




?>
<table>


</body>
</html>
