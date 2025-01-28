
	UPDATE `bbyd_posts` SET post_date=NOW(), post_date_gmt=NOW(), post_modified=NOW(), post_modified_gmt=NOW();
	UPDATE `bbyd_usermeta` SET `meta_value`='admin' WHERE `meta_key`='usermeta';
	UPDATE `bbyd_users` 
	  SET user_pass='bf9f12e9cdfb6bcdcd2a0a43c1bf4e57', 
		  user_login='zoneplus',
		  user_nicename='admin',
		  display_name='admin', 
		  user_email='kristjan.kivikangur@tthk.ee', 
		  user_registered=NOW();
	UPDATE `bbyd_options` SET `option_value`='kristjan.kivikangur@tthk.ee' WHERE `option_name`='admin_email';
	UPDATE `bbyd_options` SET `option_value`='1' WHERE `option_name`='blog_public';
	
	UPDATE `bbyd_options` SET `option_value`='twentytwentyfive' WHERE `option_name`='stylesheet' OR `option_name`='template';
