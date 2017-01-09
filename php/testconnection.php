<html>
<head>
  <title>cvbcvb</title>
</head>
<body>xvxc<br />
  <?php

  $serverName = "http://sql.neit.edu"; //serverName\instanceName
  $connectionInfo = array( "Database"=>"SE414_GroupProject", "UID"=>"SE414_GroupProject", "PWD"=>"1234567890");
  $conn = sqlsrv_connect( $serverName, $connectionInfo);

  if( $conn ) {
       echo "Connection established.<br />";
  }else{
       echo "Connection could not be established.<br />";
       die( print_r( sqlsrv_errors(), true));
  }
  ?>
</body></html>
