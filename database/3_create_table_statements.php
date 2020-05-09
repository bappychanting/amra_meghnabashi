<?php

return [

		// Create web contents

	'create_web_contents' => 	"CREATE TABLE `web_contents` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`content_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`content` longtext COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`)
						)",

		// Create users

	'create_users' => 	"CREATE TABLE `users` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`attempts` int(11) DEFAULT NULL,
							`login_token` varchar(255) DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
							UNIQUE KEY `users_username_unique` (`username`),
							UNIQUE KEY `users_email_unique` (`email`)
						)",

		// Create reset password links

	'create_reset_password_links' =>	"CREATE TABLE `reset_password_links` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`user_id` int(11) unsigned DEFAULT NULL,
							`validity` tinyint(4) NOT NULL DEFAULT '1',
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
  							KEY `user_id` (`user_id`),
							CONSTRAINT `reset_password_link_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
						)",

		// Create news

	'create_news' => 	"CREATE TABLE `news` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  							`title` text COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  							`tags` text COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`image_path` varchar(255) COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  							`details` longtext COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  							`user_id` int(11) unsigned DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
  							KEY `user_id` (`user_id`),
							CONSTRAINT `news_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
						)",

		// Create members

	'create_members' => 	"CREATE TABLE `members` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`details` longtext COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
							UNIQUE KEY `members_contact_unique` (`contact`)
						)",

		// Create members

	'create_projects' => 	"CREATE TABLE `projects` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`details` longtext COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`)
						)",

		// Create items

	'create_donations' => 	"CREATE TABLE `donations` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    						`donation` DECIMAL(8,2) NOT NULL,
  							`donation_date` date DEFAULT NULL,
  							`member_id` int(11) unsigned DEFAULT NULL,
  							`project_id` int(11) unsigned DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
  							KEY `member_id` (`member_id`),
  							KEY `project_id` (`project_id`),
							CONSTRAINT `donations_member_id` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
							CONSTRAINT `donations_project_id` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
						)"
];