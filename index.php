<?php

	function render_template($template, $context)
	{
		//$context is passed through to be used by template without really doing much, magic it seems.
		ob_start();
		include($template); //the output of the include is stored in a buffer... and then returned. :)
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
	
	include('settings.php');
	include('views.php');
	include('urls.php');
	
	
	
	$match = false;
	foreach($urls as $index => $function)
	{
		$requested_url = preg_replace("/^\\". $base_url ."/","",$_SERVER["REQUEST_URI"]); //remove the base_url
		$requested_url = str_replace('?'.$_SERVER['QUERY_STRING'],'', $requested_url); //remove any GET variables ( we can still use $_GET :) )
		if(preg_match($index, $requested_url, $args))
		{
			print call_user_func($function, $args);
			$match = true;
			break;
		}
	}
	if(!$match)
	{
		print error404();
	}

?>
