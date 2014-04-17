<?php
/***FUNCTIONS FOR IMAP AUTH: ***/
$username=$_POST['username'];
$password=$_POST['password'];
	
	global $authmethods;
	$authmethods['imap']['server_address']='10.0.0.173';
	$authmethods['imap']['port']='143';

//echo $credentials['username'];
//echo $credentials['password'];

function quoteIMAP($str)
{
  return preg_replace('/'.addcslashes("([\"\\])",'/').'/', "\\1", $str);
}

function my_imap_auth ($username, $password)
{
	global $authmethods;
	$imap_server_address=$authmethods['imap']['server_address'];
	$imap_port=$authmethods['imap']['port'];
	  $imap_stream = fsockopen($imap_server_address,$imap_port);
	  if ( !$imap_stream ) {
	    return false;
	  }
	  $server_info = fgets ($imap_stream, 1024);

	  $query = 'b221 ' .  'LOGIN "' . $username .  '" "'  .$password . "\"\r\n";
	  $read = fputs ($imap_stream, $query);

	  $response = fgets ($imap_stream, 1024);
	  $query = 'b222 ' . 'LOGOUT';
	  $read = fputs ($imap_stream, $query);
	  fclose($imap_stream);

	  strtok($response, " ");
	  $result = strtok(" ");

	  if($result == "OK")
			{
			
			return TRUE;
	  		
	  		}
	  else
	    return FALSE;
}

if(my_imap_auth($username,$password))
{
	session_start();
	$_SESSION['userId']=$username;
	echo "sucess";
}
else
{

	echo "Invalid login,";

}

?>
