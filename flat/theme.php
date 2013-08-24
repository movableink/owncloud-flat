<?php
throw("NO");
OCP\Config::setAppValue('files_index', 'icon', 'foo');
	OCP\Config::setAppValue('media_index', 'icon-awesome', 'icon-play-circle');
	OCP\Config::setAppValue('contacts_index', 'icon-awesome', 'icon-group');
	OCP\Config::setAppValue('calendar_index', 'icon-awesome', 'icon-calendar');
	OCP\Config::setAppValue('gallery_index', 'icon-awesome', 'icon-picture');

?>
