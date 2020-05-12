<?php

return [

		// Create news view

	'create_news_view' => 	"CREATE VIEW `news_view` AS SELECT n.id AS id, n.title AS title, n.tags AS tags, n.image_path AS image_path, n.details AS details, n.user_id AS user_id, u.name AS user_name, n.created_at AS created_at, n.updated_at AS updated_at, n.deleted_at AS deleted_at FROM news n, users u WHERE n.user_id = u.id AND n.deleted_at IS NULL",

		// Create donations view

	'create_donations_view' => 	"CREATE VIEW `donations_view` AS SELECT d.id AS id, d.donation AS donation, d.donation_date AS donation_date, d.project_id AS project_id, p.name AS project_name, d.member_id AS member_id, m.name AS member_name, d.created_at AS created_at, d.updated_at AS updated_at, d.deleted_at AS deleted_at FROM donations d, members m, projects p WHERE d.member_id = m.id AND d.project_id = p.id  AND d.deleted_at IS NULL",

		// Create reset password link view

	'create_reset_password_links_view' => 	"CREATE VIEW `reset_password_links_view` AS SELECT r.id AS id, r.user_id AS user_id, u.name AS name, r.token AS token, r.validity AS validity, r.created_at AS created_at, u.updated_at AS updated_at, u.deleted_at AS deleted_at FROM users u, reset_password_links r WHERE r.user_id = u.id",

];