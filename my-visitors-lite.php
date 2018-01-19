<?php
/**
 * Created by PhpStorm.
 * User: Eiko
 * Date: 2018/01/19 019
 * Time: 17:10
 */
/*
  Plugin Name: My Visitors Lite
  Version: 0.001
  Plugin URI: http://kan.willin.org/?p=1335
  Description: 基于 Willin Kan 的老插件模仿而写的
  Author: Eiko
  Author URI: https://rainiv.com
*/
defined('ABSPATH') or die('This file can not be loaded directly.');

/**
 * 添加设置页面
 * docs: https://codex.wordpress.org/Administration_Menus
 */
function mvl_add_menu_page() {
	add_menu_page( 'My visitors lite 页面', 'My visitors lite', 'manage_options', 'my-visitors-lite-page', 'mvl_page_content' );
	add_submenu_page('my-visitors-lite-page', 'My visitors lite 子页面', 'MVL subpage','manage_options','my-visitors-lite-subpage','mvl_subpage_content');
}
function mvl_page_content() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>主页面</p>';
	echo '</div>';
}
function mvl_subpage_content() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>子页面</p>';
	echo '</div>';
}
add_action( 'admin_menu', 'mvl_add_menu_page' );