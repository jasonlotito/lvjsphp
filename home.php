<?php

session_start();

if ( ! $_SESSION[ 'validated' ] )
{
  header( "HTTP/1.0 401 Unauthorized" );
  die();
}

$username = $_SESSION['name'];

$page =<<<EOF
<p>Welcome back $username!!!</p>
EOF;

echo json_encode(['page'=>$page]);