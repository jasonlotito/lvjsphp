<?php

session_start();

$loggedIn = $_SESSION['validated'];

if ( $loggedIn ){
  reportLoggedIn();
  die();
}

if( ! isset($_POST['u'], $_POST['p']) ){
  killLogin();
}

$username = 'user';
$password = 'pass';

if ( ! validatedUsernamePassword( $username, $password ) )
{
  killLogin();
}

$_SESSION['validated'] = true;
$_SESSION['name'] = $_POST['u'];

reportLoggedIn();

/**
 * @param $username
 * @param $password
 * @return bool
 */
function validatedUsernamePassword( $username, $password )
{
  // database retrieval
  return $username === $_POST[ 'u' ] && $password === $_POST[ 'p' ];
}

function killLogin()
{
  header( "HTTP/1.0 401 Unauthorized" );
  die();
}

function reportLoggedIn()
{
  echo json_encode( [ 'success' => true ] );
}