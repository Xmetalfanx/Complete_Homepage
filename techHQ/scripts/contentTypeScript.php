<?
 	$agent = $_SERVER['HTTP_USER_AGENT'];
	$broken = FALSE;
	$broken = $broken || (stristr($agent, "msie") && !stristr($agent, "opera"));
	$broken = $broken || (stristr($agent, "microsoft internet explorer");
	$broken = $broken || (stristr($agent, "mspie");
	$broken = $broken || (stristr($agent, "pocket");
	
	if ($broken)
	{
		header("Content-Type: text/xhtml");
	}
	else
	{	
		header("Content-Type: application/xhtml+xml");
	}
?>
	