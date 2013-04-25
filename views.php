<?php

	function index()
	{
		$context['title'] = "hello";
		$context['content'] = "hello world";
		return render_template('templates/home.php', $context);
	}
	
	function bye()
	{
		$context['title'] = "bye";
		$context['content'] = "goodbye world";
		return render_template('templates/home.php', $context);
	}
	
	function number($args)
	{
		if($args['number'] > 10)
			return error404();
		$context['title'] = "numberz?!";
		$context['content'] = "you entered number: ". $args['number'];
		return render_template('templates/home.php', $context);		
	}
	
	function add($args)
	{
		$context['title'] = "numberz?!";
		$context['content'] = "total: ". ($args['num1'] + $args['num2']);
		return render_template('templates/home.php', $context);				
	}
	
	function using_gets()
	{
		$context['title'] = "using gets?!";
		$context['content'] = "got: ". $_GET['test'];
		return render_template('templates/home.php', $context);		
	}
	
	function error404()
	{
		header("HTTP/1.0 404 Not Found");
		return "404!";
	}

?>
