<?php

	// Router::connectNamed(array('lang'));
	Router::redirect('/index.php', '/', array('status' => 301));

	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
	
	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/:language/search', array('controller' => 'search', 'action' => 'index'));
	Router::connect('/:language', array('controller' => 'pages', 'action' => 'home'),array('language' => '[a-z]{2}'));

	Router::connect('/:language/page/*', 
		array('controller' => 'pages', 'action' => 'page'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/investor/view/*', 
		array('controller' => 'investors', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/article/view/*', 
		array('controller' => 'articles', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/service/view/*', 
		array('controller' => 'services', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/news/view/*', 
		array('controller' => 'news', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/:controller/:action/*', 
		array('controller' => ':controller', 'action' => ':action', '*'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/:controller/*', 
		array('controller' => ':controller', 'action' => 'index', '*'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/admin/users/:action', array('controller' => 'users'));
	Router::connect('/admin/service/:action/*', array('controller' => 'services', 'admin' => true));
	Router::connect('/', array('controller' => 'pages', 'action' => 'home', 'Главная'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/search/*', array('controller' => 'search', 'action' => 'index'));
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'page'));
	Router::connect('/investor/view/*', array('controller' => 'investors', 'action' => 'view'));
	Router::connect('/service/view/*', array('controller' => 'services', 'action' => 'view'));
	Router::connect('/article/view/*', array('controller' => 'articles', 'action' => 'view'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
