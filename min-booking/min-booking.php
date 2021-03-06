<?php
/**
 * Plugin Name:       Minimum Car Booking Days For Sunshine
 * Plugin URI:        https://ysibangla.com
 * Description:       This plugin is specially designed for sunshine automobiles
 * therefore, it won't work for any other websites or theme.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdus Samad
 * Author URI:        https://www.linkedin.com/in/samad-sust/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       Ysi General Plugin for sunshine
 */
if( !defined('ABSPATH')) exit;
global $wpdb;

function set_thirty_day_min_booking($min_days){
  // set minimum booking for 30 days
  $min_days = 30;
  return $min_days;
}

add_filter('change_minumum_booking_day', 'set_thirty_day_min_booking');
