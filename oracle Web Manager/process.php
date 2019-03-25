<?php

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

function ListerSchemas() {

	$conn = oci_connect("test", "test", "//localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   //print "Connected to Oracle!";
}

$tables= array();
$s = oci_parse($conn, 'SELECT distinct owner FROM dba_segments');
oci_execute($s);

$i=0;
while ($res=oci_fetch_assoc($s)) {
	if($res['OWNER'] != NULL ) {

   $tables[$i]=$res['OWNER'];
     $i++;
	}


}
return $tables;

	}

function ListerTables() {

	$conn = oci_connect("test", "test", "//localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   //print "Connected to Oracle!";
}

$tables= array();
$s = oci_parse($conn, 'SELECT * FROM user_tables');
oci_execute($s);

$i=0;
while ($res=oci_fetch_assoc($s)) {
	if($res['TABLE_NAME'] != NULL ) {

   $tables[$i]=$res['TABLE_NAME'];
     $i++;
	}


}
return $tables;

	}


  function ListerTablespace() {

  $conn = oci_connect("test", "test", "//localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   //print "Connected to Oracle!";
}

$tables= array();
$s = oci_parse($conn, 'SELECT distinct TABLESPACE_NAME FROM user_tables ');
oci_execute($s);

$i=0;
while ($res=oci_fetch_assoc($s)) {
  if($res['TABLESPACE_NAME'] != NULL ) {

   $tables[$i]=$res['TABLESPACE_NAME'];
     $i++;
  }


}
return $tables;

  }
