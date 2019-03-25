
<!DOCTYPE html>
<html>
<head>
	<title></title>

		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="cqd1zwqkhmx1t3b"></script>

</head>
<body background="69.png">
<h3 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px">SAVE FULL DB TO CLOUD</h3>
<h2 style="font-family: OCR A Std, monospace ; text-align: center; font-size: 50px" ></h2>
<form>
<table>
<th>DATABASES</th>
<th>ACTION</th>
	
<?php
$i=0;

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'dbf')
        { 
$i=1;

        echo "<tr><td>$file</td>";
          echo "<td><a href=\"$file\" class=\"dropbox-saver\"></a></td></tr>";
       } 
    }
    closedir($handle);
}

if($i===0) {

  echo "\n No Database Found\n";
}




?>
<table>
</form>
</body>
</html>
