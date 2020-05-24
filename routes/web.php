<?php

return [

		/* 
		*	Declaring all route urls
		*	Make sure there is no slash (/) at the end of the route key string
		*	Each route url key must contain a class and and a method referenced with "@" as value
		*/

		// public pages

	'welcome' => 'HomeController@welcome',

	'meghna' => 'HomeController@aboutMeghna',

	'members' => 'HomeController@members',

	'members/show' => 'HomeController@showMember',

	'projects' => 'HomeController@projects',

	'projects/show' => 'HomeController@showPoject',

	'news' => 'HomeController@news',

	'news/show' => 'HomeController@showNews',

	'subscribe' => 'HomeController@subscribe',

		// admin sign in pages

	'admin/signin' => 'Admin/AuthController@signin',

	'admin/captcha' => 'Admin/AuthController@checkCaptcha',

	'admin/login' => 'Admin/AuthController@login',

	'admin/password/forgot' => 'Admin/AuthController@forgotPassword',

	'admin/password/mail' => 'Admin/AuthController@sendResetInfo',

	'admin/password/reset' => 'Admin/AuthController@resetPassword',

	'admin/password/update' => 'Admin/AuthController@updatePassword',

	'admin/signout' => 'Admin/AuthController@signout',

		// admin web pages

	'admin/web/all' => 'Admin/WebController@index',

	'admin/web/update' => 'Admin/WebController@update',

		// admin news pages

	'admin/news/all' => 'Admin/NewsController@index',

	'admin/news/create' => 'Admin/NewsController@create',

	'admin/news/store' => 'Admin/NewsController@store',

	'admin/news/edit' => 'Admin/NewsController@edit',

	'admin/news/update' => 'Admin/NewsController@update',

	'admin/news/delete' => 'Admin/NewsController@delete',

		// admin members pages

	'admin/members/all' => 'Admin/MemberController@index',

	'admin/members/create' => 'Admin/MemberController@create',

	'admin/members/store' => 'Admin/MemberController@store',

	'admin/members/show' => 'Admin/MemberController@show',

	'admin/members/donations/add' => 'Admin/MemberController@addDonation',

	'admin/members/donations/delete' => 'Admin/MemberController@deleteDonation',

	'admin/members/edit' => 'Admin/MemberController@edit',

	'admin/members/update' => 'Admin/MemberController@update',

	'admin/members/delete' => 'Admin/MemberController@delete',

		// admin projects pages

	'admin/projects/all' => 'Admin/ProjectController@index',

	'admin/projects/create' => 'Admin/ProjectController@create',

	'admin/projects/store' => 'Admin/ProjectController@store',

	'admin/projects/show' => 'Admin/ProjectController@show',

	'admin/projects/edit' => 'Admin/ProjectController@edit',

	'admin/projects/update' => 'Admin/ProjectController@update',

	'admin/projects/delete' => 'Admin/ProjectController@delete',

		// admin user pages

	'admin/users/all' => 'Admin/UserController@index',

	'admin/users/create' => 'Admin/UserController@create',

	'admin/users/store' => 'Admin/UserController@store',

	'admin/users/show' => 'Admin/UserController@show',

	'admin/users/edit' => 'Admin/UserController@edit',

	'admin/users/update' => 'Admin/UserController@update',

	'admin/users/edit/password' => 'Admin/UserController@editPassword',

	'admin/users/update/password' => 'Admin/UserController@updatePassword',

	'admin/users/delete' => 'Admin/UserController@delete',

];
