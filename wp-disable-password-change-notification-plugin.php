<?php
/*
	Plugin Name: Disable Password Change Notifications
	Plugin URI: https://github.com/richardsession/wp-disable-password-change-notification
	Description: Disable password update emails in WordPress for admins
	Version: 1.0.0
	Author: Richard Session
	Author URI: https://richardsession.com
	Text Domain: password
	GitHub Plugin URI: https://github.com/richardsession/wp-disable-password-change-notification
	GitHub Branch: master
	License: MIT
*/

if ( !function_exists( 'wp_password_change_notification' ) ) {
    function wp_password_change_notification() {
    	return;
    }
}