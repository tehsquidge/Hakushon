<?php
	//regexs should treat the root to be from the $base_url
	//if the url matches multiple routes only the first one will be ran
	$urls = array(
		"/^\/$/" => 'index',
		"/^\/goodbye(\/|)$/" => 'bye',
		"/^\/number\/(?P<number>\d+)(\/|)$/" => 'number',
		"/^\/add\/(?P<num1>\d+)\/(?P<num2>\d+)(\/|)$/" => 'add',
		"/^\/using_gets(\/|)$/" => 'using_gets'
	);

?>
