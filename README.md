Hakushon
========

A PHP URL routing thing using regex.

urls.php
--------
```
  $urls = array(
		"/^\/$/" => 'index',
		"/^\/about-us(\/|)$/" => 'aboutUs',
    "/^\/blog\/(?P<postId>\d+)(\/|)$/" => 'blogPost'
	);
```

views.php
---------
```
  function index()
	{
		$context['title'] = "hello";
		$context['content'] = "hello world";
		return render_template('templates/home.php', $context);
	}
	
	function aboutUs()
	{
		$context['title'] = "bye";
		$context['content'] = "goodbye world";
		return render_template('templates/home.php', $context);
	}
  function blogPost($args)
  {
    //do something with $args['postId'];
  }
```

Templating?
-----------

not quite, using plain PHP right now. Perhaps another, already existing one can be wedged in?

ORM
---

I wish... use another one?
