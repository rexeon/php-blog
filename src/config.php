<?php

// Global configs

return [
	'db' => [
		'dsn' => 'mysql:dbname=blog;host=127.0.0.1',
		'user' => 'root',
		'password' => 'root'
	],
	'route' => [
		'admin' => [
			'index',
			'markdown',
			'blogPost',
			'getPosts',
			'editPost',
			'deletePost'
		],
		'explorer' => [
			'index',
			'showBlog',
			'archive',
			'listPosts'
		]
	]
];