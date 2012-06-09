<?php
return array(
	'_root_'  => 'pages/view',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'news/create' => 'news/create',
	'news/(:any)' => 'news/view/$1',
	'news'        => 'news',
	'(:any)'      => 'pages/view/$1',
);