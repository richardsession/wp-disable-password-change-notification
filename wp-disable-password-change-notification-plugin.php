<?php
/*
Plugin Name: Disable Password Change Notifications
Description: Disable password update emails in WordPress for admins
*/

if ( !function_exists( 'wp_password_change_notification' ) ) {
    function wp_password_change_notification() {
    	return;
    }
}